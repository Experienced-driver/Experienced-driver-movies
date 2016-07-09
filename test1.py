#-*- coding: UTF-8 -*-

import graphlab

# str = {}
# for line in open(str1, 'r'):  # 打开指定文件
#     (userid, movieid, rating) = line.split('\t')  # 数据集中每行有4项
#     prefer.setdefault(userid, {})  # 设置字典的默认格式,元素是user:{}字典
#     prefer[userid][movieid] = float(rating)


# sf = graphlab.SFrame({'user_id': ["0", "0", "0", "1", "1", "2", "2", "2"],
#                      'item_id': ["a", "b", "c", "a", "b", "b", "c", "d"],
#                        'rating': [1, 3, 2, 5, 4, 1, 4, 3]})
# m = graphlab.recommender.item_similarity_recommender.create(sf, target='rating')
# recs = m.recommend()
r1 = 'test.csv'  # 目录的相对地址
#
# prefe

# sf = graphlab.SFrame({'user_id': ['0', '0', '0', '1', '1', '2', '2', '2'],
#                       'item_id': ['a', 'b', 'c', 'a', 'b', 'b', 'c', 'd']})
# m = graphlab.item_similarity_recommender.create(sf)
# recs = m.recommend()


# sf2 = graphlab.SFrame({'user_id': ['0', '0', '0','0', '1', '1', '2', '2', '2'],
#                         'item_id': ['a', 'b', 'c','d', 'a', 'b', 'b', 'c', 'd'],
#                         'rating': [1, 3, 2, 2, 5, 4, 1, 4, 3]})
sf2 = graphlab.SFrame.read_csv("ratings.csv")
# sf2 = graphlab.SFrame.re
m2 = graphlab.recommender.item_similarity_recommender.create(sf2, target="rating",
                                                  similarity_type='cosine')

# m2.predict(sf2)
recs = m2.recommend()
filename = 'result.txt'
graphlab.SFrame.export_csv(recs, 'result.csv', delimiter=',', line_terminator='\n')
# graphlab.SFrame.export_csv()
# graphlab.SFrame.
print recs
