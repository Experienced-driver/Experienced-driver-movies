#encoding: utf-8
import re
import scrapy
from scrapy.contrib.linkextractors import LinkExtractor
from scrapy.contrib.spiders import CrawlSpider, Rule

from items import MovieItem

TV_RUNTIME_RE = re.compile(ur'单集片长: (\d+)')
LANGUAGES_RE = re.compile(ur"语言:</span> (.+?)<br>")
COUNTRIES_RE = re.compile(ur"制片国家/地区:</span> (.+?)<br>")
NUM_RE = re.compile(r"(\d+)")
IMAGE_RE = re.compile(r'src="(.+?)"')
NAMEOTHER_RE = re.compile(ur'又名:</span>(.+?)<br>')


class MovieSpider(CrawlSpider):
    name = "movie"
    allowed_domains = ["movie.douban.com"]
    start_urls = ["http://movie.douban.com"]

    rules = (
        Rule(LinkExtractor(allow=r"/subject/\d+/($|\?\w+)"), 
            callback="parse_movie", follow=True),
    )
    def parse_movie(self, response):
        item = MovieItem()
        
        if self.parse_tv(response, item) is False:
            return None

        item["douban_id"] = response.url.split("/")[-2]
        self.get_name(response, item)
        self.get_name_other(response, item)
        self.get_directors(response, item)
        self.get_actors(response, item)
        self.get_countries(response, item)
        self.get_genres(response, item)
        self.get_languages(response, item)
        self.get_runtime(response, item)
        self.get_description(response, item)
        self.get_release_date(response, item)
        self.get_tags(response, item)
        self.get_image(response, item)
        self.get_douban_rating(response, item)
        
        #for i in item.keys():
            #print(i + "  " + str(item[i]))

        return item

    def get_name(self, response, item):
        name = response.xpath("//title/text()").extract()
        if name: item["name"] = name[0].replace(u" (豆瓣)", "").strip()

    def get_name_other(self, response, item):
        year = response.xpath("//*[@id='info']").re(NAMEOTHER_RE)
        if year: item["name_other"] = year[0]

    def get_directors(self, response, item):
        directors = response.xpath("//a[@rel='v:directedBy']/text()").extract()
        if directors: item["directors"] = '/'.join(directors)

    def get_actors(self, response, item):
         stars = response.xpath("//a[@rel='v:starring']/text()").extract()
         if stars: item["actors"] = '/'.join(stars)

    def get_genres(self, response, item):
        genres = response.xpath("//span[@property='v:genre']/text()").extract()
        if genres: item["genres"] = '/'.join(genres)

    def get_runtime(self, response, item):
        runtime = response.xpath("//span[@property='v:runtime']/text()").re(NUM_RE)
        if runtime:
            item["runtime"] = runtime[0]
            
    def get_douban_rating(self, response, item):
        average = response.xpath("//strong[@property='v:average']/text()").extract()
        if average and average[0] != "": item["douban_rating"] =  average[0]

    def get_tags(self, response, item):
        T = []
        tags = response.xpath("//div[@class='tags-body']/a")
        for tag in tags:
            t = tag.xpath("text()").extract()
            if t: T.append(t[0])
        if T: item["tags"] = '/'.join(T)

    def get_languages(self, response, item):
        S = "".join(response.xpath("//div[@id='info']").extract() )
        M = LANGUAGES_RE.search(S)
        if M is not None:
            item["languages"] = M.group(1)

    def get_countries(self, response, item):
        S = "".join(response.xpath("//div[@id='info']").extract() )
        M = COUNTRIES_RE.search(S)
        if M is not None:
            item["countries"] = M.group(1)

    def get_description(self, response, item):
        summary = response.xpath("//span[@property='v:summary']/text()").extract()
        if summary: item["description"] = "<br/>".join( summary )

    def get_image(self, response, item):
        image = response.xpath("//*[@id='mainpic']/a/img").re(IMAGE_RE)
        if image: item["image"] = image[0]

    def get_release_date(self, response, item):
        comment = response.xpath("////span[@property='v:initialReleaseDate']/text()").extract()
        if comment: item["release_date"] = '/'.join(comment)

    def parse_tv(self, response, item):
        S = "".join( response.xpath("//div[@id='info']//text()").extract() )
        M = TV_RUNTIME_RE.search(S)
        if M is not None:
            return False
        return True


class MovieReviewSpider(CrawlSpider):
    name = "movie_review"
    allowed_domains = ["movie.douban.com"]
    start_urls = ["http://movie.douban.com"]

    rules = (
        Rule(LinkExtractor(allow=r"/subject/\d+/($|\?\w+)"), 
            callback="parse_review", follow=True),
    )

    def parse_review(self, response):
        pass