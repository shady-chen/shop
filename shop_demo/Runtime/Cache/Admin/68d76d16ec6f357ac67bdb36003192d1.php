<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>userInfo</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">

	
	<!--  CSS -->
	<link rel="stylesheet" href="/Public/static/css/my.css">

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="/Public/static/css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="/Public/static/css/font-slider.css" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="/Public/js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="/Public/js/bootstrap.min.js"></script>


</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<table class="table table-hover">
				<tr>
					<th>会员编号</th>
					<th>会员名</th>
					<th style="padding-left:70px">操作</th>
				</tr>
				<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($v['user_id']); ?></td>
					<td><?php echo ($v['user_name']); ?></td>
					<td>
						<a href="/index.php/Admin/User/user/user_id/<?php echo ($v['user_id']); ?>">查看会员信息</a>
						&nbsp;&nbsp;&nbsp;
						
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	</div>
</div>

</body>
</html>