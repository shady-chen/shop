<?php
header("content-type:text/html;charset=utf-8");

//这是入口文件

//经常使用pre双标签，所以封装成一个函数
function show_bug($info){
	echo "<pre style='color:red;'>";
		var_dump($info);
	echo "</pre>";
}



//框架两种模式：[默认]生产(线上)、开发模式
define('APP_DEBUG',true);//开发(错误提示非常具体)
//define('APP_DEBUG',true);//开发(错误提示模糊)

//给静态资源文件访问目录设置常量，方便后期维护
define("CSS_URL","/Public/css/");
define("FONT_URL","/Public/font-awesome/");
define("FONTS_URL","/Public/fonts/");
define("JS_URL","/Public/js/");
define("IMG_URL","/Public/images/");
define("GOOD_URL","/Public/images/good_img/");
define("LIB_URL","/Public/lib/");
define("STATIC_URL","/Public/static/");

//后台常量
define("ADMIN_JS","/Admin/Public/js/");
define("ADMIN_CSS","/Admin/Public/css/");


include "../ThinkPHP/ThinkPHP.php";

