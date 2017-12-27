<?php
namespace Home\Controller;
use Think\Controller;
//前台用户控制器
class UserController extends Controller{

	function register(){
		$user = D("user");

		//使用ajax判断用户名是否存在		
		if(I('GET.name')){
			$name = $_GET['name'];
			$result = $user -> where("user_name='$name'") -> find();
			echo empty($result)?0:1;
			die();
		}
		
       	 if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "您好,".session("username");//获取用户名
        }

        if($_POST){
        	$user -> user_id = null;
        	$user -> user_name = $_POST['username'];
        	$user -> user_password = md5($_POST['password']);
        	$user -> user_email = $_POST['email'];
        	$user -> user_phone = $_POST['phone'];
        	$user -> user_question = $_POST['question'];
        	$user -> user_answer = $_POST['answer'];
        	$user -> add();
        	redirect('/index.php',2,'注册成功，2s后跳转到首页...');
        }

		$this -> assign("username",$username);
		$this -> display();

	}

	function userInfo(){
		//判断用户是否登录
		R('Index/isLogin');
		
		$username = "您好,".session("username");
    	$this -> assign("username",$username);
    	$this -> display();
	}

	//找回密码
	function findPasword(){
		
		

		if($_POST){
			$user = D("user");
			$username = $_POST['username'];
			$question = $_POST['question'];
			$answer = $_POST['answer'];
			$result = $user -> where("user_name='$username' and user_question='$question' and user_answer='$answer'") ->field("user_name,user_password") -> find();
			
			
			if(empty($result)){
				echo <<<A
					<script>
						alert('您的答案错误!');
						history.go(-1);
					</script>
A;
			}else{
				echo <<<A
<script>
	window.open('changePasword/username/$username','findPasword','width=750,height=800,top=100,left=200,resizable=yes');
</script>
A;

				
			}

		}

		 if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "您好,".session("username");//获取用户名
        }

        $this -> assign("username",$username);
		$this -> display();
	}


	function changePasword(){
		$username = I('GET.username'); //获取要修改密码的用户名

		$this -> assign("username",$username);
		$this -> display();
	}

	function change(){
		$User = D("user");
		if(I('POST.username')){
			$username = I('POST.username');
		}else if(session("username")){
			$username = session("username");
		}else{
			echo "错误";
			die();
		}


		if(I('POST.newWord')){
			$word = I('POST.newWord');
			$num = $User-> where("user_name='$username'")->setField('user_password',md5("$word"));
			if($num == 1){
				echo <<<HTML
				<script>
					alert('恭喜，修改成功');
					window.close();
				</script>
HTML;
                return;
			}else{
				echo <<<HTML
				<script>
					alert('您的操作错误!');
					window.close();
				</script>
HTML;

				return;
			}

		}
		$this -> display();
	}

	//修改验证问题
	function infoChangeQuestion(){
		R('Index/isLogin');
		$User = D("user");
		$username = session("username");
		$info = $User->where("user_name='$username'")->find();
		
		$answer = $info['user_answer'];

		switch($info['user_question']){
			case 1:
				$question = "您小学的名称？";
				break;
			case 2:
				$question = "您中学的名字？";
				break;
			case 3:
				$question = "您大学的名字？";
				break;
			case 4:
				$question = "您最爱吃的食物？";
				break;
			case 5:
				$question = "您恋人的名字？";
				break;

		}
		$qa = array("$question","$answer");
		
		$this -> assign("info",$qa);
		$this -> display();
	}

	function changeTwo(){
		$question = I('POST.question');
		$answer = I('POST.answer');

		$User = D('user');
		$date['user_question'] = $question;
		$date['user_answer'] = $answer;

		$username = session("username");
		$User->where("user_name='$username'")->save($date);
		echo "<script>";
			echo "alert('修改成功');";
		echo "</script>";
		
	}


	//个人信息界面查看个人订单
	function selectOrders(){

		$user_id = session("user_id"); //获取用户id

		$Order = D("orders");
		$info = $Order -> where("od_user_id = $user_id") -> select();
		
		$address = D("address"); //获取收货地址的信息
		$good = D("goods"); //获取商品名称

		for($i=0;$i<count($info);$i++){
			
			//拆分商品购买数量
			$info[$i]['od_buy_count'] = explode('|',$info[$i]['od_buy_count']);

			//获取收货地址信息
			$id = $info[$i]['od_addr_id'];
		    $info[$i]['od_addr_id'] = $address -> where("ar_id = $id") -> find();

		    //获取商品名称
		    $info[$i]['od_good_id'] = explode('|',$info[$i]['od_good_id']);
		    $gd_id = $info[$i]['od_good_id'];
		    for($k=0;$k<count($gd_id);$k++){
				$info[$i]['od_good_id'][$k] = $good -> where("gd_id = $gd_id[$k]") -> getField('gd_name');
				
			}
		}

		
		$this -> assign("info",$info);
		$this -> display();
	}


}