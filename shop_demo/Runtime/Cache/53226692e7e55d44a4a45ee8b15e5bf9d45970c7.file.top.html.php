<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 22:12:21
         compiled from "D:/techan/shop_demo/Admin/View\Index\top.html" */ ?>
<?php /*%%SmartyHeaderCode:197045a4258c5ab97a3-95113736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53226692e7e55d44a4a45ee8b15e5bf9d45970c7' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Index\\top.html',
      1 => 1487761997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197045a4258c5ab97a3-95113736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4258c5b245b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4258c5b245b')) {function content_5a4258c5b245b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css"  type="text/css">
<title>无标题文档</title>
<style>
body{
	background-color: rgb(280,68,0);
}
h2{
	font-family:"微软雅黑";
	padding-left: 60px;
	color:white;
 }
 .left{
 	float:left;
 	width:30%;
 }
 .right{
 	float:right;
 	width:60%;
 }
 .right ul{
 	list-style: none;
 	height:30px;
 }
 .right ul li{
 	color:white;
 	float:left;
 	margin:5px;
 	border-right:0px solid black;
 	padding:5px;
 }
 a{
 	text-decoration:none;
 	color:white;
 }
 a:hover{
 	color:purple;
 }
.right .right-left{
	float:left;
}
.right .right-right{
	padding-right:10px;
	float:right;
}
</style>
</head>

<body>
<div>
	<div class="left"> 
		<h2>"田野间"商城后台管理</h2>
	</div>

	<div class="right">
		<div class="right-left">
			<ul>
				<li style="cursor:pointer">当前管理员:<?php echo $_smarty_tpl->tpl_vars['ad_name']->value;?>
</li>
				<li><a href="<?php echo @__CONTROLLER__;?>
/logout">注销</a></li>
			</ul>
		</div> 
		<div class="right-right">
			<div id="time">    
				<script>     
				document.getElementById('time').innerHTML=new Date().toLocaleString();     

				setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();",1000);  
				</script>    
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>