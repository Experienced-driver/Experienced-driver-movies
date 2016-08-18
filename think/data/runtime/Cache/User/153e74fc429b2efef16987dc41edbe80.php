<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
<meta name="author" content="ThinkCMF">
	<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
 <meta name="keywords" content="老司机电影">
 <meta name="description" content="老司机电影">
 <meta name="author" content="lijilan">
 <!-- Set render engine for 360 browser -->
 <meta name="renderer" content="webkit">
 <!-- No Baidu Siteapp-->
 <meta http-equiv="Cache-Control" content="no-siteapp">
 <!-- HTML5 shim for IE8 support of HTML5 elements -->
 <!--[if lt IE 9]>
 <script src="js/html5shiv.js"></script>
 <![endif]-->


 <link href="/think/themes/simplebootx/Public/css/theme.min.css" rel="stylesheet">
 <link href="/think/themes/simplebootx/Public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link href="/think/themes/simplebootx/Public/css/style.css" rel="stylesheet" type="text/css">
 <link href="/think/themes/simplebootx/Public/css/index.css" rel="stylesheet" type="text/css">
 <!--[if IE 7]>
 <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
 <![endif]-->
	<link rel="icon" href="/think/themes/simplebootx/Public/images/favicon_ExDriver.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/think/themes/simplebootx/Public/images/favicon_ExDriver.ico" type="image/x-icon">
    <link href="/think/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/think/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/think/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/think/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/think/themes/simplebootx/Public/css/style.css" rel="stylesheet">
	<link href="/think/themes/simplebootx/Public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="/think/themes/simplebootx/Public/css/style.css" rel="stylesheet" type="text/css">
  <link href="/think/themes/simplebootx/Public/css/index.css" rel="stylesheet" type="text/css">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>

</head>

<body class="body-white" id="top">
	<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/think/"><img src="/think/themes/simplebootx/Public/images/logo.png"></a>
            <div class="nav-collapse collapse" id="main-menu">
                <ul id="main-menu" class="nav">
                    <li class="" id="menu-item-1"><a href="<?php echo leuu('Portal/index/index');?>" target="">首页</a></li>
                    <li class="" id="menu-item-2"><a href="<?php echo leuu('Portal/page/index');?>" target="">分类</a></li>
                    <li class="" id="menu-item-3"><a href="<?php echo leuu('Portal/list/index');?>">票房</a></li></ul>
            </div>

            <ul class="nav pull-right" id="main-menu-user">
			           <li class="dropdown user login">
	                <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <img src="/think/themes/simplebootx//Public/images/headicon.png" class="headicon"/>
	            <span class="user-nicename"></span><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo U('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
          	</li>
          	<li class="dropdown user offline">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/think/themes/simplebootx//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li>
	               <li><a href="<?php echo leuu('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo leuu('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul>
          	</li>
		      </ul>
            <?php if(empty($list['user_avatar'])): else: ?>

              <div class="pull-right">
              <form method="post" class="index-search form-inline" action="<?php echo U('portal/search/index');?>">
                  <input type="text" class="in-se-box" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>">
                  <input type="submit" class="btn btn-info" value="Search" style="margin:0">
              </form>
              </div><?php endif; ?>

        </div>
    </div>
</div>


		<div class="container tc-main">
                <div class="row">
                    <div class="span3">
	                    <div class="list-group">
	<a class="list-group-item" href="<?php echo U('user/profile/edit');?>"><i class="fa fa-list-alt fa-fw"></i> 修改资料</a>
	<a class="list-group-item" href="<?php echo U('user/profile/password');?>"><i class="fa fa-lock fa-fw"></i> 修改密码</a>
	<a class="list-group-item" href="<?php echo U('user/profile/avatar');?>"><i class="fa fa-user fa-fw"></i> 编辑头像</a>
	<a class="list-group-item" href="<?php echo U('user/profile/bang');?>"><i class="fa fa-exchange fa-fw"></i> 绑定账号</a>
	<a class="list-group-item" href="<?php echo U('user/favorite/index');?>"><i class="fa fa-star-o fa-fw"></i> 我的收藏</a>
	<a class="list-group-item" href="<?php echo U('comment/comment/index');?>"><i class="fa fa-comments-o fa-fw"></i> 我的评论</a>
</div>
                    </div>
                    <div class="span9">
                           <div class="tabs">
                               <ul class="nav nav-tabs">
                                   <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-star"></i> 我的收藏</a></li>
                               </ul>
                               <div class="tab-content">
                                   <div class="tab-pane active" id="one">
                                   		<table class="table table-bordered table-striped table-hover">
									    <thead>
									      <tr>
									        <th>#</th>
									        <th>标题</th>
									        <th>描述</th>
									        <th>操作</th>
									      </tr>
									    </thead>
									    <tbody>
									    <?php if(is_array($favorites)): foreach($favorites as $key=>$vo): ?><tr>
									        <td><?php echo ($vo["id"]); ?></td>
									        <td><?php echo ($vo["title"]); ?></td>
									        <td><?php echo ($vo["description"]); ?></td>
									        <td><a href="<?php echo ($vo["url"]); ?>">查看</a> | <a class="js-ajax-dialog-btn" href="<?php echo U('user/favorite/delete_favorite',array('id'=>$vo['id']));?>" data-msg="您确定要取消收藏吗？" data-ok="" data-cacel="取消">取消收藏</a></td>
									      </tr><?php endforeach; endif; ?>
									    </tbody>
									  </table>
                                   </div>
                               </div>							
                           </div>
                    </div>
                </div>

		<br>
<br>
<br>
<!-- Footer ================================================== -->
<hr>
<?php echo hook('footer');?>


	<div class="modal-footer index-footer">
	    <!-- Footer ================================================== -->

	    <div id="footer">
	        <div class="links">
	            <a href="#" target="_blank">四川大学LSJ</a>	</div>
	        <p>
	            Made by <a href="#" target="_blank">四川大学LSJ</a>
	            Code licensed under the
	            <a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.
	            <br>
	            Based on
	            <a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>.
	            Icons from
	            <a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
	        </p>
	    </div>

	</div>


<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div>
<?php echo ($site_tongji); ?>


	</div>
	<!-- /container -->

	<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/think/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/think/themes/simplebootx//Public/js/jquery.js"></script>
    <script src="/think/themes/simplebootx//Public/js/jquery.raty.js"></script>
    <script src="/think/themes/simplebootx//Public/js/wind.js"></script>
    <script src="/think/themes/simplebootx//Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/think/themes/simplebootx//Public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });

		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});

		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/think/data/upload/avatar/"+data.user.avatar);
				}

				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();

			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}

		});
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});

					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery);

		$("#backtotop").totop();


	});
	</script>

</body>
</html>