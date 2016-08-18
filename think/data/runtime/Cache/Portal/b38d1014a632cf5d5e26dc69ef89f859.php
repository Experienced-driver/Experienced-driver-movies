<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
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

		
		<link href="/think/themes/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet">
		<style>
			.caption-wraper{position: absolute;left:50%;bottom:2em;}
			.caption-wraper .caption{
			position: relative;left:-50%;
			background-color: rgba(0, 0, 0, 0.54);
			padding: 0.4em 1em;
			color:#fff;
			-webkit-border-radius: 1.2em;
			-moz-border-radius: 1.2em;
			-ms-border-radius: 1.2em;
			-o-border-radius: 1.2em;
			border-radius: 1.2em;
			}
			@media (max-width: 767px){
				.sy-box{margin: 12px -20px 0 -20px;}
				.caption-wraper{left:0;bottom: 0.4em;}
				.caption-wraper .caption{
				left: 0;
				padding: 0.2em 0.4em;
				font-size: 0.92em;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				-ms-border-radius: 0;
				-o-border-radius: 0;
				border-radius: 0;}
			}
		</style>

	</head>
<body class="body-white">
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


<?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>


<div class="container">

<?php if(empty($list['user_avatar'])): ?><div class="test">
	<!--<若用户未注册，则显示此面板>-->
	<div class="jumbotron index-jum">
			<h1>Welcome!</h1>
			<p>Find Your Favorite Films! 注册以后可以搜索和享受我们的定制推荐服务！！！</p>
			 <form action="<?php echo U('user/login/dologin');?>" method="post">
							<div class="index-jum-input">
									<input type="text" id="input_username" name="username" placeholder="手机号/邮箱/用户名">
									<input type="password" id="input_password" name="password" placeholder="密码">
							</div>
							<a href="<?php echo leuu('user/login/index');?>"><i class="fa fa-sign-in"></i>
								<input type="button" class="btn btn-primary" value="Login">
							</a>
							<a class="btn btn-warning btn-lg"  role="button" href="<?php echo leuu('user/register/index');?>">
								Sigh in
							</a>
			 </form>

	</div>



</div>


	<!--<若用户已经注册，则此面板消失，显示下一个面板>-->
<?php else: ?>

<div class="b-l" id="zhuanti">

		<h3>本周专题</h3>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol><?php endforeach; endif; ?>
				<!-- Wrapper for slides -->

			<div class="carousel-inner" role="listbox">
						<div class="item active" name="home_slides" item="vo">
								<a href="<?php echo ($vo["slide_url"]); ?>">
									<img style="width:100%; height:100%;" src="http://7i7k6x.com1.z0.glb.clouddn.com/%E8%80%81%E5%8F%B8%E6%9C%BA1.jpg" alt="...">
								</a>
								<div class="carousel-caption"> <p align="center">国产专题</p>
								</div>
						</div>
						<div class="item" name="home_slides" item="vo">
								<a href="<?php echo ($vo["slide_url"]); ?>">
									<img style="width:100%; height:100%;" src="http://7i7k6x.com1.z0.glb.clouddn.com/%E8%80%81%E5%8F%B8%E6%9C%BA2.jpg" alt="...">
								</a>

								<div class="carousel-caption"> <p align="center">好莱坞专题</p>
								</div>
						</div>
						<div class="item" name="home_slides" item="vo">
								<a href="<?php echo ($vo["slide_url"]); ?>">
									<img style="width:100%; height:100%;" src="http://7i7k6x.com1.z0.glb.clouddn.com/%E8%80%81%E5%8F%B8%E6%9C%BA3.jpg" alt="...">
								</a>
								<div class="carousel-caption"> <p align="center">文艺专题</p>
								</div>
						</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>
		</div>
</div>


<div class="b-2" id="bangdan">
		<h3 align="center">本周榜单</h3>
		<div class="index-bangdan">
			<?php if(is_array($list['bangdan'])): foreach($list['bangdan'] as $key=>$vo): ?><a href="<?php echo leuu('article/index',array('id'=>$vo['_id']));?>"><li><?php echo ($vo["name"]); ?></li></a><?php endforeach; endif; ?>
		</div>
</div>



    <!--<用户注册后会显示的面板>-->
    <div class="b-l" id="tuijian">
        <h3>个性推荐</h3>
        <div class="index-mv-tuijian">
					<?php if(is_array($list['tuijian'])): foreach($list['tuijian'] as $key=>$vo): ?><li class="col-xs-6 col-md-3">
                <a href="<?php echo leuu('article/index',array('id'=>$vo['_id']));?>" class="index-mv-thumbnail">
                    <img src="<?php echo ($vo["image"]); ?>" class="img-responsive" alt="..." >
                    <p><?php echo ($vo["name"]); ?><span class="index-score-lable"><br/><?php echo ($vo["douban_rating"]); ?></span></p>
                    <p class="index-tuijian-fenlei">分类：<?php echo ($vo["genres"]); ?></p>
                    <p class="index-tuijian-info"><?php echo ($vo["description"]); ?></p>
                </a>
            </li><?php endforeach; endif; ?>
        </div>
    </div>
    <div class="b-2" id="self-center">
        <h3 align="center">个人中心</h3>
        <div class="index-self">
				<a href="<?php echo U('user/profile/avatar');?>">
					<?php if(empty($list['user_avatar'])): ?><img src="/think/themes/simplebootx//Public/images/film004.jpg" class="img-circle img-thumbnail">

					<?php else: ?>
						<img src="/think/data/upload/avatar/<?php echo ($list['user_avatar']); ?>" class="img-circle img-thumbnail"/><?php endif; ?>
					</a>
            <p><?php echo ($list['user_name']); ?></p>
            <a href="<?php echo U('user/favorite/index');?>"><button class="btn btn-warning">我的收藏</button></a>
            <a href="<?php echo U('user/center/index');?>"><button class="btn btn-warning">个人中心</button></a>
            <button class="btn btn-danger">我要反馈</button>

        </div>
    </div>
    <!---<用户注册后会显示的面板> 结束-->
    <div class="clearfix"></div>


    <h2>最新上映</h2>
    <div class="index-mv-list  ">
			<?php if(is_array($list['new'])): foreach($list['new'] as $key=>$vo): ?><li class="col-xs-6 col-md-3">
                <a href="<?php echo leuu('article/index',array('id'=>$vo['_id']));?>" class="index-mv-thumbnail">
                    <img src="<?php echo ($vo["image"]); ?>" class="img-responsive" alt="..." >
                    <p><?php echo ($vo["name"]); ?> <br/><span class="index-score-lable">
											<?php echo ($vo["douban_rating"]); ?></span></p>

                </a>
            </li><?php endforeach; endif; ?>
    </div>

    <h2>最高票房</h2>
    <div class="index-mv-list  ">
			<?php if(is_array($list['piaofang'])): foreach($list['piaofang'] as $key=>$vo): ?><li class="col-xs-6 col-md-3">
            <a href="<?php echo leuu('article/index',array('id'=>$vo['_id']));?>" class="index-mv-thumbnail">
                <img src="<?php echo ($vo["image"]); ?>" class="img-responsive" alt="..." >
                <p><?php echo ($vo["name"]); ?> <br/><span class="index-score-lable"><?php echo ($vo["douban_rating"]); ?></span></p>
            </a>
        </li><?php endforeach; endif; ?>
    </div><?php endif; ?>

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

<script src="/think/themes/simplebootx//Public/js/slippry.min.js"></script>

<?php echo hook('footer_end');?>
</body>
</html>