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
class PageController extends HomebaseController{
	public function index() {
		$movie_info = M('Movieinfo',null);
		$movie_juqing = $movie_info->where("genres like '%剧情%'")->limit(6)->select();
		$movie_xiju = $movie_info->where("genres like '%喜剧%'")->limit(6)->select();
		$movie_aiqing = $movie_info->where("genres like '%爱情%'")->limit(6)->select();
		$movie_jingsong = $movie_info->where("genres like '%惊悚%'")->limit(6)->select();
		$movie_donghua = $movie_info->where("genres like '%动画%'")->limit(6)->select();
		$movie = array();
		$movie['juqing'] = $movie_juqing;
		$movie['xiju'] = $movie_xiju;
		$movie['aiqing'] = $movie_aiqing;
		$movie['jingsong'] = $movie_jingsong;
		$movie['donghua'] = $movie_donghua;
		$this->assign("movie",$movie);
		$this->display(":page");
	}
}
