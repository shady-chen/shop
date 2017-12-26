<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 23:51:22
         compiled from "D:/techan/shop_demo/Admin/View\User\adminInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:194105a426ffab9b074-87324180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5adf6ed388fb739f5138bfe37d93858c9eb677d6' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\User\\adminInfo.html',
      1 => 1496039629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194105a426ffab9b074-87324180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a426ffabe977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a426ffabe977')) {function content_5a426ffabe977($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>修改管理员信息</title>
	
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
						<li style="color:rgb(280,68,0)">修改管理员信息</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<center>					
						<div class="col-md-8">
						 	<?php if ($_smarty_tpl->tpl_vars['act']->value=="changeName"){?>
						 		<label>请输入新的账号名称并谨记:</label>
						 		<form action="<?php echo @__CONTROLLER__;?>
/change" method="post" class="form">
						 			<input type="text" name='newName' required>
						 			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" name="act">
						 			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
						 			<input type="submit" value="修改" class="btn btn-info">
						 		</form>
						 	<?php }else{ ?>
						 		请输入新的密码并谨记:
						 		<form action="<?php echo @__CONTROLLER__;?>
/change" method="post" class="form">
						 			<input type="text" name='newPasword' required>
						 			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" name="act">
						 			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
						 			<input type="submit" value="修改" class="btn btn-info">
						 		</form>
						 	<?php }?>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>


</body>
</html><?php }} ?>