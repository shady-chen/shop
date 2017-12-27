<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 20:26:31
         compiled from "D:/techan/shop_demo/Admin/View\Goods\goodList.html" */ ?>
<?php /*%%SmartyHeaderCode:107105a425944c725b5-72753301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '321139c09f0afedde77b164712602f847e8eb1e7' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Goods\\goodList.html',
      1 => 1514377530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107105a425944c725b5-72753301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a425944d0985',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a425944d0985')) {function content_5a425944d0985($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>goodList</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css"  type="text/css">

	
	<!--  CSS -->
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS;?>
admin.css">
	

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
		<div class="">
			<div class="table-responsive">
				<table class="table table-hover">
					<tr>
						<th>商品编号</th>
						<th>商品图片</th>
						<th>商品名称</th>
						<th>商品类型</th>
						<th>商城价</th>
						<th>市场价</th>
						<th>库存</th>
						<th>商品重量</th>
						<th>上架日期</th>
						<th>商品点击量</th>
						<th>商品来源地</th>
						<th>操作</th>
					</tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_img'];?>
" style="width:50px;height:30px"></td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_type'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_self'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_other'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_num'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_weight'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_date'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_click_num'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_from'];?>
</td>

						<td>
							<a class='btn btn-info' href='<?php echo @__CONTROLLER__;?>
/operate/act/update/gd_id/<?php echo $_smarty_tpl->tpl_vars['v']->value["gd_id"];?>
'>更改</a>
							<a class='btn btn-danger' href='<?php echo @__CONTROLLER__;?>
/operate/act/delete/gd_id/<?php echo $_smarty_tpl->tpl_vars['v']->value["gd_id"];?>
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