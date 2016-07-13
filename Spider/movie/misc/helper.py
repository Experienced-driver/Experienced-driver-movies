#encoding: utf-8
from random import randint

BID_LEN = 20
BID_LIST_LEN = 500

def gen_bids():
    bids = []
    for i in range(BID_LIST_LEN):
        bid = []
        for x in range(BID_LEN):
            bid.append(chr(randint(65, 90)))
        bids.append("".join(bid))
    return bids