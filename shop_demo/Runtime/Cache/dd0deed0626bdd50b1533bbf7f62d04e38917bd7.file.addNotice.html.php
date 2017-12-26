<?php /* Smarty version Smarty-3.1.6, created on 2017-12-26 23:49:48
         compiled from "D:/techan/shop_demo/Admin/View\Goods\addNotice.html" */ ?>
<?php /*%%SmartyHeaderCode:221095a426f9ca76e56-43443419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0deed0626bdd50b1533bbf7f62d04e38917bd7' => 
    array (
      0 => 'D:/techan/shop_demo/Admin/View\\Goods\\addNotice.html',
      1 => 1495870286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221095a426f9ca76e56-43443419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a426f9cabbc2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a426f9cabbc2')) {function content_5a426f9cabbc2($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>添加公告</title>
	
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

    
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
				<table class="table" id="register">
					<caption><h2>新增公告</h2></caption>
					  <form method="post" action="<?php echo @__CONTROLLER__;?>
/addNotice">
						
					  	<tr>
					  	  <td><label>公告报头</label></td>
					  	  <td>
								<input type="text" class="form-control" placeholder="请填写公告报头" name="nc_title" required>
		
								
						   </td>
						</tr>
						<tr>
							<td><label>公告信息</label></td>
							<td>
								<textarea rows='8' cols='50' placeholder="请填写公告具体信息" name="nc_info" required></textarea>
							</td>
						</tr>
						
						<tr>
							<td colspan="2">
							<input type="submit" style="background:rgb(280,68,0);color:white;width:150px;height:40px;border-radius: 10px;margin-left:80px" value="添加">
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