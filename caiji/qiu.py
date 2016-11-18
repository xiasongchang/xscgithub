#! /usr/bin/python  
# coding = utf-8  
print
import urllib2
import re
page = 1
url = 'http://news.baidu.com/?qq-pf-to=pcqq.group/page/' + str(page)
user_agent = "Mozi;;a/4.0 (compatible; MSIE 5.5; Windows NT)"
headers = { 'User-Agent' : user_agent}
try:
    request = urllib2.Request(url, headers = headers)
    response = urllib2.urlopen(request)
    content = response.read()
#print content
#    pattern = re.compile('<div class="author clearfix">.*?<img src.*?title=.*?<h2>(.*?)</h2>.*?<span>(.*?)</span>.*?<span class="stats-vote"><i class="number">(.*?)</i>.*?<i class="number">(.*?)</i>',re.S)
#    pattern= re.compile('<ul class="ulist focuslistnews">.*?<li class="bold-item">(.*?)</a>',re.S)
    pattern= re.compile('(<div id="channel-all" class="channel-all clearfix" >.*)<div id="body" alog-alias="b">',re.S)
    items = re.search(pattern, content)
    print items.group(1)
    #for item in items:
    #    print item[0], item[1], item[2], '\n'

except urllib2.URLError, e:
    if hasattr(e, "code"):
        print e.code
    if hasattr(e, "reason"):
        print e.reason