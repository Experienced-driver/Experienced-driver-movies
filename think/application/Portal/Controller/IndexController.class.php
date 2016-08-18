<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomebaseController;
/**
 * 首页
 */
class IndexController extends HomebaseController {

    //首页
	public function index() {

    	//$this->display(":index");
			$list = array();
			$Movie_bangdan = M('Movieinfo',null);
			$rating = M('re_table',null);
			$bangdan = $Movie_bangdan->order('douban_rating desc')->limit(11)->select();
			$new = $Movie_bangdan->order('release_date')->limit(6)->select();
			$piaofang=$Movie_bangdan->order('_id')->limit(6)->select();

			if(isset($_SESSION["user"])) {
				$uid=$_SESSION["user"]['id'];
				$tuijian=$rating->join('movieinfo ON re_table.item_id=movieinfo._id')->where("re_table.user_id=$uid")->order('ranking')->limit(4)->select();
				$users_model=M('Users');
				$user=$users_model->field("user_login,user_email,user_nicename,avatar")->where("id=$uid")->find();
				$username=$user['user_login'];
				$user_nicename=$user['user_nicename'];
				$user_avatar=$user['avatar'];

			}
			else {
				$tuijian=$Movie_bangdan->order('douban_rating desc')->limit(4)->select();
			}

			$list['bangdan']=$bangdan;
			$list['new']=$new;
			$list['piaofang']=$piaofang;
			$list['tuijian']=$tuijian;

			$list['user_avatar']=$user_avatar;
			$list['user_name']=$user_nicename;
			//$bangdan_list = $list.name;
			$this->assign("list",$list);
			//var_dump($list);

			//$new = $Movie_bangdan->order('release_date')->limit(6)->select();
			//$this_>assign("new",$new);
			$this->display(":index");
    }

}
