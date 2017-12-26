<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	function login(){
		if($_POST){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$admin = D("admin");
			$result = $admin -> where("ad_name='$username' and ad_password=md5('$password')") -> find();

			if($result){
				$_SESSION['admin'] = $result;
				redirect('/index.php/Admin/Index/index');
			}else{
				echo <<<A
				<script>
				alert("用户名或密码错误");
			 	</script>
A;

			}
		}

		$this -> display();
	}

}