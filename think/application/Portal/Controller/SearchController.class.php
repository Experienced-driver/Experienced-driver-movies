<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
/**
 * 搜索结果页面
 */
namespace Portal\Controller;
use Common\Controller\HomebaseController;
class SearchController extends HomebaseController {
    //文章内页
    public function index() {
    	$_GET = array_merge($_GET, $_POST);
		$k = I("get.keyword");
    $movie = M('Movieinfo',null);
    //$map['name'] = array('like','%$k%');
    $content = $movie->where("name like '%$k%'")->limit(20)->select();
    //echo $content;
    $count = count($content);
		$keyword = array();
    $keyword['k'] = $k;
    $keyword['count'] = $count;
    $keyword['content'] = $content;

		if (empty($k)) {
			$this -> error("关键词不能为空！请重新输入！");
		}
		$this -> assign("keyword", $keyword);
		$this -> display(":search");
    }


}
