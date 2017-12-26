<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:27:55
         compiled from "D:/techan/shop_demo/Home/View\User\selectOrders.html" */ ?>
<?php /*%%SmartyHeaderCode:149055a42788b05f559-74629403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc4303a4c2ea6ee3b40714ab62a25b88a8bf9940' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\User\\selectOrders.html',
      1 => 1495182872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149055a42788b05f559-74629403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'i' => 0,
    'v' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a42788b0d5b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a42788b0d5b6')) {function content_5a42788b0d5b6($_smarty_tpl) {?><!DOCTYPE html>
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
						<li style="color:rgb(280,68,0)">查看个人订单</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<div class="heading"><h2 style="color:rgb(280,69,0);padding-left:200px">购物历史</h2></div>
				</div>
				<div class="col-md-12" id="selectOrders">
					<center>
						<ul>
						<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable("0", null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>

								<li id="li<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onclick="showDiv('div<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')">
									<span style="margin-left:10px">订单编号：<?php echo $_smarty_tpl->tpl_vars['v']->value['od_id'];?>
</span>
									<span>订单总价：<?php echo $_smarty_tpl->tpl_vars['v']->value['od_price'];?>
</span>
									<span>订单时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['od_time'];?>
</span>
								</li>
								<div class="order" id="div<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
								  <h5 style="padding-top:20px;">订单的具体信息</h5>
								  	<div class="order-left">
										<table class="table table-border" style="width:100%">
											<tr>
												<td style="color:rgb(280,68,0);font-weight:bolder">商品名称</td>
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['od_good_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
 $_from = $_smarty_tpl->tpl_vars['v']->value['od_buy_count']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
													<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
												<?php } ?>
											</tr>
										</table>
									</div>



									<h6>收件信息</h6>
									<table class="table table-border">
										<tr>
											<th>收件人</th>
											<th>电话</th>
											<th>收货地址</th>
											<th>邮编</th>
										</tr>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['od_addr_id']['ar_name'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['od_addr_id']['ar_phone'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['od_addr_id']['ar_address'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['od_addr_id']['ar_code'];?>
</td>
										</tr>
									</table>
								</div>
								<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
							<?php } ?>
						</ul>	
					</center>
				</div>
			</div>
		</div>
	</div>
	
<script>
//个人信息界面展示订单信息
 function showDiv(div){
 	var body = document.getElementById("selectOrders");
 	var li = body.getElementsByTagName('li');
 	 

 	for(var i=0;i<li.length;i++){
 		var x = "div"+i;
 		if(x == div){
 			document.getElementById(x).style.display = "block";
 		}else{
 			var x = "div"+i;
 			document.getElementById(x).style.display = "none";
 		}
 	}
 }
</script>


</body>
</html><?php }} ?>