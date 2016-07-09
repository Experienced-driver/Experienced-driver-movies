#-*- coding: utf-8 -*-
"""douban_Top250"""
import urllib2
import string
import re
import csv
from bs4 import BeautifulSoup
import sys

reload(sys)
sys.setdefaultencoding('utf8')

def clean_html(html):
    '''清除html文本中的相关转义符号'''
    html = re.sub('&nbsp;', ' ', html)
    html = re.sub('&ensp;', ' ', html)
    html = re.sub('&emsp;', ' ', html)
    html = re.sub('&amp;', '&', html)
    html = re.sub('&lt;', '<', html)
    html = re.sub('&gt;', '>', html)
    html = re.sub('&quot;', '"', html)
    return html    

def doubanTop250_spider(pageNumber):
    '''爬取豆瓣Top250电影'''
    BASE_URL = "http://movie.douban.com/top250?start={start}"
    films = []
    for pages in range(pageNumber):
        print "crawling page%d..." % (pages+1)
        startNum = pages * 25
        listurl = BASE_URL.format(start=startNum)
        #print listurl
        soup = BeautifulSoup(urllib2.urlopen(listurl))
        for items in soup.findAll('div',{'class':'info'}):
            info = clean_html(str(items))
            name = items.find('span',{'class':'title'}).text
            url = re.search(r'<a href="(.*?)"', str(info)).group(1)
            try:
                filmsoup = BeautifulSoup(urllib2.urlopen(url))
            except Exception,e:
                continue
            film_info = str(filmsoup.find('div',{'id':'info'}))
            #print film_info
            director = re.search(r'导演</span>: <span class="attrs"><a href=".*?">(.*?)</a>', film_info).group(1).decode('utf8')
            #print director
            try:
                screenwriter = re.search(r'编剧</span>: <span class="attrs"><a href=".*?">(.*?)</a>', film_info).group(1).decode('utf8')
            except Exception,e:
                screenwriter = ''
            actor = re.search(r'主演</span>: <span class="attrs"><a href=".*?">(.*?)</a>', film_info).group(1).decode('utf8')
            nation = re.search(r'制片国家/地区:</span>(.*?)<br />', film_info).group(1).strip().decode('utf8')
            language = re.search(r'语言:</span>(.*?)<br />', film_info).group(1).strip().decode('utf8')
            releaseDate = re.search(r'上映日期:.*?">(.*?)</span>', film_info).group(1).decode('utf8')
            try:
                length = re.search(r'片长:.*?">(.*?)</span>', film_info).group(1).decode('utf8')
            except Exception,e:
                length = ''
            film_interest = filmsoup.find('div',{'id':'interest_sectl'})
            score = film_interest.find('strong',{'class':'ll rating_num'}).text
            scoreNum = film_interest.find('span',{'property':'v:votes'}).text

            related_info = filmsoup.find('div',{'class':'related-info'})
            summary = related_info.find('span',{'property':'v:summary'}).text
            
            item = [name, url, director, screenwriter, actor, nation, language, releaseDate, length, score, scoreNum, summary]
            films.append(item)
    return films

def write_csv(films):
    '''写数据'''
    with open('result.csv', 'wb') as f:
        f.write('\xEF\xBB\xBF')
        writer = csv.writer(f)
        writer.writerow(['电影名称', '链接', '导演', '编剧', '主演', '国家和地区', '语言', '上映日期', '片长', '评分', '评分人数', '剧情简介'])
        for film in films:
            writer.writerow(film)
    f.close()              

if __name__ == '__main__':
    pageNumber = int(raw_input("please enter page number(1-10):"))
    print "doubanTop250 spider is starting..."
    write_csv(doubanTop250_spider(pageNumber))
    print "ending..."
