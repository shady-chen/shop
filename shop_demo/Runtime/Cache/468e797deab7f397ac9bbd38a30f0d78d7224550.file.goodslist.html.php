<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:23:16
         compiled from "D:/techan/shop_demo/Home/View\Goods\goodslist.html" */ ?>
<?php /*%%SmartyHeaderCode:169885a4277743cfb11-21723351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '468e797deab7f397ac9bbd38a30f0d78d7224550' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\Goods\\goodslist.html',
      1 => 1514293411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169885a4277743cfb11-21723351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a427774545be',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a427774545be')) {function content_5a427774545be($_smarty_tpl) {?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>GoodsList</title>
	
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
<script>
window.onload = function(){

	document.getElementById("aaa").onclick = function(){ 
		var name = document.getElementById("uname").value;
		var pword = document.getElementById("password").value;
		var aaa = document.getElementById("login");
	   var span = document.getElementById("span");
		if(!name || !pword){
			alert("用户名或密码不能为空");
			return;
		}
		var data = "name="+name+"&pword="+pword;
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			//alert(xhr.responseText);
				
				if(xhr.responseText==0){
					span.innerHTML = "用户名或密码错误";
				}else{
					$('#mask').hide();
					$('.window').hide();
					aaa.innerHTML = name+",欢迎您";
				}
				
			}
		}
		xhr.open("post","/index.php/Home/Index/index");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send(data);
	}
}
</script>

<!-- 登录框 -->
	<div id="boxes">
	<div id="dialog" class="window">
		<div class="login">
        	<div class="login_div">
                <div class="title">
                    田野间特产商城欢迎您！
                </div>
               <form action="<?php echo @__ACTION__;?>
" method="post">
                <table style="margin:20px;color:rgb(255,68,0)">
                    <tr>
                        <td>
                            <span>登录名：</span><br />
                            <input type="text" class="form-control" placeholder="请填写用户名" name="username" id="uname" required/><br />
                        </td>
                	</tr>
                    <tr>
                        <td>
                           <span> 登录密码：</span> <br/>
                            <input type="password" class="form-control"  placeholder="请填写密码" name="password" id="password" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="提交" class="tijiao" id="aaa"/>
                            	
                        </td>
                    </tr>	
                    <tr>
                    	<td>
                    		<span id="span"></span>
                    	</td>
                    </tr>
                </table>
                </form>
                <br />
				<br />
				<span style=" position:relative; left:20px;color:red">还没有账号?<a href="<?php echo @__MODULE__;?>
/User/register" style="color:red;">立即注册</a></span>
                <span style="position:relative; left:180px; top:30px;"><a href="<?php echo @__MODULE__;?>
/User/findPasword" style="color:red;">忘记密码....</a></span>
            	<a href="#" class="close"/>Close</a>
            </div>
        </div> 

</div>
<!-- Mask to cover the whole screen -->
  <div id="mask"></div>
</div>

    <nav id="menu" class="navbar">
		<div class="container">
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/index.php">首页</a></li>
					<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按种类分类</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
									<li><a href="<?php echo @__ACTION__;?>
/type/肉类精选">肉类精选</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/粮油米面">粮油米面</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/名茶名酒">名茶名酒</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/果蔬副食">果蔬副食</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><a href="<?php echo @__ACTION__;?>
/type/水产极品">水产极品</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/野生特产">野生特产</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/滋补保健">滋补保健</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/工艺礼品">工艺礼品</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按地区分类</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
									<li><a href="<?php echo @__ACTION__;?>
/from/云南">云南</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/四川">四川</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/重庆">重庆</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/北京">北京</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/山西">山西</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><a href="<?php echo @__ACTION__;?>
/from/天津">天津</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/江苏">江苏</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/浙江">浙江</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/海南">海南</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/湖南">湖南</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><a href="<?php echo @__ACTION__;?>
/from/福建">福建</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/东三省">东三省</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/西藏">西藏</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/内蒙古">内蒙古</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/新疆">新疆</a></li>
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
	<!--///////////////////Category Page//////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="/index.php">首页</a></li>
						<li><a href="<?php echo @__ACTION__;?>
">商品列表</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div id="main-content" class="col-md-8">
						<div class="row">
							<div class="products">
							<!-- smarty遍历起点-->
							
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<div class="col-xs-4">
									<div class="product">
										<div class="image"><a href="<?php echo @__CONTROLLER__;?>
/goodsinfo/good_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_img'];?>
" /></a></div>
										<div class="buttons">
											<a class="btn cart" href="<?php echo @__CONTROLLER__;?>
/cart/good_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
">
												<span class="glyphicon glyphicon-shopping-cart">购买</span>
											</a>
											<a class="btn wishlist" href="<?php echo @__CONTROLLER__;?>
/favorite/add/<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
">
												<span class="glyphicon glyphicon-heart">收藏</span>
											</a>
										</div>
										<div class="caption">
											<div class="name"><h3><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_name'];?>
</a></h3></div>
											<div class="price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_other'];?>
<span>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_self'];?>
</span></div>
											<div class="rating">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star-empty"></span></div>
										</div>
									</div>
								</div>
							<?php } ?>
							
							<!-- smarty遍历终点-->

						</div>
						</div>	
							
						<div class="pages">
						<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

						</div>
				</div>
				<div id="sidebar" class="col-md-4">
						<div class="widget wid-categories">
						<div class="heading"><h4>商品类别</h4></div>
						<div class="content">
								<ul>
									<li><a href="<?php echo @__ACTION__;?>
/type/肉类精选">肉类精选</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/粮油米面">粮油米面</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/名茶名酒">名茶名酒</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/果蔬副食">果蔬副食</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/水产极品">水产极品</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/野生特产">野生特产</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/滋补保健">滋补保健</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/type/工艺礼品">工艺礼品</a></li>
								</ul>
						</div>
					</div>
					<div class="widget wid-categories">
						<div class="heading"><h4>商品产地</h4></div>
							<div class="content">
								<ul>
									<li><a href="<?php echo @__ACTION__;?>
/from/云南">云南</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/四川">四川</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/重庆">重庆</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/北京">北京</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/山西">山西</a></li>
								
									<li><a href="<?php echo @__ACTION__;?>
/from/天津">天津</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/江苏">江苏</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/浙江">浙江</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/海南">海南</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/湖南">湖南</a></li>
								
									<li><a href="<?php echo @__ACTION__;?>
/from/福建">福建</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/东三省">东三省</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/西藏">西藏</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/内蒙古">内蒙古</a></li>
									<li><a href="<?php echo @__ACTION__;?>
/from/新疆">新疆</a></li>
								</ul>
							</div>
					</div>	
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
</html>
<?php }} ?>