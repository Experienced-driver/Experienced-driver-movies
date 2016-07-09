#encoding: utf-8
import pymongo

HOST = "127.0.0.1"
PORT = 27017

client = pymongo.MongoClient(HOST, PORT)

doubanDB = client.douban