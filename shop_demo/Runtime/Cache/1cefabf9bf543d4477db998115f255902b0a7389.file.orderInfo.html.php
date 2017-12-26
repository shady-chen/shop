<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 22:17:22
         compiled from "D:/techan/shop_demo/Admin/View\Goods\orderInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:69585a4259f24a06f6-42169888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cefabf9bf543d4477db998115f255902b0a7389' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Goods\\orderInfo.html',
      1 => 1495856022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69585a4259f24a06f6-42169888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4259f251c3b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4259f251c3b')) {function content_5a4259f251c3b($_smarty_tpl) {?><!DOCTYPE html>
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
	
	<!-- my CSS -->
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
my.css">

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
						<li onclick="javascript:history.go(-1);" style="cursor:pointer;">返回上一级</li>
						<li style="color:rgb(280,68,0)">查看订单详情</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<center>					
						<div class="col-md-11">
						  <h5 style="padding-top:20px;">订单的具体信息</h5>
						  	<div class="order-left">
								<table class="table table-hover" style="width:100%;">
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">订单用户编号</td>
										<td colspan="<?php echo $_smarty_tpl->tpl_vars['info']->value['num'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['od_user_id'];?>
</td>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">商品名称</td>
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['od_good_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
											<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
										<?php } ?>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">购买数量</td>
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['od_buy_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
											<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
										<?php } ?>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">订单总价</td>
										<td colspan="<?php echo $_smarty_tpl->tpl_vars['info']->value['num'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['od_price'];?>
</td>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">订单时间</td>
										<td colspan="<?php echo $_smarty_tpl->tpl_vars['info']->value['num'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['od_time'];?>
</td>
									</tr>
								</table>
							</div>



							<h6>收件信息</h6>
							<div class="col-md-10 col-md-offset-1">
								<table class="table table-border">
									<tr>
										<th>收件人</th>
										<th>电话</th>
										<th>收货地址</th>
										<th>邮编</th>
									</tr>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['info']->value['od_addr_id']['ar_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['info']->value['od_addr_id']['ar_phone'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['info']->value['od_addr_id']['ar_address'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['info']->value['od_addr_id']['ar_code'];?>
</td>
									</tr>
								</table>
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>


</body>
</html><?php }} ?>