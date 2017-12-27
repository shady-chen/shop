<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>田野间商城</title>

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
                    <li><a href="/index.php/Home/Goods/cart/act/show""><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a></li>
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
                <form action="<?php echo ($smarty["const"]["/index.php/Home/Goods/goodsinfo"]); ?>" method="post">
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
	<!--///////////////////Product Page///////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="/index.php">主页</a></li>
						<li><a href="/index.php/Home/Goods/goodslist">商品列表</a></li>
						<li><a href="javascript:void(0)" style="color:rgb(280,68,0)"><?php echo ($info['gd_type']); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div id="main-content" class="col-md-8">
					<div class="product">
						<div class="col-md-6">
							<div class="image">
									<img src="<?php echo ($info['gd_img']); ?>"/>
							</div>
						</div>
						<!-- 商品具体信息 -->
						<div class="col-md-6">
							<div class="caption">
								<div class="name"><h3><?php echo ($info['gd_name']); ?>【<?php echo ($info['gd_type']); ?>】</h3></div>
								<div class="info">
									<ul>
										<li>商城价: <span style="font-size:18px;color:#dd0000">￥<?php echo ($info['gd_price_self']); ?></span>&nbsp;(立省<?php echo ($info['gd_price_other']-$info['gd_price_self']); ?>元)</li>
										<li>市场价：<span style="text-decoration: line-through;">￥<?php echo ($info['gd_price_other']); ?></span></li>
										<li>商品库存：<?php echo ($info['gd_num']); ?></li>
										<li>商品重量：<?php echo ($info['gd_weight']); ?>g</li>
										<li>商品点击数：<?php echo ($info['gd_click_num']); ?></li>
										<li>商品上架时间：<?php echo ($info['gd_date']); ?></li>
									</ul>
								</div>
								<div class="rating">
									<span>用户评价：</span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</div>

								<div class="well"><label>我要买: </label>&nbsp;

									 <form action="/index.php/Home/Goods/cart/act/add" method="post">
									 <span class="glyphicon glyphicon-minus" style="color: rgb(260, 68, 0); font-size: 13px;" onclick="minus();"></span>&nbsp;

									 <input id="num" type="text" value="1" name="buyNum">&nbsp;
									 <span class="glyphicon glyphicon-plus" style="color: rgb(260, 68, 0); font-size: 13px;" onclick="plus();"></span>
									 <br />
									 <input type="hidden" name="good_id" value="<?php echo ($info['gd_id']); ?>">
									 <input type="submit" class="btn btn-primary btn-sm" value="加入购物车">
									 </form>


									 <a href="/index.php/Home/Goods/favorite/add/<?php echo ($info['gd_id']); ?>" class="btn btn-primary btn-sm" role="button"  style="position:relative;bottom:31px;left:90px">
									 	<span class="glyphicon glyphicon-star"></span>加入收藏夹</a>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>	
					<div class="product-desc">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#description">商品描述</a></li>
							<li><a href="#review">购买评价</a></li>
						</ul>
						<div class="tab-content">
							<div id="description" class="tab-pane fade in active">
								<h5>商品介绍</h5>
								<p style='line-height:30px;text-indent:35px;letter-spacing:1px;'> <?php echo ($text); ?></p>
								<h5>商品实拍</h5>
								<div class="tab-img"><img src="<?php echo ($info['gd_img']); ?>"></div>
							</div>
							<div id="review" class="tab-pane fade">
							  <div class="review-text">
							  </div>
							  <div class="review-form">
								<h4>谈谈对这件商品的看法</h4>
								<form name="form1" id="ff" method="post" action="/index.php/Home/Index/suggest">
									<label>
									<textarea name="message" id="message" required></textarea>
									</label>
									<input type="hidden" value="<?php echo ($info['gd_id']); ?>" name='id'>
									<div class="text-right">
										<input class="btn btn-default" type="reset"  value="取消">
										<input class="btn btn-default" type="submit"  value="提交">
									</div>
								</form>

								<h6 style="color: rgb(260, 68, 0)">关于这件商品的一些评价</h6>
								<div>
									<table class="table-bordered" style="text-align: center;">
										<tr>
											<th style="width:100px;">用户编号</th>
											<th style="width:400px;text-align: center;">评价</th>
											<th style="width:200px">评价时间</th>
										</tr>
										{foreach $suggest as $v}
										<tr>
											<td><?php echo ($v['rw_user_id']); ?></td>
											<td><?php echo ($v['rw_text']); ?></td>
											<td><?php echo ($v['rw_date']); ?></td>
										</tr>
										{/foreach}
									</table>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-categories">
						<div class="heading"><h4>商品类别</h4></div>
						<div class="content">
								<ul>
									<li><a href="/index.php/Home/Goods/goodslist/type/肉类精选">肉类精选</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/type/粮油米面">粮油米面</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/type/名茶名酒">名茶名酒</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/type/果蔬副食">果蔬副食</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/type/水产极品">水产极品</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/type/野生特产">野生特产</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/type/滋补保健">滋补保健</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/type/工艺礼品">工艺礼品</a></li>
								</ul>
						</div>
					</div>

					<div class="widget wid-categories">
						<div class="heading"><h4>商品产地</h4></div>
							<div class="content">
								<ul>
									<li><a href="/index.php/Home/Goods/goodslist/from/云南">云南</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/四川">四川</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/重庆">重庆</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/北京">北京</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/山西">山西</a></li>
								
									<li><a href="/index.php/Home/Goods/goodslist/from/天津">天津</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/江苏">江苏</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/浙江">浙江</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/海南">海南</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/湖南">湖南</a></li>
								
									<li><a href="/index.php/Home/Goods/goodslist/from/福建">福建</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/东三省">东三省</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/西藏">西藏</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/内蒙古">内蒙古</a></li>
									<li><a href="/index.php/Home/Goods/goodslist/from/新疆">新疆</a></li>
								</ul>
							</div>
					</div>	
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


<div class="returnTop">
	<a href="#top">
		<span class="glyphicon glyphicon-upload" id="scrollto"></span>
	</a>
</div>

	<!-- IMG-thumb -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">  1121212              
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	
	<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
		$('.nav-tabs a').on('shown.bs.tab', function(event){
			var x = $(event.target).text();         // active tab
			var y = $(event.relatedTarget).text();  // previous tab
			$(".act span").text(x);
			$(".prev span").text(y);
		});
	});
	</script>
</body>
</html>