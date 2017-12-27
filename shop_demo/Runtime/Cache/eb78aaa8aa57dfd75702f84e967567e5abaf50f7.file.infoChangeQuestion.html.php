<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 20:33:06
         compiled from "D:/techan/shop_demo/Home/View\User\infoChangeQuestion.html" */ ?>
<?php /*%%SmartyHeaderCode:188835a4393028e3644-01240459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb78aaa8aa57dfd75702f84e967567e5abaf50f7' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\User\\infoChangeQuestion.html',
      1 => 1494815815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188835a4393028e3644-01240459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a43930294a90',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a43930294a90')) {function content_5a43930294a90($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>changeQuestion</title>
	
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
	

<script>
	function check(){
		if(confirm("请记好您新的验证问题以及答案喔")){
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
						<li style="color:rgb(280,68,0)">修改验证问题</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<div class="heading"><h2 style="color:rgb(280,69,0);padding-left:200px">设置新验证问题~</h2></div>
				</div>
				<div class="col-md-12" style="">
					<table class="table" id="register">
						<tr>
							<td><b>旧的问题及答案</b></td>
							<td>问题：<?php echo $_smarty_tpl->tpl_vars['info']->value[0];?>
</td>
						</tr>
						<tr>
							<td></td>
							<td>答案：<?php echo $_smarty_tpl->tpl_vars['info']->value[1];?>
</td>
						</tr>


					  <form method="post" action="<?php echo @__CONTROLLER__;?>
/changeTwo" id="register" name="form" onsubmit="return check()">
					  	<tr>
					  	  <td><label>新的验证问题</label></td>
					  	  <td>
								<select name="question">
									<option value="1">您小学的名称？</option>
									<option value="2">您中学的名字？</option>
									<option value="3">您大学的名字？</option>
									<option value="4">您最爱吃的食物？</option>
									<option value="5">您恋人的名字？</option>
								</select>
						   </td>
						</tr>
						<tr>
							<td></td>
							<td><input type="text" class="form-control" placeholder="请填写答案" name="answer" required></td>
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