<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 20:19:50
         compiled from "D:/techan/shop_demo/Admin/View\Goods\updateInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:100245a438d5a7e6282-47870722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b2dc494a4f790b1b3ad2595d0e3a5722e64e13' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Goods\\updateInfo.html',
      1 => 1514377184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100245a438d5a7e6282-47870722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a438d5a872bc',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a438d5a872bc')) {function content_5a438d5a872bc($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>更改商品信息</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css"  type="text/css">

	


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

    <script src="<?php echo @ADMIN_JS;?>
shopAdmin.js"></script>

</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
				<table class="table" id="register">
					<caption><h2>更改商品信息</h2></caption>
					  <form method="post" action="<?php echo @__CONTROLLER__;?>
/update"  enctype="multipart/form-data" onsubmit="return checkForm();">
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_id'];?>
" name="gd_id">
					  	<tr>
					  	  <td><label>商品名称</label></td>
					  	  <td>
								<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_name'];?>
" name="gd_name" required>
		
								
						   </td>
						</tr>
						<tr>
							<td><label>商品类型</label></td>
							<td>
								<select class="form-control" name="gd_type" id="gd_type">
									<option value='null' selected="selected">请选择商品类型</option>
									<option value="肉类精选">肉类精选</option>
									<option value="水产极品">水产极品</option>
									<option value="粮油米面">粮油米面</option>
									<option value="野生特产">野生特产</option>
									<option value="名茶名酒">名茶名酒</option>
									<option value="滋补保健">滋补保健</option>
									<option value="果蔬副食">果蔬副食</option>
									<option value="工艺礼品">工艺礼品</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>商城价格</label></td>
							<td>
							<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_price_self'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_price_self'];?>
" name="gd_self_price" required>
							</td>
						</tr>
						<tr>
							<td><label>市场价格</label></td>
							<td>
								<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_price_other'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_price_other'];?>
" name="gd_other_price" required>
								<span id="passwordTwoSpan"></span>
							</td>
						</tr>
						<tr>
							<td><label>库存</label></td>
							<td>
								<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_num'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_num'];?>
" name="gd_num" required>
								<span id="emailSpan"></span>
							</td>
						</tr>
						<tr>
							<td><label>商品重量</label></td>
							<td>
								<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_weight'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_weight'];?>
" name="gd_weight" required>
								<span id="phoneSpan"></span>
							</td>
						</tr>
						<tr>
							<td><label>商品来源地</label></td>
							<td>
								<select class="form-control" name="gd_from" id="gd_from">
									<option value='null' selected="selected">请选择产地</option>
									<option value="云南">云南</option>
									<option value="四川">四川</option>
									<option value="重庆">重庆</option>
									<option value="北京">北京</option>
									<option value="山西">山西</option>
									<option value="天津">天津</option>
									<option value="江苏">江苏</option>
									<option value="浙江">浙江</option>
									<option value="海南">海南</option>
									<option value="湖南">湖南</option>
									<option value="福建">福建</option>
									<option value="东三省">东三省</option>
									<option value="西藏">西藏</option>
									<option value="内蒙古">内蒙古</option>
									<option value="新疆">新疆</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>商品原图</label></td>
							<td><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['gd_img'];?>
" style='width:100px;'></td>
						</tr>
						<tr>
							<td><label><button  onclick="changeImg();" style='cursor:pointer' class="btn btn-info">更改商品图片</button></label></td>
							<td>
								<input type="file" name="gd_img" style="display:none;" id="img">
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<input type="submit" style="background:rgb(280,68,0);color:white;width:150px;height:40px;border-radius: 10px;margin-left:80px" value="更改">
							<input type="reset" style="background:rgb(280,68,0);color:white;width:150px;height:40px;border-radius: 10px" value="重写">
							</td>
						</tr>
					</form>

					</table>
			</form>
		</div>
	</div>
</div>

</body>
</html><?php }} ?>