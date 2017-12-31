<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{

	//所有会员的id和姓名
	function goodList(){
		R('Index/isLogin');
		$good = D("goods");

		$count = $good ->where("gd_id>0")-> count();
		$page = new\Think\Page($count,9); //定义分页类
		$show = $page -> show();
		$result = $good -> order('gd_id') -> limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show); //输出分页数据
		$this -> assign('info',$result);

		$this -> display();
	}

	function addGood(){
		$this -> display();
	}

	function add(){
		R('Index/isLogin');

	

		$good = D("goods");


		$gd_name = I('POST.gd_name');
		$gd_type = I('POST.gd_type');
		$gd_self_price = I('POST.gd_self_price');
		$gd_other_price = I('POST.gd_other_price');
		$gd_num = I('POST.gd_num');
		$gd_weight = I('POST.gd_weight');
		$gd_from = I('POST.gd_from');
		$gd_img = "/Public/images/good_img/".$_FILES['gd_img']['name'];

		$sql = "insert into goods values(null,'$gd_name','$gd_type','$gd_self_price','$gd_other_price','$gd_num','$gd_weight',now(),'100','$gd_from','$gd_img')";

		$good -> execute($sql);
	

		//设置图片上传的限制
		//已可成功上传
		$config = array(
					'maxsize' => 3145728,
					'rootPath' => './Public/',
					'savePath' => 'images/good_img/',
					'exts' => array('jpg','png','jpeg','gif'),
					'autoSub' => false,
					'saveName' => '',
				);
		$upload = new\Think\Upload($config);
		$info = $upload -> uploadOne($_FILES['gd_img']);
		if(!$info)
        {
            echo '添加失败';
            dump($upload->getError());
        }
        else
        {

            echo '添加成功';
        }
        return;

		
	}


	//对商品信息的操作(更改和删除)
	function operate(){
		R('Index/isLogin');
		$act = I('GET.act');
		$gd_id = I('GET.gd_id');
		if(empty($act) || empty($gd_id)){
				echo <<<A
<script>
	alert('操作错误');
	history.go(-1);
</script>
A;
die();
		}


		if($act == "update"){ //更改商品信息
				echo <<<A
<script>
	// window.open('/index.php/Admin/Goods/updateInfo/id/$gd_id','修改商品信息','width=750,height=800,top=100,left=200,resizable=yes');
	window.location.href = '/index.php/Admin/Goods/updateInfo/id/$gd_id';    
</script>
A;


		}else if($act == "delete"){  //删除商品
            $goods = D("goods");
            $good_id = $_GET['gd_id'];
            $goods -> where("gd_id=$good_id") -> delete();
            echo "删除成功";
            U('/index.php/Admin/Goods/goodList');
		}
	}

	function updateInfo(){
		R('Index/isLogin');
		if(!I('GET.id')){
			die("操作错误");
		}else{
			$gd_id = I('GET.id');
		}
		
		$goods = D('goods');
		$info = $goods -> where("gd_id = $gd_id") -> find();
		

		$this -> assign("info",$info);
		$this -> display();
	}

	//更新商品信息
	function update(){
		R('Index/isLogin');
		if(!I('POST.gd_id')){
			echo "操作错误";
			die();
		}

		$goods = D("goods");
		$date['gd_id'] = I('POST.gd_id');
		$date['gd_name'] = I('POST.gd_name');
		$date['gd_type'] = I('POST.gd_type');
		$date['gd_price_self'] = I('POST.gd_self_price');
		$date['gd_price_other'] = I('POST.gd_other_price');
		$date['gd_num'] = I('POST.gd_num');
		$date['gd_weight'] = I('POST.gd_weight');
		$date['gd_from'] = I('POST.gd_from');

		



		$error = $_FILES['gd_img']['error']; //判断商品图片是否改变
		if($error != 0 ){ //没有更改商品图片
			 $goods -> save($date);
				echo <<<A
<script>
	alert('修改成功');
	window.close();
</script>
A;
		}else{ //更改了商品图片

			$date['gd_img'] = "/Public/images/good_img/".$_FILES['gd_img']['name'];
			$goods -> save($date);

			//上传图片
			$config = array(
					'maxsize' => 3145728,
                    'rootPath' => './Public/',
                    'savePath' => 'images/good_img/',
					'exts' => array('jpg','png','jpeg','gif'),
					'autoSub' => false,
					'saveName' => '',
					);
			$upload = new\Think\Upload($config);
			$info = $upload -> uploadOne($_FILES['gd_img']);
							echo <<<A
<script>
	alert('修改成功');
	window.close();
</script>
A;

		}
}


		//查看所有订单
	function selectAllOrder(){
		R('Index/isLogin');
		$Orders = D("orders");
		//$info = $Order -> getField('od_id,od_price,od_time');

		$count = $Orders ->where("od_id>0")-> count();
		$page = new\Think\Page($count,5); //定义分页类
		$show = $page -> show();
		$result = $Orders -> order('od_id') -> limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show); //输出分页数据
		$this -> assign('info',$result);


		//$this -> assign("info",$info);
		$this -> display();
	}

	//对订单信息的操作
	function orderInfo(){
		R('Index/isLogin');

		$act = I('GET.act');
		$od_id = $_GET['id'];
		$orders = D("orders");

		if($act == "delete"){ //删除订单信息
			$orders->where(['od_id'=>$od_id])->delete();
			echo "<script>";
				echo "alert('删除成功!');";
			echo "</script>";
			die();
			
		}else if($act == "select"){ //查看订单信息

			$address = D("address"); //获取收货地址的信息
			$good = D("goods"); //获取商品名称
			$info = $orders -> where("od_id = $od_id") -> find();

			
			
				
				//拆分商品购买数量
				$info['od_buy_count'] = explode('|',$info['od_buy_count']);

				$info['num'] = count($info['od_buy_count']);


				//获取收货地址信息
				$id = $info['od_addr_id'];
			    $info['od_addr_id'] = $address -> where("ar_id = $id") -> find();

			    //获取商品名称
			    $info['od_good_id'] = explode('|',$info['od_good_id']);
			    $gd_id = $info['od_good_id'];
			    
				    for($j=0;$j<count($gd_id);$j++){
						$info['od_good_id'][$j] = $good -> where("gd_id = $gd_id[$j]") -> getField('gd_name');
						
					}
				

			
			$this -> assign("info",$info);
			$this -> display();
		}


	}
 


	//查看所有公告
	function selectAllNotice(){
		R('Index/isLogin');
		$notice = D("notice");

		$count = $notice ->where("nc_id>0")-> count();
		$page = new\Think\Page($count,5); //定义分页类
		$show = $page -> show();
		$result = $notice -> order('nc_id') -> limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show); //输出分页数据
		$this -> assign('info',$result);
		$this -> display();
	}


	//对公告信息的操作
	function noticeInfo(){
		R('Index/isLogin');

		$act = I('GET.act');
		$nc_id = $_GET['nc_id'];
		$notice = D("notice");

		if($act == "delete"){ //删除公告信息
			$notice->where("nc_id = $nc_id")->delete();
			echo "<script>";
				echo "alert('删除成功!');";
			echo "</script>";
			die();
			
		}else if($act == "select"){ //查看公告信息
			$info = $notice -> where("nc_id = $nc_id") -> find();
			$this -> assign("info",$info);
			$this -> display();
		}


	}


	//添加公告
	function addNotice(){
		R('Index/isLogin');

		if(I('POST.')){
			$ad_id = $_SESSION['admin']['ad_id'];
			$nc_title = I('POST.nc_title');
			$nc_info = I('POST.nc_info');
			$sql = "insert into notice values(null,$ad_id,'$nc_title','$nc_info',now());";
			$notice = D('notice');
			$notice -> execute($sql);
			echo <<<A
<script>
	alert('添加成功');
	history.go(-2);
</script>
A;

		}

		$this -> display();
	}




}