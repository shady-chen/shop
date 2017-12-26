<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller{

	//所有会员的id和姓名
	function userInfo(){
		R('Index/isLogin');
		$user = D("user");
		$info = $user ->field("user_id,user_name") -> select();
		$this -> assign("info",$info);
		$this -> display();
	}

	//会员具体的信息
	function user(){
		R('Index/isLogin');
		$user_id = I("GET.user_id");
		$user = D("user");
		$info = $user -> where("user_id = $user_id") -> find();
		$this -> assign("info",$info);
		$this -> display();
	}

	//管理员的信息
	function admin(){
		R('Index/isLogin');
		$user = D("admin");
		$id = $_SESSION['admin']['ad_id'];  //获取当前管理员的编号
		$info = $user ->field("ad_id,ad_name") -> select();
		$this -> assign("id",$id);
		$this -> assign("info",$info);
		$this -> display();
	}

	//修改管理员信息
	function adminInfo(){
		R('Index/isLogin');
		$ad_id = I('GET.ad_id'); //获取管理员id
		$act = I('GET.act'); //获取修改信息

		$this -> assign('id',$ad_id);
		$this -> assign('act',$act);
		$this -> display();
	} 

	function change(){
		R('Index/isLogin');
		if(I('POST.')){
			$admin = D('admin');
			$date['ad_id'] = I("POST.id");
			$act = I('POST.act');


			if($act == "changeName"){
				$date['ad_name'] = I('POST.newName');
				$admin -> save($date);
			}else if($act == "changePsword"){
				$date['ad_password'] = md5(I('POST.newPasword'));
				$admin -> save($date);
			}

			die("修改成功");

		}else{
			die('操作错误');
		}
	}

} 