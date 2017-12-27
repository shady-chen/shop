<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
                <form action="<?php echo ($smarty["const"]["/index.php/Home/Index/index"]); ?>" method="post">
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
<!--///////////////////HomePage///////////////////////-->
<!--//////////////////////////////////////////////////-->

<div id="page-content" class="home-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-11" style='margin:-15px 0 5px 30px;'>

                <marquee align="left" behavior="scroll" direction="left" hspace="0" vspace="0" loop="-1"
                         scrollamount="8" scrolldelay="100" style="font-weight: bolder;" onMouseOut="this.start()"
                         onMouseOver="this.stop()">
                    <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href='/index.php/Home/Index/notice/nc_id/<?php echo ($i); ?>'>最新公告：<?php echo ($v); ?>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </marquee>


            </div>
            <div class="col-lg-12">
                <!-- Carousel -->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="/Public/images/big1.png" alt="First slide">
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        <div class="item">
                            <img src="/Public/images/big2.png" alt="Second slide">
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        <div class="item">
                            <img src="/Public/images/big3.png" alt="Second slide">
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        <div class="item">
                            <img src="/Public/images/big4.png" alt="Third slide">
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12 text-center">
                                </div>
                            </div><!-- /header-text -->
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div><!-- /carousel -->
            </div>
        </div>
        <div class="row" style="margin-left:0px;">
            <div id="tab">
                <ul class="tab">
                    <li class="shichang-first" onmouseover="show(0)">本月疯狂购</li>
                    <li onmouseover="show(1)">热卖推销</li>
                    <li onmouseover="show(2)">猜你喜欢</li>
                    <li onmouseover="show(3)">新品上架</li>
                </ul>
                <div class="show-goods">
                    <ul>
                        <?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                                <a href="/index.php/Home/Goods/goodsinfo/good_id/<?php echo ($v['gd_id']); ?>">
                                    <img src="<?php echo ($v['gd_img']); ?>">
                                </a><br>
                                <span class="good-name"><?php echo ($v['gd_name']); ?></span>
                                <br/>
                                市场价:<span class="price-other">￥<?php echo ($v['gd_price_other']); ?></span>&nbsp;&nbsp;本店:<span
                                    class="price-self">￥<?php echo ($v['gd_price_self']); ?></span>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="show-goods">
                    <ul>
                        <?php if(is_array($arr2)): $i = 0; $__LIST__ = $arr2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                            <a href="/index.php/Home/Goods/goodsinfo.du?good_id=<?php echo ($v['gd_id']); ?>">
                                <img src="<?php echo ($v['gd_img']); ?>">
                            </a><br>
                            <span class="good-name"><?php echo ($v['gd_name']); ?></span>
                            <br/>
                            市场价:<span class="price-other">￥<?php echo ($v['gd_price_other']); ?></span>&nbsp;&nbsp;本店:<span
                                class="price-self">￥<?php echo ($v['gd_price_self']); ?></span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="show-goods">
                    <ul>
                        <?php if(is_array($arr3)): $i = 0; $__LIST__ = $arr3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                            <a href="/index.php/Home/Goods/goodsinfo.du?good_id=<?php echo ($v['gd_id']); ?>">
                                <img src="<?php echo ($v['gd_img']); ?>">
                            </a><br>
                            <span class="good-name"><?php echo ($v['gd_name']); ?></span>
                            <br/>
                            市场价:<span class="price-other">￥<?php echo ($v['gd_price_other']); ?></span>&nbsp;&nbsp;本店:<span
                                class="price-self">￥<?php echo ($v['gd_price_self']); ?></span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="show-goods">
                    <ul>
                        <?php if(is_array($arr4)): $i = 0; $__LIST__ = $arr4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                            <a href="/index.php/Home/Goods/goodsinfo.du?good_id=<?php echo ($v['gd_id']); ?>">
                                <img src="<?php echo ($v['gd_img']); ?>">
                            </a><br>
                            <span class="good-name"><?php echo ($v['gd_name']); ?></span>
                            <br/>
                            市场价:<span class="price-other">￥<?php echo ($v['gd_price_other']); ?></span>&nbsp;&nbsp;本店:<span
                                class="price-self">￥<?php echo ($v['gd_price_self']); ?></span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

            </div>
            <div class="tab-right">
                <div class="tab-right-title"><span class="glyphicon glyphicon-th-list"
                                                   style="color:white; font-size:26px;position:relative;top:3px;right:8px"></span>销售排行
                </div>
                <div class="tab-right-content">
                    <ul>
                        <?php if(is_array($arr3)): $i = 0; $__LIST__ = $arr3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                            <img src="/Public/images/dd_book_no_0<?php echo ($v['gd_id']); ?>.gif" class="rank-title">
                            <span style="display: none"><img src="<?php echo ($v['gd_img']); ?>" class="rank-img"></span>
                            <a href="/index.php/Home/Goods/goodsinfo/good_id/<?php echo ($v['gd_id']); ?>"><?php echo ($v['gd_name']); ?></a>
                            <span style="color:red">￥<?php echo ($v['gd_price_self']); ?></span>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6"><a href="#"><img src="/Public/images/tuijian_left.png"></a></div>
            <div class="col-md-6"><a href="#"><img src="/Public/images/tuijian_right.png"></a></div>
        </div>

        <div class="row">
            <div class="banner">品牌旗舰店</div>
            <div class="row" id="other_logo">
                <div class="col-md-2" style="padding-left:3	0px"><a href="#"><img
                        src="/Public/images/logo1.png"></a></div>
                <div class="col-md-2"><a href="#"><img src="/Public/images/logo2.png"></a></div>
                <div class="col-md-2"><a href="#"><img src="/Public/images/logo3.png"></a></div>
                <div class="col-md-2"><a href="#"><img src="/Public/images/logo4.png"></a></div>
                <div class="col-md-2"><a href="#"><img src="/Public/images/logo5.png"></a></div>
            </div>
        </div>
        <div class="row" id="others_logo">
            <div class="col-md-12">大牌特卖</div>
            <div class="col-xs-2">
                <a href="#"><img src="/Public/images/logo6.png"></a>
                <a href="#"><img src="/Public/images/logo7.png"></a>
                <a href="#"><img src="/Public/images/logo8.png"></a>
                <a href="#"><img src="/Public/images/logo9.png"></a>
                <a href="#"><img src="/Public/images/logo10.png"></a>
            </div>
            <div class="col-xs-2"><a href="#"><img src="/Public/images/g1.png"></a></div>
            <div class="col-xs-2"><a href="#"><img src="/Public/images/g2.png"></a></div>
            <div class="col-xs-2"><a href="#"><img src="/Public/images/g3.png"></a></div>
            <div class="col-xs-2"><a href="#"><img src="/Public/images/g4.png"></a></div>
            <div class="col-xs-2"><a href="#"><img src="/Public/images/g5.png"></a></div>
        </div>
        <div class="row">
            <div class="col-md-12"><a href="javascript:void(0)"><img src="/Public/images/logo11.png"></a></div>
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