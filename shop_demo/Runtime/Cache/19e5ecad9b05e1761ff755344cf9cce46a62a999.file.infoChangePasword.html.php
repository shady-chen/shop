<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 20:33:04
         compiled from "D:/techan/shop_demo/Home/View\User\infoChangePasword.html" */ ?>
<?php /*%%SmartyHeaderCode:167545a43930024d560-31340135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19e5ecad9b05e1761ff755344cf9cce46a62a999' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\User\\infoChangePasword.html',
      1 => 1494812117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167545a43930024d560-31340135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4393002bc71',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4393002bc71')) {function content_5a4393002bc71($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>changePassword</title>
	
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
	
	<!-- jQuery and Modernizr-->
	<script src="<?php echo @JS_URL;?>
jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="<?php echo @JS_URL;?>
bootstrap.min.js"></script>
	
	<!-- 登录框插件js -->
	<script src="<?php echo @JS_URL;?>
index.js"></script>


</head>

<body>
	



   
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Account Page///////////////////-->
	<!--//////////////////////////////////////////////////-->

<script>
	function check(){
		if(confirm("请记好您的新密码奥")){
			return true;
		}else{
			return false;
		}
	}
</script>
	<div id="page-content" class="single-page">
		<div class="container" style="margin-left:50px;">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li style="color:rgb(280,68,0)">修改密码</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<div class="heading"><h2 style="color:rgb(280,69,0);padding-left:200px">设置新密码~</h2></div>
				</div>
				<div class="col-md-12" style="">
					<table class="table" id="register">
					  <form method="post" action="<?php echo @__CONTROLLER__;?>
/change" id="register" name="form" onsubmit="return check()">
					  	<tr>
					  	  <td><label>新的密码</label></td>
					  	  <td>
								<input type="text" class="form-control" placeholder="请填写新的密码" name="newWord" required>
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" name='username'>
						   </td>
						</tr>
						
						
						<tr>
							<td></td>
							<td>
							<input type="submit" style="background:rgb(280,68,0);color:white;width:150px;height:40px;border-radius: 10px;margin-left:80px" value="提交">
							<input type="reset" style="background:rgb(280,68,0);color:white;width:150px;height:40px;border-radius: 10px" value="重写">
							</td>
						</tr>
					</form>
					</table>
				</div>
			</div>
		</div>
	</div>
	



</body>
</html><?php }} ?>