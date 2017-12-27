<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>添加公告</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">

	


	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo ($smarty["const"]["FONT_URL"]); ?>css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="/Public/static/css/font-slider.css" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="/Public/js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="/Public/js/bootstrap.min.js"></script>

    
</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
				<table class="table" id="register">
					<caption><h2>新增公告</h2></caption>
					  <form method="post" action="/index.php/Admin/Goods/addNotice">
						
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
</html>