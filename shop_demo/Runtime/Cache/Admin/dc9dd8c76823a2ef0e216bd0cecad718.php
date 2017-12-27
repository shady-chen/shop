<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>添加商品</title>
	
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
					<caption><h2>新增商品</h2></caption>
					  <form method="post" action="/index.php/Admin/Goods/add"  enctype="multipart/form-data">
						
					  	<tr>
					  	  <td><label>商品名称</label></td>
					  	  <td>
								<input type="text" class="form-control" placeholder="请填写商品名称" name="gd_name" required>
		
								
						   </td>
						</tr>
						<tr>
							<td><label>商品类型</label></td>
							<td>
								<select class="form-control" name="gd_type">
									<option value="肉类精选">肉类精选</option>
									<option value="水产极品">水产极品</option>
									<option value="粮油米面">粮油米面</option>
									<option value="野生特产">野生特产</option>
									<option value="名茶名酒">名茶名酒</option>
									<option value="滋补保健">滋补保健</option>
									<option value="果蔬副食">果蔬副食</option>
									<option value="工艺礼品">工艺礼品</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>商城价格</label></td>
							<td>
							<input type="text" class="form-control" placeholder="请填写商城价格" name="gd_self_price" required>
							</td>
						</tr>
						<tr>
							<td><label>市场价格</label></td>
							<td>
								<input type="text" class="form-control" placeholder="请填写市场价格" name="gd_other_price" required>
								<span id="passwordTwoSpan"></span>
							</td>
						</tr>
						<tr>
							<td><label>库存</label></td>
							<td>
								<input type="text" class="form-control" placeholder="请填写商品库存量" name="gd_num" required> 
								<span id="emailSpan"></span>
							</td>
						</tr>
						<tr>
							<td><label>商品重量</label></td>
							<td>
								<input type="text" class="form-control" placeholder="请填写商品重量" name="gd_weight" required>
								<span id="phoneSpan"></span>
							</td>
						</tr>
						<tr>
							<td><label>商品来源地</label></td>
							<td>
								<select class="form-control" name="gd_from">
									<option value="云南">云南</option>
									<option value="四川">四川</option>
									<option value="重庆">重庆</option>
									<option value="北京">北京</option>
									<option value="山西">山西</option>
									<option value="天津">天津</option>
									<option value="江苏">江苏</option>
									<option value="浙江">浙江</option>
									<option value="海南">海南</option>
									<option value="湖南">湖南</option>
									<option value="福建">福建</option>
									<option value="东三省">东三省</option>
									<option value="西藏">西藏</option>
									<option value="内蒙古">内蒙古</option>
									<option value="新疆">新疆</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>商品图片</label></td>
							<td>
								<input type="file"  placeholder="请填写商品产地" name="gd_img" required>
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