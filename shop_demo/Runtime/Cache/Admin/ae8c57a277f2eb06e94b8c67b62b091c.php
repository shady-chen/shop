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
		<div class="col-md-8">
			<table class="table table-hover">
				<tr>
					<th>选项</th>
					<th>信息</th>
				</tr>
				<tr>
					<td>用户编号</td>
					<td><?php echo ($info['user_id']); ?></td>
				</tr>
				<tr>
					<td>用户名</td>
					<td><?php echo ($info['user_name']); ?></td>
				</tr>
				<tr>
					<td>用户邮箱</td>
					<td><?php echo ($info['user_email']); ?></td>
				</tr>
				<tr>
					<td>联系方式</td>
					<td><?php echo ($info['user_phone']); ?></td>
				</tr>
				<tr>
					<td>验证问题</td>
					<td>
						<input type="hidden" value="<?php echo ($info['user_question']); ?>" id="question">
					<span id="note"></span></td>
						<script>
							var num = document.getElementById("question").value;
							var question = document.getElementById("note");
							var a;
							 switch(num){
							 	case "1":
							 	 	a = "您小学的名称？";
							 	 	break;
							 	case "2":
							 		a = "您中学的名字？";
							 		break;
							 	case "3":
							 		a = "您大学的名字？";
							 		break;
							 	case "4":
							 		a = "您最爱吃的食物？";
							 		break;
							 	case "5":
							 		a = "您恋人的名字？";
							 		break;
							 	default:
							 		a = "您未选择问题";
							 }
							question.innerHTML =  a;
						</script>
				</tr>
				<tr>
					<td>验证问题的答案</td>
					<td><?php echo ($info['user_answer']); ?></td>
				</tr>
			
				<tr>
					<td colspan="2">
						<button onclick="history.go(-1);">返回</button>
					</td>
				</tr>

	


			</table>
		</div>
	</div>
</div>

</body>
</html>