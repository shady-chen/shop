<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 23:49:47
         compiled from "D:/techan/shop_demo/Admin/View\Goods\selectAllNotice.html" */ ?>
<?php /*%%SmartyHeaderCode:61965a426f9b236095-07508498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93dbecdbc626c4d2e24b9d81b1e3347be772f66a' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Goods\\selectAllNotice.html',
      1 => 1495869452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61965a426f9b236095-07508498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a426f9b2c5f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a426f9b2c5f1')) {function content_5a426f9b2c5f1($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>公告列表</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css"  type="text/css">

	
	<!--  CSS -->
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS;?>
admin.css">
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">

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
	<div class="row" style="margin-top:20px">
		<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li style="color:rgb(280,68,0)">查看商城订单</li>
					</ul>
				</div>
			</div>
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-hover">
					<tr>
						<th>公告编号</th>
						<th>相关管理员编号</th>
						<th>公告报头</th>
						<th>添加时间</th>
						<th>操作</th>
					</tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['nc_id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['nc_ad_id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['nc_title'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['nc_time'];?>
</td>
						<td>
							<a class='btn btn-info' href='<?php echo @__CONTROLLER__;?>
/noticeInfo/act/select/nc_id/<?php echo $_smarty_tpl->tpl_vars['v']->value["nc_id"];?>
'>查看详情</a>
							<a class='btn btn-danger' href='<?php echo @__CONTROLLER__;?>
/noticeInfo/act/delete/nc_id/<?php echo $_smarty_tpl->tpl_vars['v']->value["nc_id"];?>
'>删除</a>
						</td>
					</tr>
				<?php } ?>	


				</table>
			</div>
			<div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
		</div>
	</div>
</div>

</body>
</html><?php }} ?>