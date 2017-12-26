<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 22:12:21
         compiled from "D:/techan/shop_demo/Admin/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:75765a4258c593f3b4-29814640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0960f0275e6755c5e07a0609c4da2e1b97422fc6' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Index\\left.html',
      1 => 1495867878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75765a4258c593f3b4-29814640',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4258c59b158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4258c59b158')) {function content_5a4258c59b158($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="du">
    <script src="<?php echo @ADMIN_JS;?>
shopAdmin.js"></script>
    <script src="<?php echo @ADMIN_JS;?>
jquery.js"></script>
    <title></title>
<style>

	body{
		background-color:#5BC0DE;
		font-family:"微软雅黑";}
	.cai{
		width:200px;
        margin-left:-30px;}
	.cai ul{
		list-style-type:none;
        color:white;}
	.cai ul li a:hover{
		background-color:purple;
        color:black;}
    .list li ul{
        margin-left:-50px;
    }

</style>
</head>

<body>
	<div class="cai">  
		 <ul class="list">
            	
                <li style="cursor:pointer">个人信息管理
                	<ul>
                    	<dd><a href="<?php echo @__MODULE__;?>
/User/admin" target="right">管理员信息</a></dd>
                		<dd><a href="<?php echo @__MODULE__;?>
/User/userInfo" target="right">会员信息</a></dd>
                        
                	</ul>
                </li>
                <li style="cursor:pointer">商品信息管理
                	<ul>
                        <dd><a href="<?php echo @__MODULE__;?>
/Goods/goodList" target="right">查看商品</a></dd>
                        <dd><a href="<?php echo @__MODULE__;?>
/Goods/addGood" target="right">添加商品</a></dd>
                        <dd><a href="" target="right"></a></dd>
                    </ul>
                </li>
                <li style="cursor:pointer">订单信息管理
                	<ul>
                    	<dd><a href="<?php echo @__MODULE__;?>
/Goods/selectAllOrder" target="right">查看所有订单</a></dd>
                		<dd><a href="" target="right"></a></dd>
                	</ul>
                </li>
                <li style="cursor:pointer">公共信息管理
                    <ul>
                        <dd><a href="<?php echo @__MODULE__;?>
/Goods/selectAllNotice" target="right">查看公告</a></dd>
                        <dd><a href="<?php echo @__MODULE__;?>
/Goods/addNotice" target="right">新增公告</a></dd>
                    </ul>
                </li>
            </ul>
    </div>
</body>
</html>
<?php }} ?>