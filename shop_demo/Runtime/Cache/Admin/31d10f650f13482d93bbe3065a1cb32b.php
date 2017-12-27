<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>公告列表</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">

	
	<!--  CSS -->
	<link rel="stylesheet" href="/Public/static/css/admin.css">
	<link rel="stylesheet" href="/Public/css/style.css">

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
	<div class="row" style="margin-top:20px">
		<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li style="color:rgb(280,68,0)">查看商城订单</li>
					</ul>
				</div>
			</div>
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-hover">
					<tr>
						<th>公告编号</th>
						<th>相关管理员编号</th>
						<th>公告报头</th>
						<th>添加时间</th>
						<th>操作</th>
					</tr>
					<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($v['nc_id']); ?></td>
						<td><?php echo ($v['nc_ad_id']); ?></td>
						<td><?php echo ($v['nc_title']); ?></td>
						<td><?php echo ($v['nc_time']); ?></td>
						<td>
							<a class='btn btn-info' href='/index.php/Admin/Goods/noticeInfo/act/select/nc_id/<?php echo ($v["nc_id"]); ?>'>查看详情</a>
							<a class='btn btn-danger' href='/index.php/Admin/Goods/noticeInfo/act/delete/nc_id/<?php echo ($v["nc_id"]); ?>'>删除</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>


				</table>
			</div>
			<div class="pages"><?php echo ($page); ?></div>
		</div>
	</div>
</div>

</body>
</html>