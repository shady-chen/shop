<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:27:29
         compiled from "D:/techan/shop_demo/Home/View\Goods\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:212785a427871b2f5c3-92882100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72a48853340000df868c8e80ad0cb5f02e30cf6' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\Goods\\cart.html',
      1 => 1514293412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212785a427871b2f5c3-92882100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'info' => 0,
    'v' => 0,
    'i' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a427871cad88',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a427871cad88')) {function content_5a427871cad88($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Cart</title>
	
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
	<!-- 登录框插件 -->
   <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script> -->

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
							<li><span class="glyphicon glyphicon-user"></span><span style="color:black;" id="login"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></li>
							<li><a href="<?php echo @__MODULE__;?>
/User/register"><span class="glyphicon glyphicon-glass" style></span>注册</a></li>
							<li><a href="<?php echo @__CONTROLLER__;?>
/cart"><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a></li>
							<li><a href="<?php echo @__CONTROLLER__;?>
/favorite"><span class="glyphicon glyphicon-star"></span>收藏夹</a></li>
							 <li><a href="<?php echo @__MODULE__;?>
/User/userInfo"><span class="glyphicon glyphicon-user" style=></span> 个人管理</a></li>
							<li><a href="<?php echo @__CONTROLLER__;?>
/contact"><span class="glyphicon glyphicon-envelope"></span>联系我们</a></li>
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
					<li><a href="/index.php">首页</a></li>
					<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按种类分类</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								 <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/肉类精选">肉类精选</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/粮油米面">粮油米面</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/名茶名酒">名茶名酒</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/果蔬副食">果蔬副食</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/水产极品">水产极品</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/野生特产">野生特产</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/滋补保健">滋补保健</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/工艺礼品">工艺礼品</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按地区分类</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                               <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/云南">云南</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/四川">四川</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/重庆">重庆</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/北京">北京</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/山西">山西</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/天津">天津</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/江苏">江苏</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/浙江">浙江</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/海南">海南</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/湖南">湖南</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/福建">福建</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/东三省">东三省</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/西藏">西藏</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/内蒙古">内蒙古</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/新疆">新疆</a></li>
                                </ul>
							</div> 
						</div>
					</li>
					<li class="dropdown"><a href="<?php echo @__CONTROLLER__;?>
/goodstext">特产百科</a></li>
					<li><a href="<?php echo @__CONTROLLER__;?>
/contact">联系我们</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Cart Page//////////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="/index.php">首页</a></li>
						<li><a href="javascript:void(0)" style="color:rgb(280,68,0)">购物车</a></li>
					</ul>
				</div>
			</div>
			<div class="row" style="margin-top:-30px">
				<div class="product well">
						<table class="table">
							<tr>
								<th scope="col">商品ID</th>
								<th scope="col">商品名称</th>
								<th scope="col">商品图片</th>
								<th scope="col">商品单价</th>
								<th scope="col">市场价格</th>
								<th scope="col">购买数量</th>
								<th scope="col">库存量</th>
								<th scope="col">小计</th>
								<th scope="col">操作</th>
							</tr>
					<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable("1", null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

							<tr>
								<td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
</td>
								<td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_name'];?>
</td>
								<td scope="col"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_img'];?>
"/></td>
								<td scope="col">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_self'];?>
</td>
								<td scope="col">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_other'];?>
</td>
								<td scope="col"><input type="text" id="buy_num<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['ct_buy_count'];?>
">
									<input type="hidden" id="gd_id<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
">
									<input type="hidden" id="gd_num<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_num'];?>
">
								</td>
								<td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_num'];?>
</td>
								<td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_self']*$_smarty_tpl->tpl_vars['v']->value['ct_buy_count'];?>
</td>
								<td scope="col">
									<a class="btn btn-info" href="<?php echo @__ACTION__;?>
/act/delete/gd_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
">删除</a>
									<a class="btn btn-info" onclick="update(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
);">更改</a>
								</td>
							</tr>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
						<?php } ?>
					</table>
					<script>
						function update(i){
							var id = document.getElementById("gd_id"+i).value;
							var num = document.getElementById("buy_num"+i).value;
							var max = document.getElementById("gd_num"+i).value;
							if(parseInt(num)>parseInt(max)){
								alert("库存不足");
							}else{
							window.location.href = '/index.php/Home/Goods/cart/act/update/gd_id/'+id+"/num/"+num;
							}
						}
					</script>
				</div>	
			</div>
			
			<div class="row" id="order">

				 <div class="col-xs-4">
                        <table>
                            <h4 style="color:rgb(280,68,0)">结算</h4>
                            <tr>
                                <td>市场额总价</td>
                                <td>￥<?php echo $_smarty_tpl->tpl_vars['price']->value[1];?>
</td>
                            </tr>
                            <tr>
                                <td>节省</td>
                                <td>￥<?php echo $_smarty_tpl->tpl_vars['price']->value[2];?>
</td>
                            </tr>
                            <tr style="border-top: 1px solid #333">
                                <td><h5 style="color:rgb(280,68,0)">总价</h5></td>
                                <td>￥<?php echo $_smarty_tpl->tpl_vars['price']->value[0];?>
</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <a href="<?php echo @__CONTROLLER__;?>
/goodslist" class="btn btn-1" style="background:rgb(280,68,0);color:white">继续购物</a>
                                 <a href="<?php echo @__CONTROLLER__;?>
/order" class="btn btn-1" style="background:rgb(280,68,0);color:white">提交订单</a>
                                 </td>
                            </tr>
                        </table>
                </div>
			
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