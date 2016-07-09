# coding: utf-8
import re
import urllib2
import time
import pymongo


def GetHtmlCode(url):
    page = urllib2.urlopen(url)
    htmlCode = page.read().decode('utf-8')
    # fileObj=open('C:\\Users\\Jason\\Desktop\\wy.txt','w',encoding='utf-8')
    # fileObj.write(htmlCode)
    # fileObj.close()
    hc = htmlCode
    return hc


class MovieData:
    MovieName = ''
    MovieMoney = ''
    MovieMP = ''
    MovieDP = ''
    MovieAllMoney = ''

    def __init__(self, mn, mm, mmp, mdp, mam):
        self.MovieName = mn
        self.MovieMoney = mm
        self.MovieMP = mmp
        self.MovieDP = mdp
        self.MovieAllMoney = mam

    def _print(self):
        tm1 = time.strftime('%Y-%m-%d  %H:%M:%S')
        tm2 = str(tm1)
        print('电影名称: %s \n 票房: %s万元 \n 票房占比: %s \n 屏幕占比: %s \n 总收入: %s万元 \n 收集时间 is : %s ' % (
        self.MovieName, self.MovieMoney, self.MovieMP, self.MovieDP, self.MovieAllMoney, tm2))
        # return ('电影名称: %s \n 票房: %s万元 \n 票房占比: %s \n 屏幕占比: %s \n 总收入: %s万元 \n 收集时间 is : %s '%(self.MovieName,self.MovieMoney,self.MovieMP,self.MovieDP,self.MovieAllMoney,tm2))

    def get(self):
        tm1 = time.strftime('%Y-%m-%d  %H:%M:%S')
        tm2 = str(tm1)
        return ('电影名称: %s \n 票房: %s万元 \n 票房占比: %s \n 屏幕占比: %s \n 总收入: %s万元 \n 收集时间 is : %s ' % (
        self.MovieName, self.MovieMoney, self.MovieMP, self.MovieDP, self.MovieAllMoney, tm2))


def GetDataBlock(pagecode):
    DataBlock_re = r'<ul class="canTouch[\s\S]+?</ul>'
    DBre = re.compile(DataBlock_re)
    DBList = re.findall(DBre, pagecode)
    # print(DBList[0])
    # num=0
    # for i in DBList:
    #    num=num+1
    #    print(str(num)+'----------------------')
    #   print(i)
    return DBList


def MakeDataInfo(block):
    b1_re = r'<li class=\'c1\'>[\s\S]+?</li>'
    b1 = re.search(b1_re, block).group()
    b1 = re.sub(r'<li[\s\S]+?<b>', '', b1)
    b1 = re.sub(r'</b>[\s\S]+?</li>', '', b1).strip()
    print(b1)
    b2_re = r'<li class="c2 ">[\s\S]+?</li>'
    b2 = re.search(b2_re, block).group()
    b2 = re.sub(r'<li[\s\S]+?<b>', '', b2)
    b2 = re.sub(r'</b>[\s\S]+?</li>', '', b2).strip()
    print(b2)
    b3_re = r'<li class="c3 ">[\s\S]+?</li>'
    b3 = re.search(b3_re, block).group()
    b3 = re.sub(r'<li class="c3 ">', '', b3)
    b3 = re.sub(r'</li>', '', b3).strip()
    print(b3)
    b4_re = r'<li class="c4 ">[\s\S]+?</li>'
    b4 = re.search(b4_re, block).group()
    b4 = re.sub(r'<li class="c4 ">', '', b4)
    b4 = re.sub(r'</li>', '', b4).strip()
    print(b4)
    b5_re = r'<li class="c5 ">[\s\S]+?</li>'
    b5 = re.search(b5_re, block).group()
    b5 = re.sub(r'<li class="c5 ">', '', b5)
    b5 = re.sub(r'<span[\s\S]+?>', '', b5)
    b5 = re.search(r'[\d]+\.\d%', b5).group()
    print(b5)
    return MovieData(b1, b2, b3, b4, b5)


client = pymongo.MongoClient('localhost', 27017)
db = client.douban


def insert(name, income, rate1, rate2, alincome, time):
    db.piaofang.insert_one(
        {"name": name, "income": income, "mrate": rate1, "drate": rate2, "allincome": alincome, "time": time})


tm1 = time.strftime('%Y-%m-%d  %H:%M:%S')
tm2 = str(tm1)
pc = GetHtmlCode('http://piaofang.maoyan.com/')
# print(pc)a
bl = GetDataBlock(pc)
mdata = ''
for i in bl:
    mv = MakeDataInfo(i)
    insert(mv.MovieName, mv.MovieMoney, mv.MovieMP, mv.MovieDP, mv.MovieAllMoney, tm2)
    #insert(mv,tm2)
    #mv._print()
