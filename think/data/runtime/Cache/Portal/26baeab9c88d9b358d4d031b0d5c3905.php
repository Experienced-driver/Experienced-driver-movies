<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
		<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
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

		<style>
			#article_content img{height:auto !important}
			#article_content {word-wrap: break-word;}
    		.btn {margin-top: 33px;}
		</style>
		<script src="/think/themes/simplebootx//Public/js/jquery.js"></script>
		<script src="/think/themes/simplebootx//Public/js/jquery.raty.js"></script>
		
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



<div class="container">

	<div class="b-2">

	    <h2 id="mv-name">电影名/<?php echo ($article['article_info']["name"]); ?></h2>
	    <div class="mv-detail-content">
	        <img src="<?php echo ($article['article_info']["image"]); ?>" class="mv-dt-pic"></img>
	        <div class="clearfix"></div>
	        <div class="score-demo">
	            <div id="score-demo"></div>
	        </div>
	        <div class="mv-dt-info">
							<p><label>评分:  </label><span><?php echo ($article['article_info']["douban_rating"]); ?></span></p>
	            <p><label>导演： </label><span><?php echo ($article['article_info']["directors"]); ?></span></p>
	            <p><label>主演： </label><span><?php echo ($article['article_info']["actors"]); ?></span></p>
	            <p><label>分类： </label><span><?php echo ($article['article_info']["genres"]); ?></span></p>
	            <p><label>影片长度：</label><span><?php echo ($article['article_info']["runtime"]); ?> minus</span></p>
	            <p><label>上映时间： </label><span><?php echo ($article['article_info']["release_date"]); ?></span></p>
	            <label style="margin-bottom=-5px;float:none">影评简介：</label>
	                <p class="mv-dt-sim-intor"><?php echo ($article['article_info']["description"]); ?></p>
									<a href="<?php echo U('user/favorite/do_favorite',array('id'=>$article['article_info']['_id']));?>" class="js-favorite-btn" data-title="<?php echo ($article['article_info']["name"]); ?>" data-url="<?php echo U('portal/article/index',array('id'=>$article['article_info']['_id']));?>" data-key="<?php echo sp_get_favorite_key('posts',$article['article_info']['_id']);?>">

										<button class="btn btn-warning">收藏电影</button>

									</a>
							<br/><br/><br/>
							<div id="star">
							</div>

							<div id="hint">
								<textarea id="hint"></textarea>
							</div>


							<script type="text/javascript">
								$('#star').raty({
									path: '/think/themes/simplebootx//Public/img',
									click: function(score, evt) {
    								alert("评分成功!!!\nscore: " + score);
  								},
									precision: true,
									number: 10,
									target: '#hint',
									targetType: 'number'

								});

								$('#hint').raty({
  								target    : '#hint',
  								targetType: 'number'
								});


							</script>


	        </div>
	    </div>
	</div>
	<div class="b-l">
	    <h3>评论</h3>
			<form class="form-horizontal comment-form" action="<?php echo U('comment/comment/post');?>" method="post">
	    <div class="mv-dt-com">
	        <textarea placeholder="输入评论" name="content"></textarea>
	    </div>
			<br/><br/>
	   <button class="btn-inverse" style="float: left">
	       <span class="icon-pencil"></span>Submit</button>


			</form>
		 <br/>
	    <h3>其他评论</h3>
	    <div class="mv-dt-other-com">
				<?php if(is_array($article['comment'])): foreach($article['comment'] as $key=>$vo): ?><li>
	            <hr></hr>
							<?php if(empty($article['user_name'])): ?><!--<img src="/think/themes/simplebootx//Public/images/headicon.png" class="headicon"/>-->
									<img src="/think/themes/simplebootx//Public/images/headicon.png" class="headicon"/>
									<p >这是一段评论这是一段评论这是一段评论这是一段评论
										  这是一段评论这是一段评论这是一段评论这是一段评论
											这是一段评论这是一段评论这是一段评论这是一段评论
											这是一段评论这是一段评论这是一段评论这是一段评论
											这是一段评论这是一段评论这是一段评论这是一段评论
											这是一段评论这是一段评论这是一段评论这是一段评论
									</p>
									<span class="mv-com-username">Username</span>
									<span class="mv-com-time">Time:2016-12-11</span>
							<?php else: ?>

								<img src="/think/data/upload/avatar/<?php echo ($article['user_avatar']); ?>" class="headicon"/>
	            	<p ><?php echo ($vo["content"]); ?></p>
	            	<span class="mv-com-username"><?php echo ($article['user_name']); ?></span>&nbsp&nbsp
	            	<span class="mv-com-time"><?php echo ($vo["com_time"]); ?></span><?php endif; ?>
	        </li><?php endforeach; endif; ?>
	        <a href="#" style="text-align: center; margin-top: 20px;margin-bottom: 20px; display:block;">更多...</a>
	    </div>
	</div>
	<div class="clearfix"></div>

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

</body>
</html>