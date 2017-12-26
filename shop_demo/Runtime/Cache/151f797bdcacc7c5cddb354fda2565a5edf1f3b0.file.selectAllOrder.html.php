<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 22:17:15
         compiled from "D:/techan/shop_demo/Admin/View\Goods\selectAllOrder.html" */ ?>
<?php /*%%SmartyHeaderCode:65695a4259eb735e16-52041958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '151f797bdcacc7c5cddb354fda2565a5edf1f3b0' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Goods\\selectAllOrder.html',
      1 => 1495865718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65695a4259eb735e16-52041958',
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
  'unifunc' => 'content_5a4259eb7e24f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4259eb7e24f')) {function content_5a4259eb7e24f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>selectOrders</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
	

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo @FONT_URL;?>
css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="<?php echo @FONTS_URL;?>
font-slider.css" type="text/css">

</head>

<body>
	


	<div id="page-content" class="single-page">
		<div class="container" style="margin-left:50px;">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li style="color:rgb(280,68,0)">查看商城订单</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12" id="selectOrders">
					<center>
					<table class="table table-hover">
						<tr>
							<th>订单编号</th>
							<th>订单总价</th>
							<th>订单时间</th>
							<th>操作</th>
						</tr>

					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['od_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['od_price'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['od_time'];?>
</td>
							<td>
								<a class="btn btn-info" href="<?php echo @__CONTROLLER__;?>
/orderInfo/act/select/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['od_id'];?>
">查看详情</a>
								<a class="btn btn-danger" href="<?php echo @__CONTROLLER__;?>
/orderInfo/act/delete/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['od_id'];?>
">删除</a>
							</td>
						</tr>
					<?php } ?>


					</table>	

					<!-- 分页样式 -->
					<div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
					</center>
				</div>
			</div>
		</div>
	</div>


</body>
</html><?php }} ?>