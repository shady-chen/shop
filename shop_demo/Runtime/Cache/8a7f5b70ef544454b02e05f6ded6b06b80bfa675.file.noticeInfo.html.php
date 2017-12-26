<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:25:38
         compiled from "D:/techan/shop_demo/Admin/View\Goods\noticeInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:9285a4278024d7e45-07985841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7f5b70ef544454b02e05f6ded6b06b80bfa675' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Goods\\noticeInfo.html',
      1 => 1495869967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9285a4278024d7e45-07985841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a42780251ed0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a42780251ed0')) {function content_5a42780251ed0($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>公告详情</title>
	
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
						<li style="color:rgb(280,68,0)">查看公告详情</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<center>					
						<div class="col-md-11">
						 	<h3 align="center" style="color:rgb(286,60,0);font-family:楷体"><?php echo $_smarty_tpl->tpl_vars['info']->value['nc_title'];?>
</h3>
							<h6 align="center" style="color:gray;font-family:楷体"><?php echo $_smarty_tpl->tpl_vars['info']->value['nc_time'];?>
</h6>
						  	<p style='line-height:30px;text-indent:46px;letter-spacing:2px;text-align: left'><?php echo $_smarty_tpl->tpl_vars['info']->value['nc_info'];?>
</p>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>


</body>
</html><?php }} ?>