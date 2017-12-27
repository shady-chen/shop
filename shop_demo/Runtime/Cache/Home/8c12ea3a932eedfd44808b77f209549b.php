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

	<link rel="stylesheet" href="/Public/font-awesome/css/font-awesome.min.css"  type="text/css">
	<link rel="stylesheet" href="/Public/fonts/font-slider.css" type="text/css">

	<script src="/Public/js/jquery-2.1.1.js"></script>


</head>

<body>
	


	<div id="page-content" class="single-page">
		<div class="container" style="margin-left:50px;">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li style="color:rgb(280,68,0)">查看个人订单</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<div class="heading"><h2 style="color:rgb(280,69,0);padding-left:200px">购物历史</h2></div>
				</div>
				<div class="col-md-12" id="selectOrders">
					<center>
						<ul id="list">

							<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li id="li<?php echo ($i); ?>" >
									<span style="margin-left:10px">订单编号：<?php echo ($v['od_id']); ?></span>
									<span>订单总价：<?php echo ($v['od_price']); ?></span>
									<span>订单时间：<?php echo ($v['od_time']); ?></span>
								</li>
								<div class="order" id="div<?php echo ($i); ?>">
								  <h5 style="padding-top:20px;">订单的具体信息</h5>
								  	<div class="order-left">
										<table class="table table-border" style="width:100%">
											<tr>
												<td style="color:rgb(280,68,0);font-weight:bolder">商品名称</td>

												<?php if(is_array($v['od_good_id'])): $i = 0; $__LIST__ = $v['od_good_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><td><?php echo ($value); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>

											</tr>
											<tr>
												<td style="color:rgb(280,68,0);font-weight:bolder">购买数量</td>
												<?php if(is_array($v['od_buy_count'])): $i = 0; $__LIST__ = $v['od_buy_count'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><td><?php echo ($value); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
											</tr>
										</table>
									</div>



									<h6>收件信息</h6>
									<table class="table table-border">
										<tr>
											<th>收件人</th>
											<th>电话</th>
											<th>收货地址</th>
											<th>邮编</th>
										</tr>
										<tr>
											<td><?php echo ($v['od_addr_id']['ar_name']); ?></td>
											<td><?php echo ($v['od_addr_id']['ar_phone']); ?></td>
											<td><?php echo ($v['od_addr_id']['ar_address']); ?></td>
											<td><?php echo ($v['od_addr_id']['ar_code']); ?></td>
										</tr>
									</table>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>	
					</center>
				</div>
			</div>
		</div>
	</div>
	
<script>
	$('li').click(function(){
        $('#list>div').hide();
	   $(this).next().toggle();

	})
//个人信息界面展示订单信息
//  function showDiv(div){
//  	var body = document.getElementById("selectOrders");
//  	var li = body.getElementsByTagName('li');
//
//
//  	for(var i=0;i<li.length;i++){
//  		var x = "div"+i;
//  		if(x == div){
//  			document.getElementById(x).style.display = "block";
//  		}else{
//  			var x = "div"+i;
//  			document.getElementById(x).style.display = "none";
//  		}
//  	}
//
//
//  }
</script>


</body>
</html>