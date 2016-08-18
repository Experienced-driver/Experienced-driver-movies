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
 * 文章列表
*/
class ListController extends HomebaseController {

	//文章内页
	public function index() {
		//$term=sp_get_term($_GET['id']);
		$piaofang_info = M('piaofanginfo',null);
		$list = $piaofang_info->order('income_now desc')->select();
		//var_dump($list);
		$this->assign('list',$list);
    $this->display(":list");
	}



}
