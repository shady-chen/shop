<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:29:11
         compiled from "D:/techan/shop_demo/Home/View\Goods\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:226545a4278d7d0e315-99734869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e922902cec96b13f97288f0d3db087e524e2e90c' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\Goods\\contact.html',
      1 => 1514293412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226545a4278d7d0e315-99734869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4278d7e31a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4278d7e31a6')) {function content_5a4278d7e31a6($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Contact</title>
	
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
	<script src="<?php echo @JS_URL;?>
register.js"></script>
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
							<li><a href="javascript:void(0)"><span class="glyphicon glyphicon-envelope"></span>联系我们</a></li>
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
			//	alert(xhr.responseText);
			
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
                <form action="<?php echo @__MODULE__;?>
/Index/index" method="post">
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
				<span style="left:20px;color:red">还没有账号?<a href="<?php echo @__MODULE__;?>
/User/register" style="color:red;">立即注册</a></span>
                <span style="float:right"><a href="<?php echo @__MODULE__;?>
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
					<li><a href="javascript:void(0)">联系我们</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Contact Page///////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="/shop_demp/index.php">首页</a></li>
						<li><a href="javascript:void(0)" style="color:rgb(280,68,0)">联系我们</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="heading"><h1>联系我们<span style="font-size: 18px;color:rgb(280,68,0);padding-left:30px">对我们有什么建议？快来告诉我们吧</span></h1></div>
				</div>
				<div class="col-md-6" style="margin-bottom: 30px;">
					<form name="form1" id="ff" method="post" action="<?php echo @__ACTION__;?>
" onsubmit="return checks();">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="您的姓名 *" name="name" id="name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="您的邮箱 *" name="email" id="email" oninput="registerEmail();" required>
							<span id="emailSpan" style="color:red"></span>
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" placeholder="您的电话 *" name="phone" id="phone" oninput="registerPhone();" required>
								<span id="phoneSpan" style="color:red"></span>
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="您的建议 *" name="message" id="message" required></textarea>
						</div>
						<button type="submit" class="btn btn-1" style="background:rgb(255,68,0);color:white">点击发送</button>
					</form>
<script>
	function checks(){
		var email = document.getElementById("emailSpan");
		var phone = document.getElementById("phoneSpan");

		if(email.innerHTML){
			alert("您的邮箱格式错误");
			return false;
		}else if(phone.innerHTML){
			alert("您的手机号码格式错误");
			return false;
		}else{
			return true;
		}
	}
</script>
				</div>
				<div class="col-md-6">
					<p><span class="glyphicon glyphicon-home" style="color:rgb(255,68,0)"></span> 山西省太原市学院路3号中北大学</p>
					<p><span class="glyphicon glyphicon-earphone" style="color:rgb(255,68,0)"></span> +86 3922110</p>
					<p><span class="glyphicon glyphicon-envelope" style="color:rgb(255,68,0)"></span> moon_light_d@outlook.com</p>
					<iframe src="/Home/View/Goods/map.html" width="500" height="300" frameborder="0" style="border:0"></iframe>
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