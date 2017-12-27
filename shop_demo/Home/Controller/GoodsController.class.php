<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller{

	//商品列表
	function goodslist(){
		$good = D("goods");

		
			if(isset($_GET['type'])){
				//根据商品类型查看商品
				$type = $_GET['type'];
				$sql = "gd_type='$type'";
			}else if(isset($_GET['from'])){
				//根据商品产地查看商品
				$from = $_GET['from'];
				$sql = "gd_from='$from'";
			}else if(isset($_GET['search'])){
				//根据首页搜索查看商品
				$search = $_GET['search'];
				$sql = "gd_name like '%$search%'";
			}else{
				//没有任何搜索条件
				$sql = "gd_id > 0";
			}

		
		
		$count = $good ->where($sql)-> count();
		$page = new\Think\Page($count,9); //定义分页类
		$show = $page -> show();
		$result = $good ->where($sql) -> order('gd_id') -> limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show); //输出分页数据
	


		if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "您好,".session("username");//获取用户名
        }

		$this -> assign("username",$username);
		$this -> assign("info",$result);
		$this -> display();
	}


	//商品详情
	function goodsinfo($good_id){
		$goods = D("goods");
		$goodinfo = D("info");
		$info = $goods ->where("gd_id=$good_id") -> find();

		$goodsinfo = $goodinfo ->where("if_gd_id =$good_id") -> find();
		$text = $goodsinfo['if_information'];
		if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "您好,".session("username");//获取用户名
        }
        
        $review = D("reviews");
        $suggest = $review ->order('rw_date desc')->limit(10)-> where("rw_good_id = $good_id") -> select();

    $this -> assign("suggest",$suggest);
    $this -> assign("username",$username);
	$this -> assign("text",$text);
	$this->assign("info",$info);
	$this->display();
	}
	

	
	//购物车
	function cart(){
		//判断用户是否登录
		R('Index/isLogin');
		$cart = D("cart");
		//加入购物车 
		if(I('GET.act') == "add" && $_POST){
			
			$good_id = $_POST['good_id'];
			$buy_count = $_POST['buyNum'];
			$result = $cart -> where("ct_good_id=$good_id") -> find();

			if($result){
				$sql = "update cart set ct_buy_count=$buy_count where ct_good_id=$good_id";
				//执行原生sql语句时。查询使用query,增删改使用execute
				$cart -> execute($sql);
			}else{
				$cart -> ct_id = null;
				$cart -> ct_user_id = session("user_id");
				$cart -> ct_good_id = $good_id;
				$cart -> ct_buy_count = $buy_count;
				$cart -> add();
			}
		}


		if(I('GET.good_id')){
			
			$good_id = I('GET.good_id');
			$buy_count = 1;
			$result = $cart -> where("ct_good_id=$good_id") -> find();

			if($result){
				echo <<<A
				<script>
				alert("请勿重复添加商品");
				</script>
A;
			}else{
				$cart -> ct_id = null;
				$cart -> ct_user_id = session("user_id");
				$cart -> ct_good_id = $good_id;
				$cart -> ct_buy_count = $buy_count;
				$cart -> add();
			}
		}
	
		//删除商品
		if(I('GET.act') == "delete"){
			$gd_id = $_GET['gd_id'];
			$sql = "delete from cart where ct_good_id=$gd_id";
			$cart -> execute($sql);			
		}

		//修改购买数量
		if(I('GET.act') == "update"){
			$gd_id = $_GET['gd_id'];
			$num = $_GET['num'];
			$sql = "update cart set ct_buy_count=$num where ct_good_id=$gd_id";
			$cart -> execute($sql);
		}


 		$sql = "select goods.gd_id,goods.gd_name,goods.gd_img,goods.gd_price_self,goods.gd_price_other,cart.ct_buy_count,goods.gd_num from goods,cart where goods.gd_id=cart.ct_good_id";
 		$result = $cart -> query($sql);
 		$_SESSION['info'] = $result;


 		//计算总价
	    $sum_a = 0;
	    $sum_b = 0;
		foreach($result as $v){
			$a = $v['gd_price_self']*$v['ct_buy_count'];
			$b = $v['gd_price_other']*$v['ct_buy_count']; 
			$sum_a += $a;//本店总价格
			$sum_b += $b;//市场总价格
		}
		$poor = $sum_b - $sum_a; //计算差价
		$price = array("$sum_a","$sum_b","$poor");
		$_SESSION['price'] = $price;
		$username = "您好,".session("username");

    	$this -> assign("username",$username);
 		$this -> assign("price",$price);
 		$this -> assign("info",$result);
		$this -> display();
	}

	//订单表
	function order(){
		if(empty(session("info"))){
			echo <<<HTML
			<script>
			alert("您还未购买商品!")
			history.go(-1);
			</script>
HTML;
			die();
		}

		$arr = D("address");
		if($_GET['ar_id']){
			$id = $_GET['ar_id'];
			$choose = $arr -> where("ar_id=$id") -> find();
			$this -> assign("cos",1);
			$this -> assign("choose",$choose);
			$this ->assign("ar_id",$_GET['ar_id']);
		}
		$user_id = session("user_id");
		$result = $arr ->where("ar_user_id=$user_id") -> limit(2) -> select();
		$username = "您好,".session("username");


    	$this -> assign("username",$username);
		$this -> assign("address",$result);
		$this -> assign("price",session("price"));
		$this -> assign("info",session("info"));
		$this -> display();
	}

	//提交订单后
	function afterorder(){
		$user_id = session("user_id");
		$ar_id = $_GET['ar_id']; //获取收货编号

		$good = D("goods");

		//相应商品的数量减少
		foreach(session("info") as $v){
			$gid[] = $v['gd_id'];
			$buy_num[] = $v['ct_buy_count'];
			$sql = "update goods set gd_num=gd_num-{$v['ct_buy_count']} where gd_id={$v['gd_id']}";
			$good -> execute($sql);
		}
		//$arr=(1,2,3);
		//$con1=implode('|',$arr); //将数组转化为字符串     结果：1|2|3
		//$con2 = explode('|',$con1); //字符串转换为数组    结果：array(1,2,3)
		$good_id = implode("|",$gid); //获取商品编号
		$num = implode("|",$buy_num); //获取购买数量
		$price = session("price")[0];

		$order = D("orders");

		$sql = "insert into orders values(null,$user_id,'$good_id','$num','$price',$ar_id,now())";
		$order -> execute($sql);
	

		//清空购物车表
		$cart = D("cart");
		$sql = "truncate cart;";
		$cart -> execute($sql);

		//清空session信息
		$_SESSION['price'] = array();
		$_SESSION['info'] = array();

	redirect('/index.php',2,'购买成功，2s后跳转到首页...');

	}

	

	


	
	//收藏夹
	function favorite(){
       R('Index/isLogin');
		$favorite = D("favorite");
		if($_GET){
			if($_GET['add']){
				$good_id = $_GET['add'];
				$num = $favorite -> where("ft_good_id=$good_id") -> find();
				if($num){
					echo <<<A
					<script>
					alert("您已收藏此商品，无需重复收藏~");
					</script>
A;
				}else{
					$favorite -> ft_id = null;
					$favorite -> ft_user_id = session("user_id");
					$favorite -> ft_good_id = $_GET['add'];
					$favorite -> add();
				}
			}
			if($_GET['delete']){
				$good_id = $_GET['delete'];
				$favorite -> where("ft_good_id=$good_id") -> delete();
			}
		}
		$sql = "select goods.gd_id,goods.gd_name,goods.gd_price_self,goods.gd_price_other,goods.gd_img from goods,favorite where goods.gd_id=favorite.ft_good_id;";
		$result = $favorite -> query($sql);
		if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "您好,".session("username");//获取用户名
        }
        $this -> assign("username",$username);
		$this -> assign("info",$result);
		$this -> display();
	}

	//商品文章
	function goodstext(){
		$goodinfo = D("info");
		if($_GET['search']){
			$search = $_GET['search'];
			//tp框架的模糊查询
			$sql['if_gd_name'] = array('like',"%$search%");
			$info = $goodinfo -> field('if_id,if_gd_name,if_name,if_time')-> where($sql) -> select();
		}else{
			$info = $goodinfo -> field('if_id,if_gd_name,if_name,if_time') -> select();
		}
	if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "您好,".session("username");//获取用户名
        }
    $this -> assign("username",$username);
	$this -> assign("info",$info);
	$this->display();
	}

	//商品文章
	function artile(){
		$artile = D("info");
		if($_GET['id']){
			$id = $_GET['id'];
			$info = $artile -> where("if_gd_id = $id") -> find();
		}
		if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "您好,".session("username");//获取用户名
        }
    $this -> assign("username",$username);
		$this -> assign("info",$info);
		$this -> display();
	}

	//联系我们
	function contact(){
		//任何人均可为网站建设提建议
		if(I('POST.')){
			$info = D("advice");
			$info -> ai_id = null;
			$ai_name = I('POST.name');
			$ai_email = I('POST.email');
			$ai_phone = I('POST.phone');
			$ai_advice = I('POST.message');
			$sql = "insert into advice values(null,'$ai_name','$ai_email','$ai_phone','$ai_advice',now());";

			$result = $info -> execute($sql);
			if($result == 1){
				echo <<<A
				<script>
				alert("提交成功，感谢您的建议");
				window.location.href='/index.php/Home/Goods/contact';
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
		$this->display();
	}

	//收货地址
	//收货地址的修改和删除未完成，地址页面，点击确定后，该收货地址应该是默认收货地址
	function address(){
       R('Index/isLogin');
		$address = D("address");
		//添加收获地址
		if($_POST){
			$address -> ar_id = null;
			$address -> ar_user_id = session("user_id");
			$address -> ar_name = $_POST['ad_name'];
			$address -> ar_phone = $_POST['ad_phone'];
			$address -> ar_address = $_POST['ad_ad'];
			$address -> ar_code = $_POST['ad_email'];
			$result = $address -> add();
			echo <<<A
			<script>
				alert("添加成功");
				window.location.href='/index.php/Home/Goods/address';
			</script>
A;
		}

		//删除收货地址
		if(I("GET.act") == "delete"){
			$ar_id = $_GET['ar_id'];
			$address -> where("ar_id=$ar_id") -> delete();
			echo <<<A
			<script>
				alert("删除成功");
				window.location.href='/index.php/Home/Goods/address';
			</script>
A;
		}

		//修改收货地址信息
		if(I("GET.act") == "change"){
			$ar_id = $_GET['ar_id'];
			$result = $address -> where("ar_id=$ar_id") -> find();
			echo json_encode($result);
			die();
		}

		$user_id = session("user_id");
		$result = $address ->where("ar_user_id = $user_id") -> select();
		if(!session("username")){
         $username = "<a href='#dialog' name='modal'>登录</a>";
        }else{
         $username = "【你好,".session("username")."】";//获取用户名
        }

    $this -> assign("username",$username);
		$this -> assign("info",$result);
		$this -> display();
	}


	function suggest(){
		R('Index/isLogin');
		$good_id = I("POST.id"); //获取商品id
		$message = I("POST.message"); 

		$orders = D("orders");
	    $userId = I('SESSION.user_id');

	    //获取当前用户的所有订单记录
	    $date = $orders -> where("od_user_id = $userId") -> getField('od_good_id',true); //获取数组需要添加true属性
	    
	    $length = count($date);
	    for($i=0;$i<$length;$i++){
			$info = explode('|',$date[$i]); //字符串转换为数组    结果：array(1,2,3)
			for($j=0;$j < count($info);$j++){
				if($good_id == $info[$j]){
					$result = "yes";
				}
			}
	    }



	    if($result == "yes"){
	    	$sql = "insert into reviews values(null,$userId,$good_id,'$message',now())";
	    	$num = $orders -> execute($sql);

	    	if($num == 1){
	    		echo "<script>";
	    			echo "alert('评价成功');";
	    			echo "location.href='goodsinfo/good_id/$good_id';";
	    		echo "</script>";    		

	    	}
	    }else{
	    	echo <<<HTML
	    	<script>
	    	alert('抱歉，您未购买此商品，无法对该商品进行评价!');
	    	history.go(-1);
	    	</script>
HTML;
	    }
	    
	    
	    

	}
}