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


<style type="text/css">
html{overflow-y:scroll;vertical-align:baseline;}
body{font-family:Microsoft YaHei,Segoe UI,Tahoma,Arial,Verdana,sans-serif;font-size:12px;color:#fff;height:100%;line-height:1;background:#999}
*{margin:0;padding:0}
ul,li{list-style:none}
h1{font-size:30px;font-weight:700;text-shadow:0 1px 4px rgba(0,0,0,.2)}
.login-box{width:410px;margin:120px auto 0 auto;text-align:center;padding:30px;background:url(/think/themes/simplebootx//Public/img/mask.png);border-radius:10px;}
.login-box .name,.login-box .password,.login-box .code,.login-box .remember{font-size:16px;text-shadow:0 1px 2px rgba(0,0,0,.1)}
.login-box .remember input{box-shadow:none;width:15px;height:15px;margin-top:25px}
.login-box .remember{padding-left:40px}
.login-box .remember label{display:inline-block;height:42px;width:70px;line-height:34px;text-align:left}
.login-box label{display:inline-block;width:100px;text-align:right;vertical-align:middle}
.login-box #code{width:120px}
.login-box .codeImg{float:right;margin-top:26px;}
.login-box img{width:148px;height:42px;border:none}
input[type=text],input[type=password]{width:270px;height:42px;margin-top:25px;padding:0px 15px;border:1px solid rgba(255,255,255,.15);border-radius:6px;color:#fff;letter-spacing:2px;font-size:16px;background:transparent;}
button{cursor:pointer;width:100%;height:44px;padding:0;background:#ef4300;border:1px solid #ff730e;border-radius:6px;font-weight:700;color:#fff;font-size:24px;letter-spacing:15px;text-shadow:0 1px 2px rgba(0,0,0,.1)}
input:focus{outline:none;box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset,0 2px 7px 0 rgba(0,0,0,.2)}
button:hover{box-shadow:0 15px 30px 0 rgba(255,255,255,.15) inset,0 2px 7px 0 rgba(0,0,0,.2)}
.screenbg{position:fixed;bottom:0;left:0;z-index:-999;overflow:hidden;width:100%;height:100%;min-height:100%;}
.screenbg ul li{display:block;list-style:none;position:fixed;overflow:hidden;top:0;left:0;width:100%;height:100%;z-index:-1000;float:right;}
.screenbg ul a{left:0;top:0;width:100%;height:100%;display:inline-block;margin:0;padding:0;cursor:default;}
.screenbg a img{vertical-align:middle;display:inline;border:none;display:block;list-style:none;position:fixed;overflow:hidden;top:0;left:0;width:100%;height:100%;z-index:-1000;float:right;}
.bottom{margin:8px auto 0 auto;width:100%;position:fixed;text-align:center;bottom:0;left:0;overflow:hidden;padding-bottom:8px;color:#ccc;word-spacing:3px;zoom:1;}
.bottom a{color:#FFF;text-decoration:none;}
.bottom a:hover{text-decoration:underline;}
</style>

<script src="/think/themes/simplebootx//Public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".screenbg ul li").each(function(){
		$(this).css("opacity","0");
	});
	$(".screenbg ul li:first").css("opacity","1");
	var index = 0;
	var t;
	var li = $(".screenbg ul li");
	var number = li.size();
	function change(index){
		li.css("visibility","visible");
		li.eq(index).siblings().animate({opacity:0},3000);
		li.eq(index).animate({opacity:1},3000);
	}
	function show(){
		index = index + 1;
		if(index<=number-1){
			change(index);
		}else{
			index = 0;
			change(index);
		}
	}
	t = setInterval(show,8000);
	//根据窗口宽度生成图片宽度
	var width = $(window).width();
	$(".screenbg ul img").css("width",width+"px");
});
</script>


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




<div class="container tc-main">

	<div class="login-box">
	<h1 style="color:white">用户注册</h1>
	<form method="post" action="<?php echo U('user/register/doregister');?>">
		<div class="name">
			<input type="text"  id="input_username" name="username" placeholder="手机号/邮箱/用户名"  autocomplete="off" />
		</div>
		<div class="password">
			<input type="password" id="input_password" name="password" placeholder="密码" tabindex="2"/>
		</div>
		<div class="password">
			<input type="password" id="input_password" name="password" placeholder="重复密码" tabindex="2"/>
		</div>
		<div class="code">
			<input type="text" id="input_verify" name="verify"  placeholder="验证码" tabindex="3"/>

				<?php echo sp_verifycode_img('length=4&font_size=14&width=100&height=34&charset=2345678&use_noise=1&use_curve=0');?>

		</div>

		<br/><br/>

		<div class="login">
			<button type="submit" tabindex="5">注册</button>
		</div>


	</form>
</div>

	<div class="screenbg">
		<ul>
			<li><a href="javascript:;"><img src="/think/themes/simplebootx//Public/img/3.jpg"></a></li>
			<li><a href="javascript:;"><img src="/think/themes/simplebootx//Public/img/4.jpg"></a></li>
			<li><a href="javascript:;"><img src="/think/themes/simplebootx//Public/img/7.jpg"></a></li>
		</ul>
	</div>
	<!--
		<div class="row">
			<div class="span4 offset4">
				<h2 class="text-center">用户注册</h2>


				<div class="tab-content">

					<div class="tab-pane" id="mobile">
						<form class="form-horizontal js-ajax-form" action="<?php echo U('user/register/doregister');?>" method="post">

							<div class="control-group">
								<input type="text" name="mobile" placeholder="手机号" class="span4">
							</div>

							<div class="control-group">
								<input type="password" name="password" placeholder="密码" class="span4">
							</div>

							<div class="control-group">
								<div class="span4" style="margin-left: 0px;">
									<input type="text" name="verify" placeholder="验证码" style="width:232px;">
									<?php echo sp_verifycode_img('length=4&font_size=14&width=120&height=34&charset=1234567890&use_noise=1&use_curve=0');?>
								</div>
							</div>

							<div class="control-group">
								<div class="span4" style="margin-left: 0px;">
									<input type="text" name="mobile_verify" placeholder="手机验证码" style="width:232px;">
									<a class="btn btn-success" style="width: 96px;">获取验证码</a>
								</div>
							</div>

							<div class="control-group">
								<button class="btn btn-primary js-ajax-submit span4" type="submit" data-wait="1500" style="margin-left: 0px;">确定注册</button>
							</div>

							<div class="control-group" style="text-align: center;">
								<p>
									已有账号? <a href="<?php echo leuu('user/login/index');?>">点击此处登录</a>
								</p>
							</div>
						</form>
					</div>
					<div class="tab-pane active" id="email">
						<form class="form-horizontal js-ajax-form" action="<?php echo U('user/register/doregister');?>" method="post">

							<div class="control-group">
								<input type="text" name="email" placeholder="邮箱" class="span4">
							</div>

							<div class="control-group">
								<input type="password" name="password" placeholder="密码" class="span4">
							</div>

							<div class="control-group">
								<input type="password" name="repassword" placeholder="重复密码" class="span4">
							</div>

							<div class="control-group">
								<div class="span4" style="margin-left: 0px;">
									<input type="text" name="verify" placeholder="验证码" style="width:252px;">
									<?php echo sp_verifycode_img('length=4&font_size=14&width=100&height=34&charset=1234567890&use_noise=1&use_curve=0');?>
								</div>

							</div>

							<div class="control-group">
								<button class="btn btn-primary js-ajax-submit span4" type="submit" data-wait="1500" style="margin-left: 0px;">确定注册</button>
							</div>

							<div class="control-group" style="text-align: center;">
								<p>
									已有账号? <a href="<?php echo leuu('user/login/index');?>">点击此处登录</a>
								</p>
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>
		-->

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

</body>
</html>