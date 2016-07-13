#encoding: utf-8
from scrapy import Field, Item

class MovieItem(Item):
    douban_id = Field()
    name = Field()
    name_other = Field()
    directors = Field()
    actors = Field()
    countries = Field()
    genres = Field()
    languages = Field()
    runtime = Field()
    description = Field()
    release_date = Field()
    tags = Field()
    image = Field()
    douban_rating = Field()

#豆瓣相册 文档格式
AlbumItem = dict(
    from_url = "http://www.douban.com/photos/album/135640217/",
    album_name = "少年听雨歌楼上，壮年画雨客舟中",
    author = dict(
        home_page = "http://www.douban.com/people/isotherm/",
        nickname = "等温线",
        avatar = "http://img3.douban.com/icon/u2152074-7.jpg",
    ),
    photos = [
        dict(
            large_img_url = "http://img3.douban.com/view/photo/photo/public/p2192138220.jpg",
            like_count = 2,
            recommend_count = 22,
            desc = "李子哒粉蒸排骨！好吃！",
            comments = [
                dict(
                    avatar = "http://img3.douban.com/icon/u42419518-2.jpg",
                    nickname = "muse",
                    post_datetime = "2014-07-29 08:37:14",
                    content = "看得流口水了",
                    home_page = "http://www.douban.com/people/yijuns89/",
                ),
            ]
        ),
    ],
    tags = ["美女", "标签", "时尚"],
    recommend_total = 67,
    like_total = 506,
    create_date = "2014-07-21",
    photo_count = 201,
    follow_count = 37,
    desc = "蛇蛇蛇 马马马",
)

class AlbumItem(Item):
    album_name = Field()
    author = Field()
    photos = Field()
    recommend_total = Field()
    like_total = Field()
    create_date = Field()
    from_url = Field()
    photo_count = Field()
    follow_count = Field()
    desc = Field()
    tags = Field()


class PhotoItem(Item):
    large_img_url = Field()
    like_count = Field()
    recommend_count = Field()
    desc = Field()