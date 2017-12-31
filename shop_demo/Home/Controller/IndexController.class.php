<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{


    function index()
    {

        //实例化普通model对象
        //$user = new \Model\UserModel();

        //实例化父类Model对象
        //   $model = D(); //new Model()


        if ($_POST)
        {

            $user = D("user");
            $name = $_POST['name'];
            $psd = $_POST['pword'];
            //find()函数结果一个一维数组。当结果只有一条记录时，不需要使用select()
            $result = $user->where("user_name='$name' and user_password=md5($psd)")->find();
            if (!$result) {
                //如果用户不存在的话
                echo 0;
                die();
            } else {
                //如果用户存在
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['username'] = $result['user_name'];
                $_SESSION['isLogin'] = 1;
                echo 1;
                die();
            }

        }

        $good = D("goods");
        //疯狂购物品
        $arr1 = $good->limit(8)->order("gd_num")->select();
        //热卖物品
        $arr2 = $good->limit(8)->order("gd_click_num")->select();
        //推荐商品
        $arr3 = $good->limit(8)->select();
        //新上架商品
        $arr4 = $good->limit(8)->order("gd_date")->select();
        $this->assign("arr1", $arr1);
        $this->assign("arr2", $arr2);
        $this->assign("arr3", $arr3);
        $this->assign("arr4", $arr4);


        //公告信息(取最新的一条)
        $notice = D('notice');
        $noticeInfo = $notice->limit(1)->order('nc_time desc')->getField('nc_id,nc_title');
        $this->assign("notice", $noticeInfo);

        if (!session("username")) {
            $username = "<a href='#dialog' name='modal'>登录</a>";
        } else {
            $username = "您好," . session("username");//获取用户名
        }

        $this->assign("username", $username);
        $this->display();
    }


    function logout()
    {
        R('Index/isLogin');

        $name = $_SESSION['username'];
        $_SESSION = array();
        setcookie(session_name(), "", time() - 1, "/");
        echo <<<A
            <script>
                alert("用户{$name}已注销");
                window.location.href = 'index';
            </script>
A;

    }

    function isLogin()
    {
        $isLogin = session("isLogin");
        if (!$isLogin) {
            //如果没有登录。设置跳回上一级目录
            echo <<<A
        <script>
        alert("您还未登陆请先登录"); 
        history.go(-1);
        </script>
A;
            die();
        }

    }

    //公告列表
    function allNotice()
    {
        $notice = D('notice');
        $info = $notice->order("nc_time desc")->select();
        $this->assign('info', $info);
        $this->display();
    }


    //公告信息
    function notice()
    {
        $notice = D("notice");

        if (I('GET.nc_id')) {
            $id = I('GET.nc_id');
            $info = $notice->where("nc_id = $id")->find();
        } else {
            die('操作错误');
        }
        if (!session("username")) {
            $username = "<a href='#dialog' name='modal'>登录</a>";
        } else {
            $username = "您好," . session("username");//获取用户名
        }
        $this->assign("username", $username);
        $this->assign("info", $info);
        $this->display();

    }


}

