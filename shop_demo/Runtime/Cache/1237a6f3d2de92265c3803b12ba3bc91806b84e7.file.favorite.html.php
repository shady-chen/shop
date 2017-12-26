<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:27:23
         compiled from "D:/techan/shop_demo/Home/View\Goods\favorite.html" */ ?>
<?php /*%%SmartyHeaderCode:315775a42786bcb1137-80490806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1237a6f3d2de92265c3803b12ba3bc91806b84e7' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\Goods\\favorite.html',
      1 => 1514293412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315775a42786bcb1137-80490806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a42786bdfef2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a42786bdfef2')) {function content_5a42786bdfef2($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Favorite</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
bootstrap.min.css"  type="text/css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css">
    
    <!-- my CSS -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
my.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo @FONT_URL;?>
css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="<?php echo @FONTS_URL;?>
font-slider.css" type="text/css">
    
    <!-- jQuery and Modernizr-->
    <script src="<?php echo @JS_URL;?>
jquery-2.1.1.js"></script>
    
    <!-- Core JavaScript Files -->       
    <script src="<?php echo @JS_URL;?>
bootstrap.min.js"></script>
    
    <!-- 登录框 -->
    <script src="<?php echo @JS_URL;?>
index.js"></script>
    <!-- 登录框插件 -->
   <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script> -->

</head>

<body>
    <!--Top-->
    <nav id="top">
        <div class="container">
            <div class="row">
    
                <div class="col-md-2" >
                    <div id="logo"><img src="<?php echo @IMG_URL;?>
logo.png" /></div>
                </div>
                <div class="col-md-2">
                    <div id="logo" style="width:400px;margin-left:-20px"><img src="<?php echo @IMG_URL;?>
top.png" /></div>
                </div>
                    <div class="col-md-8" style="float:right;padding-top:10px">
                        <ul class="top-link">
                            <li><span class="glyphicon glyphicon-user"></span><span style="color:black;" id="login"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></li>
                            <li><a href="<?php echo @__MODULE__;?>
/User/register"><span class="glyphicon glyphicon-glass" style></span>注册</a></li>
                            <li><a href="<?php echo @__CONTROLLER__;?>
/cart"><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a></li>
                            <li><a href="<?php echo @__CONTROLLER__;?>
/favorite"><span class="glyphicon glyphicon-star"></span>收藏夹</a></li>
                             <li><a href="<?php echo @__MODULE__;?>
/User/userInfo"><span class="glyphicon glyphicon-user" style=></span> 个人管理</a></li>
                            <li><a href="<?php echo @__CONTROLLER__;?>
/contact"><span class="glyphicon glyphicon-envelope"></span>联系我们</a></li>
                            <li><a href="<?php echo @__MODULE__;?>
/Index/logout.du"><span class="glyphicon glyphicon-user"></span>注销</a></li>
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


    <nav id="menu" class="navbar">
        <div class="container">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/index.php">首页</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按种类分类</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                               <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/肉类精选">肉类精选</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/粮油米面">粮油米面</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/名茶名酒">名茶名酒</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/果蔬副食">果蔬副食</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/水产极品">水产极品</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/野生特产">野生特产</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/滋补保健">滋补保健</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/工艺礼品">工艺礼品</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">按地区分类</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                               <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/云南">云南</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/四川">四川</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/重庆">重庆</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/北京">北京</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/山西">山西</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/天津">天津</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/江苏">江苏</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/浙江">浙江</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/海南">海南</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/湖南">湖南</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/福建">福建</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/东三省">东三省</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/西藏">西藏</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/内蒙古">内蒙古</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/新疆">新疆</a></li>
                                </ul>
                            </div> 
                        </div>
                    </li>
                    <li class="dropdown"><a href="<?php echo @__CONTROLLER__;?>
/goodstext">特产百科</a></li>
                    <li><a href="<?php echo @__CONTROLLER__;?>
/contact">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--//////////////////////////////////////////////////-->
    <!--///////////////////Category Page//////////////////-->
    <!--//////////////////////////////////////////////////-->
    <div id="page-content" class="single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="/index.php">首页</a></li>
                        <li><a href="javascript:void(0)" style="color:rgb(280,68,0)">收藏夹</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div id="main-content" class="col-md-8"> 
                        <div class="row">
                            <div class="products">
                            <!-- smarty遍历起点-->
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <div class="col-xs-4">
                                    <div class="product">
                                        <div class="image"><a href="product.html"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_img'];?>
" /></a></div>
                                        <div class="buttons">
                                            <a class="btn cart" href="<?php echo @__CONTROLLER__;?>
/cart/good_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
">
                                                <span class="glyphicon glyphicon-shopping-cart">购买</span>
                                            </a>
                                            <a class="btn wishlist" href="<?php echo @__ACTION__;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
">
                                                <span class="glyphicon glyphicon-heart">移出</span>
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <div class="name"><h3><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_name'];?>
</a></h3></div>
                                            <div class="price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_other'];?>
<span>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_self'];?>
</span></div>
                                            <div class="rating">
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- smarty遍历终点-->
                            </div>
                        </div>              
                    <!--  分页页码显示 --> 
                    <div class="row text-center">
                        <ul class="pagination"> <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
                <div id="sidebar" class="col-md-4">
                        <div class="widget wid-categories">
                        <div class="heading"><h4>商品类别</h4></div>
                        <div class="content">
                               <ul>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/肉类精选">肉类精选</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/粮油米面">粮油米面</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/名茶名酒">名茶名酒</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/果蔬副食">果蔬副食</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/水产极品">水产极品</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/野生特产">野生特产</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/滋补保健">滋补保健</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/type/工艺礼品">工艺礼品</a></li>
                                </ul>
                        </div>
                    </div>

                    <div class="widget wid-categories">
                        <div class="heading"><h4>商品产地</h4></div>
                            <div class="content">
                                <ul>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/云南">云南</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/四川">四川</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/重庆">重庆</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/北京">北京</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/山西">山西</a></li>
                                
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/天津">天津</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/江苏">江苏</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/浙江">浙江</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/海南">海南</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/湖南">湖南</a></li>
                                
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/福建">福建</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/东三省">东三省</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/西藏">西藏</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/内蒙古">内蒙古</a></li>
                                    <li><a href="<?php echo @__CONTROLLER__;?>
/goodslist/from/新疆">新疆</a></li>
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
                    
                Copyright &copy; 御帝 2016, All Rights Reserved  <img src="<?php echo @IMG_URL;?>
foot.gif"  alt="版权" style="vertical-align:middle;" /> 京ICP证041189号 特产食品经营许可证 
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
<?php }} ?>