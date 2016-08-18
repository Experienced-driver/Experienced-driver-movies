<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
/**
 * 文章内页
 */
namespace Portal\Controller;
use Common\Controller\HomebaseController;
class ArticleController extends HomebaseController {
    //文章内页
    public function index() {
    	$id=intval($_GET['id']);
      $movie = M('Movieinfo',null);
      //$user = M('users');
      //$userinfo = $user->where
      //$map['name'] = array('like','%$k%');
      $article_info = $movie->where("_id = $id")->find();
      //var_dump($article_info);
    	//$article=sp_sql_post($id,'');

      if(isset($_SESSION["user"])){//用户已登陆,且是本站会员
				$uid=$_SESSION["user"]['id'];
				$_POST['uid']=$uid;
				$users_model=M('Users');
				$user=$users_model->field("user_login,user_email,user_nicename,avatar")->where("id=$uid")->find();
				$username=$user['user_login'];
				$user_nicename=$user['user_nicename'];
        $user_avatar=$user['avatar'];
        //echo $user_nicename;

				//$email=$user['user_email'];
				//$_POST['full_name']=empty($user_nicename)?$username:$user_nicename;
				//$_POST['email']=$email;
			}
      $article['user_avatar']=$user_avatar;
      $article['user_name']=$user_nicename;
      
      $comment = M('comments',null);
      $comment_info = $comment->where("User_id=$uid")->select();

      $article['comment']=$comment_info;

      $article['article_info']=$article_info;
      //var_dump($article['user_avatar']);
      //echo $article['user_avatar'];
      $this->assign("article",$article);
      $this->display(":article");

    }

}
