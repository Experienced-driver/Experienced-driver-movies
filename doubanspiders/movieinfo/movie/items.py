#encoding: utf-8
from scrapy import Field, Item

class MovieItem(Item):
    subject_id = Field()
    name = Field()
    year = Field()
    directors = Field()
    actors = Field()
    languages = Field()
    genres = Field() #类型
    runtime = Field()
    stars = Field() #5星 4星 3星 2星 1星各个数量, 次序为：5 4 3 2 1
    channel = Field()
    average = Field() #平均分
    vote = Field() #评分人数
    tags = Field()
    watched = Field() #看过
    wish = Field() #想看
    comment = Field() #短评数
    question = Field() #提问数
    review = Field() #影评数
    discussion = Field() #讨论
    image = Field() #图片数
    countries = Field() #制片国家
    summary = Field()


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