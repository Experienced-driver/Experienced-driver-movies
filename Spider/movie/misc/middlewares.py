#encoding: utf-8
from random import choice
from misc.helper import gen_bids

class CustomCookieMiddleware(object):
    def __init__(self):
        self.bids = gen_bids()

    def process_request(self, request, spider):
        request.headers["Cookie"] = 'bid="%s"' % choice(self.bids)


class CustomUserAgentMiddleware(object):
    def process_request(self, request, spider):
        ug = "Baiduspider"
        request.headers["User-Agent"] = ug


class CustomHeadersMiddleware(object):
    def process_request(self, request, spider):
        request.headers["Accept-Language"] = "zh-CN,zh"