#!/usr/bin/env Python
# -*- coding:utf-8 -*-


import MySQLdb
import os
import csv

from pyspark import SparkConf, SparkContext
from pyspark.mllib.recommendation import ALS, Rating


# 数据库操作
class Handle:
    def __init__(self):
        self._mysql_db = MySQLdb.connect(host="123.206.41.40",
                                         user="hadoop",
                                         passwd="0000",
                                         port=3306,
                                         db="springmybatis")
        self.mysql_cur = self._mysql_db.cursor()
        self.seq = 0

    def release_db(self):
        self.mysql_cur.close()
        self._mysql_db.close()

    def do_select(self):
        self.mysql_cur.arraysize = 50
        select_sql = "select * from rating"
        self.mysql_cur.execute(select_sql)
        count = 0
        csv_file = file('resys/all_rating.csv', 'wb')  
        writers = csv.writer(csv_file)
        #writers.writerow(['user_id', 'item_id', 'rating'])
        while 1:
            lines = self.mysql_cur.fetchmany(50)
            if len(lines) == 0:
                break
            for i in lines:
                writers.writerows([i])
        csv_file.close()

    def do_insert(self, user_id, item_id, re_rating, ranking):
        insert_sql = "insert into re_table(user_id, item_id, re_rating, ranking) values('%d', '%d', '%f', '%d')" % (user_id, item_id, re_rating, ranking)
        self.mysql_cur.execute(insert_sql)


def do_csv():
    p = Handle()
    p.do_select()
    p.release_db()


# 推荐系统，使用spark自带的机器学习库MLlib训练协同过滤算法模型
class RecSys:
    def __init__(self):
        # sparkcontext初始化，，“yarn-client” 是集群运行，"local"是本地运行
        #conf = SparkConf().setMaster("local").setAppName("RecSys")
        conf = SparkConf().setMaster("yarn-client").setAppName("RecSys")
        self.sc = SparkContext(conf=conf)
        
    def load_csv(self):
        # 读取csv文件
        raw_data = self.sc.textFile("file:///home/hadoop/resys/all_rating.csv")  # 这里的相对路径是hdfs的路径，以绝对路径要以file:// 开始
        raw_ratings = raw_data.map(lambda  x: x.split(","))
        self.ratings = raw_ratings.map(lambda x: Rating(int(x[0]), int(x[1]), float(x[2])))
    
    def train_model(self):
        """
        rank:对应ALS模型中的因子个数,也就是在低阶近似矩阵中的隐含特征个数。因子个数一般越多越好。但它也会直接影响模型训练和保存时所需的内存开销,尤其是在用户和物品很多的时候。因此实践中该参数常作为训练效果与系统开销之间的调节参数。通常,其合理取值为10到200。
        iterations:对应运行时的迭代次数。ALS能确保每次迭代都能降低评级矩阵的重建误差,但一般经少数次迭代后ALS模型便已能收敛为一个比较合理的好模型。这样,大部分情况下都没必要迭代太多次(10次左右一般就挺好)。
        lambda:该参数控制模型的正则化过程,从而控制模型的过拟合情况。其值越高,正则化越严厉。该参数的赋值与实际数据的大小、特征和稀疏程度有关。和其他的机器学习模型一样,正则参数应该通过用非样本的测试数据进行交叉验证来调整。
        试过一些参数，使用的rank、iterations和lambda参数的值分别为50、10和0.01，效果稍好:
        """
        self.model = ALS.train(self.ratings, 50, 10, 0.01)
        user_features = self.model.userFeatures()
        item_features = self.model.productFeatures()
        self.user_num = user_features.count()   # 用户数量
        self.item_num = user_features.count()   # 电影数量

        #predictRating = self.model.predict(789,123)

    def do_rec(self):
        # 推荐并存入数据库，每个用户推荐10个
        p = Handle()
        
        for user in range(1,self.user_num+1):
            top10_rec = self.model.recommendProducts(user, 10)
            for i,rec in enumerate(top10_rec):
                p.do_insert(user, rec.product, rec.rating, i)
        
        p.release_db






if __name__ == "__main__":
    do_csv()
    resys = RecSys()
    resys.load_csv()
    resys.train_model()
    resys.do_rec()