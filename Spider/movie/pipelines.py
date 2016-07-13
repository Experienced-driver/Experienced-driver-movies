# coding: utf-8

import re
from scrapy import log
from twisted.enterprise import adbapi
import time
import MySQLdb
import MySQLdb.cursors


class MoviePipeline(object):
    def __init__(self):
        self.dbpool = adbapi.ConnectionPool(
            'MySQLdb', 
            host='123.206.41.40',
            db='springmybatis',
            user='hadoop',
            passwd='0000',
            cursorclass = MySQLdb.cursors.DictCursor,
            charset = 'utf8',
            use_unicode = True
        )
    
    def process_item(self, item, spider):
        #if spider.name != "mo_info":  return item
        if item.get("douban_id", None) is None: return item

        #spec = { "subject_id": item["subject_id"] }
        #doubanDB.movie.update(spec, {'$set': dict(item)}, upsert=True)
        query = self.dbpool.runInteraction(self._do_insert, item, spider)
        query.addErrback(self._handle_error, spider)
        return item
        
    def _do_insert(self, conn, item, spider):
 
        sql = "insert into movieinfo(genres,name,countries,douban_id,release_date,tags,languages,name_other,directors,actors,douban_rating,runtime,image,description) \
               values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')" % \
               (item["genres"],item["name"],item["countries"],item["douban_id"],item["release_date"],item["tags"],item["languages"],item["name_other"],item["directors"],
                item["actors"],item["douban_rating"],item["runtime"],item["image"],item["description"])
           
        conn.execute("select * from movieinfo where douban_id = %s", (item["douban_id"],))
        ret = conn.fetchone()
        if ret:
            pass
            #conn.execute("update movieinfo set %s where douban_id=%s" % (update_str[:-1], item["douban_id"]))
        else:
            conn.execute(sql)
            #for i in item:
                #sql1 = "insert into movieinfo(%s) values('%s')" % (i, item[i])
                #conn.execute(sql1) 
     
    def _handle_error(self, failue, spider):
        log.err(failue)
        
    
class MoviePipeline1(object):
    def __init__(self):
        self.db = MySQLdb.connect("127.0.0.1", "root", " ", "movie")
        self.cursor = self.db.cursor()
    
    def process_item(self, item, spider):
        print "asdasdasdasdsad!!!!!!!!!!!!!!!!!"
        if spider.name != "movie":  return item
        if item.get("douban_id", None) is None: return item

        update_str = ""
        item_str = ""
        value_str = ""
        for key in item.keys():
            item_str = item_str + key + "," 
            value_str = value_str + item[key] + ","
            update_str = update_str + key + "=" + item[key] + ","
            
        print item_str[:-1]
        print value_str[:-1]
        print update_str[:-1]
        
        self.cursor.execute("select * from movieinfo where douban_id = %s", (item["douban_id"],))
        ret = conn.fetchone()
        print "do!!"
        if ret:
            self.cursor.execute("update movieinfo set %s where douban_id=%s" % (update_str[:-1], item["douban_id"]))
            print "update_str!!"
        else:
            self.cursor.execute("insert into movieinfo(%s) values(%s)" % (item_str[:-1], value_str[:-1]))
            print "new !!!"
        self.db.commit()
        #spec = { "subject_id": item["subject_id"] }
        #doubanDB.movie.update(spec, {'$set': dict(item)}, upsert=True)
        
        return item
