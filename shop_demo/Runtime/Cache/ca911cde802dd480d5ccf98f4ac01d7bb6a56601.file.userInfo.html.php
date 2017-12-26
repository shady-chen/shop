<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 23:54:25
         compiled from "D:/techan/shop_demo/Admin/View\User\userInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:269285a4259e7106a44-06440828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca911cde802dd480d5ccf98f4ac01d7bb6a56601' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\User\\userInfo.html',
      1 => 1514303635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269285a4259e7106a44-06440828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4259e717907',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4259e717907')) {function content_5a4259e717907($_smarty_tpl) {?><!DOCTYPE html>
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
					<th>会员编号</th>
					<th>会员名</th>
					<th style="padding-left:70px">操作</th>
				</tr>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
					<td>
						<a href="<?php echo @__CONTROLLER__;?>
/user/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
">查看会员信息</a>
						&nbsp;&nbsp;&nbsp;
						<a href="">删除</a>
					</td>
				</tr>
			<?php } ?>	
			</table>
		</div>
	</div>
</div>

</body>
</html><?php }} ?>