<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
                <form action="<?php echo ($smarty["const"]["/index.php/Home/Goods/order"]); ?>" method="post">
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
    <!--///////////////////Cart Page//////////////////////-->
    <!--//////////////////////////////////////////////////-->
    <div id="page-content" class="single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="/index.php">首页</a></li>
                        <li><a href="javascript:void(0)" style="color:rgb(280,68,0)">确认订单</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" style="margin-top:-30px">
                <div class="product well">
                    <form method="post" action="cart.php">
                        <table class="table">
                            <tr>
                                <th scope="col">商品ID</th>
                                <th scope="col">商品名称</th>
                                <th scope="col">商品图片</th>
                                <th scope="col">商品单价</th>
                                <th scope="col">市场价格</th>
                                <th scope="col">购买数量</th>
                                <th scope="col">库存量</th>
                                <th scope="col">小计</th>
                            </tr>
                            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                <td scope="col"><?php echo ($v['gd_id']); ?></td>
                                <td scope="col"><?php echo ($v['gd_name']); ?></td>
                                <td scope="col"><img src="<?php echo ($v['gd_img']); ?>"/></td>
                                <td scope="col">￥<?php echo ($v['gd_price_self']); ?></td>
                                <td scope="col">￥<?php echo ($v['gd_price_other']); ?></td>
                                <td scope="col"><?php echo ($v['ct_buy_count']); ?></td>
                                <td scope="col"><?php echo ($v['gd_num']); ?></td>
                                <td scope="col"><?php echo ($v['gd_price_self']*$v['ct_buy_count']); ?></td>                           
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    
                </div>  
            </div>
            
            <div class="row" id="order">

                <div class="col-xs-7">
                  <table class="table">
                            <h4 style="color:rgb(280,68,0)">选择收货地址
                            <span style="font-size: 16px;margin-left:350px"><a href="/index.php/Home/Goods/address" class="btn btn-default btn-sm active" role="button">管理收货地址</a></span>
                            </h4>
                            <tr>
                                <th scope="col">收货人姓名</th>
                                <th scope="col">收货人电话</th>
                                <th scope="col">收货人地址</th>
                                <th></th>
                            </tr>
                            <form name="form" action="" method="post" id="form"> 

                            <?php if($cos == 1): ?><tr>
                                    <th><?php echo ($choose["ar_name"]); ?></td>
                                    <th><?php echo ($choose["ar_phone"]); ?></td>
                                    <th><?php echo ($choose["ar_address"]); ?></td>
                                    <th>确定<input type="radio" name="choose" value="<?php echo ($choose["ar_id"]); ?>" checked></td>
                            </tr><?php endif; ?>
                        <?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($v['ar_name']); ?></td>
                                <td><?php echo ($v['ar_phone']); ?></td>
                                <td><?php echo ($v['ar_address']); ?></td>
                                <td>确定<input type="radio" name="choose" value="<?php echo ($v['ar_id']); ?>"></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </form>
                        </table>
                </div>
                <div class="col-xs-4">
                        <table>
                            <h4 style="color:rgb(280,68,0)">结算</h4>
                            <tr>
                                <td>市场额总价</td>
                                <td>￥<?php echo ($price[1]); ?></td>
                            </tr>
                            <tr>
                                <td>节省</td>
                                <td>￥<?php echo ($price[2]); ?></td>
                            </tr>
                            <tr style="border-top: 1px solid #333">
                                <td><h5 style="color:rgb(280,68,0)">总价</h5></td>
                                <td>￥<?php echo ($price[0]); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <a href="/index.php/Home/Index/cart" class="btn btn-1" style="background:rgb(280,68,0);color:white">返回修改</a>
                                <button class="btn btn-1" style="background:rgb(280,68,0);color:white" onclick="submitOrder();">提交订单</button>
                                 </td>
 <script>
        function submitOrder(){

             var radioSelete = "Nothing";
             var seletedValue;
             var aaa = document.getElementsByName("choose");
                 for(i=0;i<aaa.length;i++)
                 {
                    if(aaa[i].checked)  
                    {
                     radioSelete = "seleted";
                     seletedValue = aaa[i].value;
                    }
                 }
                 if(radioSelete == "Nothing")
                 {
                   alert("请选择收货地址!");
                   return false;
                 }
                else
                {
                 window.location.href = "/index.php/Home/Goods/afterorder/ar_id/"+seletedValue;
                }
           }
    </script>
                            </tr>
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