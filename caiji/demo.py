#! /usr/bin/python  
# coding = utf-8  
import urllib2
import re 
print

response = urllib2.urlopen("http://news.baidu.com/")
content = response.read()
pattern = re.compile('(<div id="channel-all".*?)<div id="body" alog-alias="b">', re.S)
nav = re.search(pattern, content)
print nav.group(1)

