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
	
	<!-- my CSS -->
	<link rel="stylesheet" href="/Public/css/my.css">

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
						<li onclick="javascript:history.go(-1);" style="cursor:pointer;">返回上一级</li>
						<li style="color:rgb(280,68,0)">查看订单详情</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<center>					
						<div class="col-md-11">
						  <h5 style="padding-top:20px;">订单的具体信息</h5>
						  	<div class="order-left">
								<table class="table table-hover" style="width:100%;">
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">订单用户编号</td>
										<td colspan="<?php echo ($info['num']); ?>"><?php echo ($info['od_user_id']); ?></td>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">商品名称</td>
										<?php if(is_array($info['od_good_id'])): $i = 0; $__LIST__ = $info['od_good_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><td><?php echo ($value); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">购买数量</td>
										<?php if(is_array($info['od_buy_count'])): $i = 0; $__LIST__ = $info['od_buy_count'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><td><?php echo ($value); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">订单总价</td>
										<td colspan="<?php echo ($info['num']); ?>"><?php echo ($info['od_price']); ?></td>
									</tr>
									<tr>
										<td style="color:rgb(280,68,0);font-weight:bolder">订单时间</td>
										<td colspan="<?php echo ($info['num']); ?>"><?php echo ($info['od_time']); ?></td>
									</tr>
								</table>
							</div>



							<h6>收件信息</h6>
							<div class="col-md-10 col-md-offset-1">
								<table class="table table-border">
									<tr>
										<th>收件人</th>
										<th>电话</th>
										<th>收货地址</th>
										<th>邮编</th>
									</tr>
									<tr>
										<td><?php echo ($info['od_addr_id']['ar_name']); ?></td>
										<td><?php echo ($info['od_addr_id']['ar_phone']); ?></td>
										<td><?php echo ($info['od_addr_id']['ar_address']); ?></td>
										<td><?php echo ($info['od_addr_id']['ar_code']); ?></td>
									</tr>
								</table>
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>


</body>
</html>