<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>忆家乡商城</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Public/css/style.css">

    <!-- my CSS -->
    <link rel="stylesheet" href="/Public/css/my.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="/Public/font-awesome/css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="/Public/fonts/font-slider.css" type="text/css">

    <!-- jQuery and Modernizr-->
    <script src="/Public/js/jquery-2.1.1.js"></script>

    <!-- Core JavaScript Files -->
    <script src="/Public/js/bootstrap.min.js"></script>

    <!-- 登录框插件js -->
    <script src="/Public/js/index.js"></script>
    <!-- 登录框插件 -->
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script> -->

</head>

<body>
<!--Top-->
<nav id="top">
    <div class="container">
        <div class="row">

            <div class="col-md-2" >
                <div id="logo"><img src="/Public/images/logo.png" /></div>
            </div>
            <div class="col-md-2">
                <div id="logo" style="width:400px;margin-left:-20px"><img src="/Public/images/top.png" /></div>
            </div>
            <div class="col-md-8" style="float:right;padding-top:10px">
                <ul class="top-link">
                    <li><span class="glyphicon glyphicon-user"></span><span style="color:black;" id="login"><?php echo ($username); ?></span></li>
                    <li id="register"><a href="/index.php/Home/User/register"><span class="glyphicon glyphicon-glass" style></span>注册</a></li>
                    <li><a href="/index.php/Home/Goods/cart/act/show"><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a></li>
                    <li><a href="/index.php/Home/Goods/favorite"><span class="glyphicon glyphicon-star"></span>收藏夹</a></li>
                    <li><a href="/index.php/Home/User/userInfo"><span class="glyphicon glyphicon-user" style=></span>个人管理</a></li>
                    <li><a href="/index.php/Home/Goods/contact"><span class="glyphicon glyphicon-envelope"></span>联系我们</a></li>
                    <li><a href="/index.php/Home/Index/logout.du"><span class="glyphicon glyphicon-user"></span>注销</a></li>
                </ul>
                <div class="clo-md-6" style="position: absolute;right:200px;top:50px">
                    <input type="text" class="form-control" id="search" style="width:220px" placeholder="请输入关键字 例:蜂蜜">
                    <button type="button" class="btn btn-default" style="position:absolute;top:0px;right:-50px" onclick="search();">
                        <span class="glyphicon glyphicon-search" style="color:rgb(255, 140, 60);"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    window.onload = function(){
        document.getElementById("aaa").onclick = function(){
            var name = document.getElementById("uname").value;
            var pword = document.getElementById("password").value;
            var aaa = document.getElementById("login");
            var span = document.getElementById("span");
            if(!name || !pword){
                alert("用户名或密码不能为空");
                return;
            }
            var data = "name="+name+"&pword="+pword;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    //alert(xhr.responseText);

                    if(xhr.responseText==0){
                        span.innerHTML = "用户名或密码错误";
                    }else{
                        $('#mask').hide();
                        $('.window').hide();
                        aaa.innerHTML = name+",欢迎您";
                        $('#register').hide();
                    }

                }
            }
            xhr.open("post","/index.php/Home/Index/index");
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send(data);
        }
    }
</script>
<!-- 登录框 -->
<div id="boxes">
    <div id="dialog" class="window">
        <div class="login">
            <div class="login_div">
                <div class="title">
                    忆家乡特产商城欢迎您！
                </div>
                <form action="<?php echo ($smarty["const"]["/index.php/Home/User/findPasword"]); ?>" method="post">
                    <table style="margin:20px;color:rgb(255,68,0)">
                        <tr>
                            <td>
                                <span>登录名：</span><br />
                                <input type="text" class="form-control" placeholder="请填写用户名" name="username" id="uname" required/><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span> 登录密码：</span> <br/>
                                <input type="password" class="form-control"  placeholder="请填写密码" name="password" id="password" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" value="提交" class="tijiao" id="aaa"/>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="span" style="color: #000;font-size: 18px;font-weight: 700;"></span>
                            </td>
                        </tr>
                    </table>
                </form>
                <span style="left:20px;color:red">还没有账号?<a href="/index.php/Home/User/register" style="color:red;">立即注册</a></span>
                <span style="float:right"><a href="/index.php/Home/User/findPasword" style="color:red;">忘记密码....</a></span>
                <a href="#" class="close"/>Close</a>
            </div>
        </div>

    </div>
    <!-- Mask to cover the whole screen -->
    <div id="mask"></div>
</div>
<nav id="menu" class="navbar">
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首页</a></li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle"
                                        data-toggle="dropdown">按种类分类</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="/index.php/Home/Goods/goodslist/type/肉类精选">肉类精选</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/type/粮油米面">粮油米面</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/type/名茶名酒">名茶名酒</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/type/果蔬副食">果蔬副食</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="/index.php/Home/Goods/goodslist/type/水产极品">水产极品</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/type/野生特产">野生特产</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/type/滋补保健">滋补保健</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/type/工艺礼品">工艺礼品</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle"
                                        data-toggle="dropdown">按地区分类</a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="/index.php/Home/Goods/goodslist/from/云南">云南</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/四川">四川</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/重庆">重庆</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/北京">北京</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/山西">山西</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="/index.php/Home/Goods/goodslist/from/天津">天津</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/江苏">江苏</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/浙江">浙江</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/海南">海南</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/湖南">湖南</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="/index.php/Home/Goods/goodslist/from/福建">福建</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/东三省">东三省</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/西藏">西藏</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/内蒙古">内蒙古</a></li>
                                <li><a href="/index.php/Home/Goods/goodslist/from/新疆">新疆</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="/index.php/Home/Goods/goodstext">特产百科</a></li>
                <li><a href="/index.php/Home/Goods/contact">联系我们</a></li>
            </ul>
        </div>
    </div>
</nav>
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Account Page///////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="/index.php">首页</a></li>
						<li><a href="javascript:void(0)" style="color:rgb(280,68,0)">找回密码</a></li>
					</ul>
				</div>
			</div>
	<script>
		function judge(){
			var username = document.getElementById("username").value;
			var span = document.getElementById("usernameSpan");
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4 && xhr.status == 200){
					//alert(xhr.responseText);
					if(xhr.responseText == 1){
						span.innerHTML = "";
					}else{
						span.innerHTML = "用户名不存在";
					}
				}
			}
			xhr.open("get","/index.php/Home/User/register/name/"+username);
			xhr.send(null);
		}

		function submitForm(){
			var span = document.getElementById("usernameSpan");
			if(span.innerHTML){
				alert("用户名不存在");
				return false;
			}else{
				return true;
			}
		}

		</script>
			<div class="row">
				<div class="col-md-12">
					<div class="heading"><h2 style="color:rgb(280,69,0);padding-left:200px">忘记密码？快来找回你的密码吧~</h2></div>
				</div>
				<div class="col-md-6" style="margin-left:300px">
					<table class="table" id="register">
					  <form method="post" action="<?php echo ($smarty["const"]["/index.php/Home/User/findPasword"]); ?>" id="register" name="form" onsubmit="return submitForm();">
					  	<tr>
					  	  <td><label>用户名</label></td>
					  	  <td>
								<input type="text" class="form-control" placeholder="请填写用户名" name="username" id="username"  onblur="judge();" required>
								<span id="usernameSpan"></span>
						   </td>
						</tr>
						<tr>
							<td><label>请选择验证问题</label></td>
							<td>
								<select name="question">
									<option value="1">您小学的名称？</option>
									<option value="2">您中学的名字？</option>
									<option value="3">您大学的名字？</option>
									<option value="4">您最爱吃的食物？</option>
									<option value="5">您恋人的名字？</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label>请填写答案</label></td>
							<td>
								<input type="text" class="form-control" placeholder="请填写验证答案，用于您找回密码" name="answer" required>
							</td>
						</tr>
						<tr>
							<td colspan="2">
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
    <div class="container">
        <div class="wrap-footer">
            <div class="row">
                <div class="col-md-3 col-footer footer-1">
                    <div class="heading"><h4>新手上路</h4></div>
                    <ul>
                        <li><a href="#">交易条款</a></li>
                        <li><a href="#">会员登录</a></li>
                        <li><a href="#">找回密码</a></li>
                        <li><a href="#">免费注册</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-footer footer-2">
                    <div class="heading"><h4>付款方式</h4></div>
                    <ul>
                        <li><a href="#">货到付款</a></li>
                        <li><a href="#">网上支付</a></li>
                        <li><a href="#">银行汇款</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-footer footer-3">
                    <div class="heading"><h4>售后服务</h4></div>
                    <ul>
                        <li><a href="#">维权说明</a></li>
                        <li><a href="#">安全与保密</a></li>
                        <li><a href="#">退换货流程</a></li>
                        <li><a href="#">退款方式及时间</a></li>
                        <li><a href="#">退换货须知</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-footer footer-4">
                    <div class="heading"><h4>联系我们</h4></div>
                    <ul>
                        <li><span class="glyphicon glyphicon-home"></span>山西省太原市中北大学</li>
                        <li><span class="glyphicon glyphicon-earphone"></span>+87 3922110</li>
                        <li><span class="glyphicon glyphicon-envelope"></span>moon_light_d@outlook.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="foot">

            Copyright &copy; 御帝 2016, All Rights Reserved <img src="/Public/images/foot.gif" alt="版权"
                                                               style="vertical-align:middle;"/> 京ICP证041189号 特产食品经营许可证
        </div>
    </div>
</footer>
<div class="returnTop">
    <a href="#top">
        <span class="glyphicon glyphicon-upload" id="scrollto"></span>
    </a>
</div>

</body>
</html>