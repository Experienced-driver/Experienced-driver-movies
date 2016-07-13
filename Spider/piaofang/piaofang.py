# coding: utf-8
import re
import urllib2
import time
import MySQLdb
from bs4 import BeautifulSoup
import lxml

import sys,os
reload(sys)
sys.setdefaultencoding('utf8')


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
        print('电影名称: %s \n 票房: %s万元 \n 票房占比: %s \n 屏幕占比: %s \n 总收�? %s万元 \n 收集时间 is : %s ' % (
        self.MovieName, self.MovieMoney, self.MovieMP, self.MovieDP, self.MovieAllMoney, tm2))
        # return ('电影名称: %s \n 票房: %s万元 \n 票房占比: %s \n 屏幕占比: %s \n 总收�? %s万元 \n 收集时间 is : %s '%(self.MovieName,self.MovieMoney,self.MovieMP,self.MovieDP,self.MovieAllMoney,tm2))

    def get(self):
        tm1 = time.strftime('%Y-%m-%d  %H:%M:%S')
        tm2 = str(tm1)
        return ('电影名称: %s \n 票房: %s万元 \n 票房占比: %s \n 屏幕占比: %s \n 总收�? %s万元 \n 收集时间 is : %s ' % (
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
    b1_re = ur'<li class=\'c1\'>[\s\S]+?</li>'
    b1 = re.search(b1_re, block).group()
    b1 = re.sub(ur'<li[\s\S]+?<b>', '', b1)
    b1 = re.sub(ur'</b>[\s\S]+?</li>', '', b1).strip()
    print(b1)
    b2_re = ur'<li class="c2 ">[\s\S]+?</li>'
    b2 = re.search(b2_re, block).group()
    b2 = re.sub(ur'<li[\s\S]+?<b>', '', b2)
    b2 = re.sub(ur'</b>[\s\S]+?</li>', '', b2).strip()
    print(b2)
    b3_re = ur'<li class="c3 ">[\s\S]+?</li>'
    b3 = re.search(b3_re, block).group()
    b3 = re.sub(ur'<li class="c3 ">', '', b3)
    b3 = re.sub(ur'</li>', '', b3).strip()
    print(b3)
    b4_re = ur'<li class="c4 ">[\s\S]+?</li>'
    b4 = re.search(b4_re, block).group()
    b4 = re.sub(ur'<li class="c4 ">', '', b4)
    b4 = re.sub(ur'</li>', '', b4).strip()
    print(b4)
    b5_re = ur'<li class="c5 ">[\s\S]+?</li>'
    b5 = re.search(b5_re, block).group()
    b5 = re.sub(ur'<li class="c5 ">', '', b5)
    b5 = re.sub(ur'<span[\s\S]+?>', '', b5)
    b5 = re.search(ur'[\d]+\.\d%', b5).group()
    print(b5)
    return MovieData(b1.strip(), b2.strip(), b3.strip(), b4.strip(), b5.strip())


def get_head(pc):
    soup = BeautifulSoup(pc, "lxml")
    date = soup.find("span", attrs={"id": "dayStr"}).string
    print date.strip().split("\n")[0]
    ticket_count = soup.find("span", attrs={"id": "ticket_count"}).string
    print ticket_count
    return date.strip().split("\n")[0], ticket_count.strip()


def insert(time, total_piaofang, name, income_now, income_ratio, row_ratio, occupancy):
    sql = "insert into piaofanginfo(time, total_piaofang, name, income_now, income_ratio, row_ratio, occupancy) values('%s', '%s', '%s', '%s', '%s', '%s', '%s')" % \
           (time, total_piaofang, name, income_now, income_ratio, row_ratio, occupancy)
    cursor.execute(sql)
    

pc = GetHtmlCode('http://piaofang.maoyan.com/')
time, total_piaofang = get_head(pc)

db = MySQLdb.connect("123.206.41.40", "hadoop", "0000", "springmybatis")
db.set_character_set('utf8')
cursor = db.cursor()

bl = GetDataBlock(pc)
for i in bl:
    mv = MakeDataInfo(i)
    insert(time, total_piaofang, mv.MovieName, mv.MovieMoney, mv.MovieMP, mv.MovieDP, mv.MovieAllMoney)

db.commit()
db.close()