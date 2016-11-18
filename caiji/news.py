# -*- coding: UTF-8 -*-
import urllib
import urllib2
import re
import MySQLdb
print

class News:

    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"

    #convert div to ''
    def tranTags(self, x):
        pattern = re.compile('<div.*?</div>')
        res = re.sub(pattern, '', x)
        return res

    #getPage
    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #get navCode
    def getNavCode(self):
        page = self.getPage()
        pattern = re.compile('(<div id="menu".*?)<i class="slogan"></i>', re.S)
        navCode = re.search(pattern, page)
        return navCode.group(1)
        
    #get nav
    def getNav(self):
        navCode = self.getNavCode()
        pattern = re.compile('<a href="(http://.*?/).*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        return itmes
#        for item in itmes:
#            print item[0], self.tranTags(item[1])  
# 入库         
db = MySQLdb.connect("localhost","root","root","month11",charset="GBK")
cursor = db.cursor()
news = News()
new = news.getNav()
for i in new:
    print i[0],news.tranTags(i[1])
    vals=news.tranTags(i[1])
    sql = """INSERT INTO aaa(name,url)VALUES (%s, %s)""" %("'"+vals+"'","'"+i[0]+"'")
    try:       
        cursor.execute(sql)   
        db.commit()
    except:
        # Rollback in case there is any error
        db.rollback()
               






