<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>修改管理员信息</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="/Public/css/style.css">
	
	<!-- my CSS -->
	<link rel="stylesheet" href="/Public/css/my.css">

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo ($smarty["const"]["FONT_URL"]); ?>css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="<?php echo ($smarty["const"]["FONTS_URL"]); ?>font-slider.css" type="text/css">

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

							<?php if($act=='changeName'): ?><label>请输入新的账号名称并谨记:</label>
						 		<form action="/index.php/Admin/User/change" method="post" class="form">
						 			<input type="text" name='newName' required>
						 			<input type="hidden" value="<?php echo ($act); ?>" name="act">
						 			<input type="hidden" value="<?php echo ($id); ?>" name="id">
						 			<input type="submit" value="修改" class="btn btn-info">
						 		</form>
						 	<?php else: ?>
						 		请输入新的密码并谨记:
						 		<form action="/index.php/Admin/User/change" method="post" class="form">
						 			<input type="text" name='newPasword' required>
						 			<input type="hidden" value="<?php echo ($act); ?>" name="act">
						 			<input type="hidden" value="<?php echo ($id); ?>" name="id">
						 			<input type="submit" value="修改" class="btn btn-info">
						 		</form><?php endif; ?>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>


</body>
</html>