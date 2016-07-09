#encoding: utf-8
from hashlib import sha1

from pybloom import BloomFilter
from scrapy.utils.job import job_dir
from scrapy.dupefilter import BaseDupeFilter
 
class BLOOMDupeFilter(BaseDupeFilter):
    def __init__(self, path=None):
        self.file = None
        self.fingerprints = BloomFilter(capacity=1000000, error_rate=0.001)
 
    @classmethod
    def from_settings(cls, settings):
        return cls(job_dir(settings))
 
    def request_seen(self, request):
        fp = request.url
        if fp in self.fingerprints:
            return True
        self.fingerprints.add(fp)
        return False

    def close(self, reason):
        self.fingerprints = None