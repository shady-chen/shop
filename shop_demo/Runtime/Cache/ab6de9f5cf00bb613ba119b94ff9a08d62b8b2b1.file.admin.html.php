<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 23:43:56
         compiled from "D:/techan/shop_demo/Admin/View\User\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:90085a426e3c531f10-06417626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab6de9f5cf00bb613ba119b94ff9a08d62b8b2b1' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\User\\admin.html',
      1 => 1496038853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90085a426e3c531f10-06417626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a426e3c5bc42',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a426e3c5bc42')) {function content_5a426e3c5bc42($_smarty_tpl) {?><!DOCTYPE html>
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

	
	<!--  CSS -->
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS;?>
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


</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<table class="table table-hover">
				<tr>
					<th>管理员编号</th>
					<th>管理员名称</th>
					<th>操作</th>
				</tr>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ad_name'];?>
</td>
					<td>
					   <a href="<?php echo @__CONTROLLER__;?>
/adminInfo/ad_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
/act/changeName">修改账号</a>
					   <?php if ($_smarty_tpl->tpl_vars['v']->value['ad_id']==$_smarty_tpl->tpl_vars['id']->value){?>
					   <a href="<?php echo @__CONTROLLER__;?>
/adminInfo/ad_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
/act/changePsword">修改密码</a>
					   <?php }?>
					</td>
				</tr>
			<?php } ?>	
			</table>
		</div>
	</div>
</div>

</body>
</html><?php }} ?>