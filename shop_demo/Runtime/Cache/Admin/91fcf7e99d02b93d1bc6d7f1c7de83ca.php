<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>goodList</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">

	
	<!--  CSS -->
	<link rel="stylesheet" href="/Public/static/css/admin.css">
	

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
		<div class="">
			<div class="table-responsive">
				<table class="table table-hover">
					<tr>
						<th>商品编号</th>
						<th>商品图片</th>
						<th>商品名称</th>
						<th>商品类型</th>
						<th>商城价</th>
						<th>市场价</th>
						<th>库存</th>
						<th>商品重量</th>
						<th>上架日期</th>
						<th>商品点击量</th>
						<th>商品来源地</th>
						<th>操作</th>
					</tr>
					<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($v['gd_id']); ?></td>
						<td><img src="<?php echo ($v['gd_img']); ?>" style="width:50px;height:30px"></td>
						<td><?php echo ($v['gd_name']); ?></td>
						<td><?php echo ($v['gd_type']); ?></td>
						<td><?php echo ($v['gd_price_self']); ?></td>
						<td><?php echo ($v['gd_price_other']); ?></td>
						<td><?php echo ($v['gd_num']); ?></td>
						<td><?php echo ($v['gd_weight']); ?></td>
						<td><?php echo ($v['gd_date']); ?></td>
						<td><?php echo ($v['gd_click_num']); ?></td>
						<td><?php echo ($v['gd_from']); ?></td>

						<td>
							<a class='btn btn-info' href='/index.php/Admin/Goods/operate/act/update/gd_id/<?php echo ($v["gd_id"]); ?>'>更改</a>
							<a class='btn btn-danger' href='/index.php/Admin/Goods/operate/act/delete/gd_id/<?php echo ($v["gd_id"]); ?>'>删除</a>
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