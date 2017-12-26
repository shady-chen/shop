<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{
	function index(){
		R('Index/isLogin');
		$admin = session("admin");
		$this -> display();
	}

	function top(){
		$admin = session("admin");
		$ad_name = $admin['ad_name'];
		$this -> assign("ad_name",$ad_name);
		$this -> display();
	}

	function left(){
		$this -> display();
	}

	function right(){
		$this -> display();
	}

	function logout(){
		$admin = session("admin")['ad_name'];
		$_SESSION['admin'] = array();
		echo <<<A
		<script>
		alert("管理员{$admin}已注销");
		
		window.parent.location.href = '/index.php/Admin/Login/login';
		</script>
A;
	}

	   function isLogin(){
        $isLogin = session("admin");
        if(!$isLogin){
            //如果没有登录。设置跳回上一级目录
        echo <<<A
        <script>
        alert("您还未登陆请先登录"); 
        window.location.href = '/index.php/Admin/Login/login';
        </script>
A;
        }
    }
}