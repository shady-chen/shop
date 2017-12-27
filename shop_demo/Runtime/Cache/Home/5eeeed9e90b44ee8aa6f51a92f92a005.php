<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>changePassword</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="/Public/css/style.css">
	
	<!-- my CSS -->
	<link rel="stylesheet" href="/Public/css/my.css">

	<!-- Custom Fonts -->

	<!-- jQuery and Modernizr-->
	<script src="/Public/js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="/Public/js/bootstrap.min.js"></script>
	
	<!-- 登录框插件js -->
	<script src="/Public/js/index.js"></script>


</head>

<body>
	<!--Top-->
	<nav id="top">
		<div class="container">
			<div>
	
				<div style="float:left;">
					<div id="logo"><img src="/Public/images/logo.png" /></div>
				</div>
				<div style="float:left;margin:50px 0 0 -20px;">
					<div id="logo" style="width:400px;margin-left:-20px"><img src="/Public/images/top.png" /></div>
				</div>
					
			</div>
		</div>
	</nav>



   
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Account Page///////////////////-->
	<!--//////////////////////////////////////////////////-->

<script>
	function check(){
		if(confirm("请记好您的新密码奥")){
			return true;
		}else{
			return false;
		}
	}
</script>
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="javascript:void(0)">找回密码</a></li>
						<li style="color:rgb(280,68,0)">修改密码</li>
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-12">
					<div class="heading"><h2 style="color:rgb(280,69,0);padding-left:200px">设置新密码~</h2></div>
				</div>
				<div class="col-md-12" style="">
					<table class="table" id="register">
					  <form method="post" action="/index.php/Home/User/change" id="register" name="form" onsubmit="return check()">
					  	<tr>
					  	  <td><label>新的密码</label></td>
					  	  <td>
								<input type="text" class="form-control" placeholder="请填写新的密码" name="newWord" required>
								<input type="hidden" value="<?php echo ($username); ?>" name='username'>
						   </td>
						</tr>
						
						
						<tr>
							<td></td>
							<td>
							<input type="submit" style="background:rgb(280,68,0);color:white;width:150px;height:40px;border-radius: 10px;margin-left:80px" value="提交">
							<input type="reset" style="background:rgb(280,68,0);color:white;width:150px;height:40px;border-radius: 10px" value="重写">
							</td>
						</tr>
					</form>
					</table>
				</div>
			</div>
		</div>
	</div>
	<footer>
		
		<div class="copyright">
			<div class="foot">
					
				Copyright &copy; 御帝 2016, All Rights Reserved  <img src="/Public/images/foot.gif"  alt="版权" style="vertical-align:middle;" /> 京ICP证041189号 特产食品经营许可证
			</div>
		</div>
	</footer>



</body>
</html>