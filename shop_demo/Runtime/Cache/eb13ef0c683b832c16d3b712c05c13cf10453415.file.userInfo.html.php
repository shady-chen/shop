<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:27:47
         compiled from "D:/techan/shop_demo/Home/View\User\userInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:291845a427883e95676-33717839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb13ef0c683b832c16d3b712c05c13cf10453415' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\User\\userInfo.html',
      1 => 1514293412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291845a427883e95676-33717839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a427884062ef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a427884062ef')) {function content_5a427884062ef($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>userInfo</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
	
	<!-- my CSS -->
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
my.css">

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo @FONT_URL;?>
css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="<?php echo @FONTS_URL;?>
font-slider.css" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="<?php echo @JS_URL;?>
jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="<?php echo @JS_URL;?>
bootstrap.min.js"></script>
	
	<!-- 登录框插件js -->
	<script src="<?php echo @JS_URL;?>
index.js"></script>

</head>

<body>
	<!--Top-->
	<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-2" >
					<div id="logo"><img src="<?php echo @IMG_URL;?>
logo.png" /></div>
				</div>
				<div class="col-md-2">
					<div id="logo" style="width:400px;margin-left:-20px"><img src="<?php echo @IMG_URL;?>
top.png" /></div>
				</div>
					<div class="col-md-8" style="float:right;padding-top:10px">
						<ul class="top-link">
							<li><span class="glyphicon glyphicon-user"></span></span><span style="color:black;" id="login"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></li>
							<li><a href="<?php echo @__CONTROLLER__;?>
/register"><span class="glyphicon glyphicon-glass" style></span>注册</a></li>
							<li><a href="<?php echo @__MODULE__;?>
/Goods/cart"><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a></li>
							<li><a href="<?php echo @__MODULE__;?>
/Goods/favorite"><span class="glyphicon glyphicon-star"></span>收藏夹</a></li>
							<li><a href="javascript:void(0)"><span class="glyphicon glyphicon-user" style=></span> 个人管理</a></li>
							<li><a href="<?php echo @__MODULE__;?>
/Goods/contact"><span class="glyphicon glyphicon-envelope"></span>联系我们</a></li>
							<li><a href="<?php echo @__MODULE__;?>
/Index/logout.du"><span class="glyphicon glyphicon-user"></span>注销</a></li>
						</ul>

						<div class="clo-md-6" style="position: absolute;right:200px;top:50px">
							<input type="text" class="form-control" id="search" style="width:220px" placeholder="请输入关键字 例:蜂蜜">
							<button type="button" class="btn btn-default" style="position:absolute;top:0px;right:-50px" onclick="search();">
								<span class="glyphicon glyphicon-search" style="color:rgb(255, 140, 60);"></span>
							</button>
						</div>
					</div>
			</div>
		</div>
	</nav>
    <nav id="menu" class="navbar">
		<div class="container">
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo @__MODULE__;?>
/Index/index">首页</a></li>
					<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按种类分类</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/肉类精选">肉类精选</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/粮油米面">粮油米面</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/名茶名酒">名茶名酒</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/果蔬副食">果蔬副食</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/水产极品">水产极品</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/野生特产">野生特产</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/滋补保健">滋补保健</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/type/工艺礼品">工艺礼品</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按地区分类</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/云南">云南</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/四川">四川</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/重庆">重庆</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/北京">北京</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/山西">山西</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/天津">天津</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/江苏">江苏</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/浙江">浙江</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/海南">海南</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/湖南">湖南</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/福建">福建</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/东三省">东三省</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/西藏">西藏</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/内蒙古">内蒙古</a></li>
									<li><a href="<?php echo @__MODULE__;?>
/Goods/goodslist/from/新疆">新疆</a></li>
								</ul>
							</div> 
						</div>
					</li>
					<li class="dropdown"><a href="<?php echo @__MODULE__;?>
/Goods/goodstext">特产百科</a></li>
					<li><a href="<?php echo @__MODULE__;?>
/Goods/contact">联系我们</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Account Page///////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div  class="container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="/index.php">首页</a></li>
						<li><a href="javascript:history.go(-1)">返回上一级</a></li>
						<li><a href="javascript:void(0)" style="color:rgb(280,68,0)">个人信息</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="sick">
					<i></i>
				</div>
				<div class="col-lg-3" id="info-left">
					<ul style="margin-top:25px;font-size:14px">
						<li><span class="glyphicon glyphicon-user" style="color: rgb(96, 38, 114); font-size: 16px;"></span> <b>个人信息管理</b>
							<ul style="margin-left:30px">
								<li>
									<a href="<?php echo @__CONTROLLER__;?>
/infoChangePasword" target="a">
										修改密码
									</a>
								</li>
								<li>
									<a href="<?php echo @__CONTROLLER__;?>
/infoChangeQuestion" target="a">
										修改密保问题
									</a>
								</li>
							</ul>
						</li>
						<li><span class="glyphicon glyphicon-th-list" style="color: rgb(96, 38, 114); font-size: 16px;"></span> <b>订单信息管理</b>
							<ul style="margin-left:30px">
								<li>
									<a href="<?php echo @__CONTROLLER__;?>
/selectOrders" target="a">查看订单</a>
								</li>
								<li><a href="<?php echo @__MODULE__;?>
/Goods/address">查看收货地址</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-lg-8" style="margin:-10px 0 20px 30px;border:0px dashed gray">
					<iframe name="a" width="900" height="600" frameborder=1></iframe>
				</div>
			</div>
	</div>
	<footer>
		<div class="container">
			<div class="wrap-footer">
				<div class="row">
					<div class="col-md-3 col-footer footer-1">
						<div class="heading"><h4>新手上路</h4></div>
						<ul>
							<li><a href="#">交易条款</a></li>
							<li><a href="#">会员登录</a></li>
							<li><a href="#">找回密码</a></li>
							<li><a href="#">免费注册</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-footer footer-2">
						<div class="heading"><h4>付款方式</h4></div>
						<ul>
							<li><a href="#">货到付款</a></li>
							<li><a href="#">网上支付</a></li>
							<li><a href="#">银行汇款</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-footer footer-3">
						<div class="heading"><h4>售后服务</h4></div>
						<ul>
							<li><a href="#">维权说明</a></li>
							<li><a href="#">安全与保密</a></li>
							<li><a href="#">退换货流程</a></li>
							<li><a href="#">退款方式及时间</a></li>
							<li><a href="#">退换货须知</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-footer footer-4">
						<div class="heading"><h4>联系我们</h4></div>
						<ul>
							<li><span class="glyphicon glyphicon-home"></span>山西省太原市中北大学</li>
							<li><span class="glyphicon glyphicon-earphone"></span>+87 3922110</li>
							<li><span class="glyphicon glyphicon-envelope"></span>moon_light_d@outlook.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="foot">
					
				Copyright &copy; 御帝 2016, All Rights Reserved  <img src="<?php echo @IMG_URL;?>
foot.gif"  alt="版权" style="vertical-align:middle;" /> 京ICP证041189号 特产食品经营许可证 
			</div>
		</div>
	</footer>


<div class="returnTop">
	<a href="#top">
		<span class="glyphicon glyphicon-upload" id="scrollto"></span>
	</a>
</div>
</body>
</html><?php }} ?>