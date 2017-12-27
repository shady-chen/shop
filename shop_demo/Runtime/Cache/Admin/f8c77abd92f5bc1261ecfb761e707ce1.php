<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>selectOrders</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="/Public/css/style.css">
	

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo ($smarty["const"]["FONT_URL"]); ?>css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="/Public/static/css/font-slider.css" type="text/css">

</head>

<body>
	


	<div id="page-content" class="single-page">
		<div class="container" style="margin-left:50px;">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li style="color:rgb(280,68,0)">查看商城订单</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12" id="selectOrders">
					<center>
					<table class="table table-hover">
						<tr>
							<th>订单编号</th>
							<th>订单总价</th>
							<th>订单时间</th>
							<th>操作</th>
						</tr>

						<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($i); ?></td>
							<td><?php echo ($v['od_price']); ?></td>
							<td><?php echo ($v['od_time']); ?></td>
							<td>
								<a class="btn btn-info" href="/index.php/Admin/Goods/orderInfo/act/select/id/<?php echo ($v['od_id']); ?>">查看详情</a>
								<a class="btn btn-danger" href="/index.php/Admin/Goods/orderInfo/act/delete/id/<?php echo ($v['od_id']); ?>">删除</a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>


					</table>	

					<!-- 分页样式 -->
					<div class="pages"><?php echo ($page); ?></div>
					</center>
				</div>
			</div>
		</div>
	</div>


</body>
</html>