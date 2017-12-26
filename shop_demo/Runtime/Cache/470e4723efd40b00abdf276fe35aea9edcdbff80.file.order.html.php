<?php /* Smarty version Smarty-3.1.6, created on 2017-12-27 00:27:34
         compiled from "D:/techan/shop_demo/Home/View\Goods\order.html" */ ?>
<?php /*%%SmartyHeaderCode:143355a4278765b5ff5-04942121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '470e4723efd40b00abdf276fe35aea9edcdbff80' => 
    array (
      0 => 'D:/techan/shop_demo/Home/View\\Goods\\order.html',
      1 => 1514293412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143355a4278765b5ff5-04942121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'info' => 0,
    'v' => 0,
    'cos' => 0,
    'choose' => 0,
    'address' => 0,
    'price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4278766e660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4278766e660')) {function content_5a4278766e660($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Order</title>
    
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
    
    <!-- 登录框插件js -->
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
                            <li><span class="glyphicon glyphicon-user"></span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</li>
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
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <tr>
                                <td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_id'];?>
</td>
                                <td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_name'];?>
</td>
                                <td scope="col"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_img'];?>
"/></td>
                                <td scope="col">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_self'];?>
</td>
                                <td scope="col">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_other'];?>
</td>
                                <td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['ct_buy_count'];?>
</td>
                                <td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_num'];?>
</td>
                                <td scope="col"><?php echo $_smarty_tpl->tpl_vars['v']->value['gd_price_self']*$_smarty_tpl->tpl_vars['v']->value['ct_buy_count'];?>
</td>                           
                            </tr>
                        <?php } ?>
                        </table>
                    
                </div>  
            </div>
            
            <div class="row" id="order">

                <div class="col-xs-7">
                  <table class="table">
                            <h4 style="color:rgb(280,68,0)">选择收货地址
                            <span style="font-size: 16px;margin-left:350px"><a href="<?php echo @__CONTROLLER__;?>
/address" class="btn btn-default btn-sm active" role="button">管理收货地址</a></span>
                            </h4>
                            <tr>
                                <th scope="col">收货人姓名</th>
                                <th scope="col">收货人电话</th>
                                <th scope="col">收货人地址</th>
                                <th></th>
                            </tr>
                            <form name="form" action="" method="post" id="form"> 
                        <?php if ($_smarty_tpl->tpl_vars['cos']->value==1){?>
                                  <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['choose']->value['ar_name'];?>
</td>
                                    <th><?php echo $_smarty_tpl->tpl_vars['choose']->value['ar_phone'];?>
</td>
                                    <th><?php echo $_smarty_tpl->tpl_vars['choose']->value['ar_address'];?>
</td>
                                    <th>确定<input type="radio" name="choose" value="<?php echo $_smarty_tpl->tpl_vars['choose']->value['ar_id'];?>
" checked></td>
                            </tr>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ar_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ar_phone'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ar_address'];?>
</td>
                                <td>确定<input type="radio" name="choose" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['ar_id'];?>
"></td>
                            </tr>
                        <?php } ?>
                           </form>
                        </table>
                </div>
                <div class="col-xs-4">
                        <table>
                            <h4 style="color:rgb(280,68,0)">结算</h4>
                            <tr>
                                <td>市场额总价</td>
                                <td>￥<?php echo $_smarty_tpl->tpl_vars['price']->value[1];?>
</td>
                            </tr>
                            <tr>
                                <td>节省</td>
                                <td>￥<?php echo $_smarty_tpl->tpl_vars['price']->value[2];?>
</td>
                            </tr>
                            <tr style="border-top: 1px solid #333">
                                <td><h5 style="color:rgb(280,68,0)">总价</h5></td>
                                <td>￥<?php echo $_smarty_tpl->tpl_vars['price']->value[0];?>
</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <a href="<?php echo @__CONTROLLER__;?>
/cart" class="btn btn-1" style="background:rgb(280,68,0);color:white">返回修改</a>
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
</html><?php }} ?>