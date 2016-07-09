#encoding: utf-8
from misc.store import doubanDB


class MoviePipeline(object):
    def process_item(self, item, spider):
        if spider.name != "movie":  return item
        if item.get("subject_id", None) is None: return item

        spec = { "subject_id": item["subject_id"] }
        doubanDB.movie.update(spec, {'$set': dict(item)}, upsert=True)

        return None