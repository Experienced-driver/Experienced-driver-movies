<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/think/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/think/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/think/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/think/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/think/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
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
    <script src="/think/public/js/jquery.js"></script>
    <script src="/think/public/js/wind.js"></script>
    <script src="/think/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body>
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li class="active"><a><?php echo L('USER_INDEXADMIN_INDEX');?></a></li>
		</ul>
		<form method="post" class="js-ajax-form">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th align="center">ID</th>
						<th><?php echo L('USERNAME');?></th>
						<th><?php echo L('NICENAME');?></th>
						<th><?php echo L('AVATAR');?></th>
						<th><?php echo L('EMAIL');?></th>
						<th><?php echo L('REGISTRATION_TIME');?></th>
						<th><?php echo L('LAST_LOGIN_TIME');?></th>
						<th><?php echo L('LAST_LOGIN_IP');?></th>
						<th><?php echo L('STATUS');?></th>
						<th align="center"><?php echo L('ACTIONS');?></th>
					</tr>
				</thead>
				<tbody>
					<?php $user_statuses=array("0"=>L('USER_STATUS_BLOCKED'),"1"=>L('USER_STATUS_ACTIVATED'),"2"=>L('USER_STATUS_UNVERIFIED')); ?>
					<?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><tr>
						<td align="center"><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo['user_login']?$vo['user_login']:L('THIRD_PARTY_USER')); ?></td>
						<td><?php echo ($vo['user_nicename']?$vo['user_nicename']:L('NOT_FILLED')); ?></td>
						<td><img width="25" height="25" src="<?php echo U('user/public/avatar',array('id'=>$vo['id']));?>" /></td>
						<td><?php echo ($vo["user_email"]); ?></td>
						<td><?php echo ($vo["create_time"]); ?></td>
						<td><?php echo ($vo["last_login_time"]); ?></td>
						<td><?php echo ($vo["last_login_ip"]); ?></td>
						<td><?php echo ($user_statuses[$vo['user_status']]); ?></td>
						<td align="center">
							<a href="<?php echo U('indexadmin/ban',array('id'=>$vo['id']));?>" class="js-ajax-dialog-btn" data-msg="<?php echo L('BLOCK_USER_CONFIRM_MESSAGE');?>"><?php echo L('BLOCK_USER');?></a>|
							<a href="<?php echo U('indexadmin/cancelban',array('id'=>$vo['id']));?>" class="js-ajax-dialog-btn" data-msg="<?php echo L('ACTIVATE_USER_CONFIRM_MESSAGE');?>"><?php echo L('ACTIVATE_USER');?></a>
						</td>
					</tr><?php endforeach; endif; ?>
				</tbody>
			</table>
			<div class="pagination"><?php echo ($page); ?></div>
		</form>
	</div>
	<script src="/think/public/js/common.js"></script>
</body>
</html>