# coding: utf-8

import MySQLdb


def add_user():
    db = MySQLdb.connect("123.206.41.40", "hadoop", "0000", "springmybatis")
    db.set_character_set('utf8')
    cursor = db.cursor()

    for i in range(1, 6050):
        sql = "insert into user_info(User_id, Username, Password) values('%d', '%s', '%s')" % (i, str(i), '0000')
        cursor.execute(sql)
        pass

    db.commit()
    db.close()


if __name__ == "__main__":
    add_user()