import sys
import mitmproxy.http
from mitmproxy import http
import json
import requests


allurl = "https://uta.xxxxxxxx.net/"  # 学校业务抓包的域名前缀
ownurl = "http://xxxxxxx.xxx.xxx"    #  自己的服务区域名

def request(flow: http.HTTPFlow):
    if allurl + 'wec-counselor-leave-apps/leave/stu/detail' in flow.request.url:
        res = requests.get(ownurl+"/fd.php?id=" + json.loads(flow.request.text)['id']).text
        res1 = json.loads(res)
        if res1['code'] == 1:
            flow.request.url = ownurl+"/xy.php"      
        else:
            flow.request.url = allurl + 'wec-counselor-leave-apps/leave/stu/detail'
    if allurl + "wec-counselor-leave-apps/leave/stu/getLeaveQr" in flow.request.url:
        aa = json.loads(flow.request.text)
        aa['leaveId'] = "xxxx"   # 自己抓包上面的url，直接找一个填上
        flow.request.text = json.dumps(aa)
        flow.request.url = ownurl+"/qr.php"  #  qr.php  自己按照抓包写一个就行。


def response(flow: http.HTTPFlow):
    if allurl + 'wec-counselor-leave-apps/leave/stu/list' in flow.request.url:
        header = dict(flow.request.headers)
        header.pop('Content-Length')
        res = requests.post(url=allurl + 'wec-counselor-leave-apps/leave/stu/getStuBasicInfo', headers=header).text
        XM = json.loads(res)['datas']['userName']
        sj = requests.post(url=ownurl+"/jr.php", data={'user': XM}).text
        sj = json.loads(sj)
        data = json.loads(flow.response.content)
        if sj['code'] == 1:
            for i in sj['msg']:
                data['datas']['rows'].insert(0, i)

        flow.response.text = json.dumps(data)