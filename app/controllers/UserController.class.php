<?php
namespace app\controllers;
use app\models\Login;
use app\models\Users;
use app\models\Goods;
use framework\core\Config;
use framework\core\Log;

session_start();
header("content-type:text/html;charset=utf-8");
class UserController extends \Controller{
    public function mymain(){//个人主页
        if(!isset($_SESSION['user_id'])){//检测用户是否登陆
            header("Location:index.php?c=Login&a=login");die;
        }else{
            $user_id = $_SESSION['user_id'];//用户id
            $user_id =array("user_id"=> $user_id);
            $model = new Users();
            $arr = $model->users('users',$user_id); //获取用户的信息
            $user_name = $_SESSION['user_name'];//用户name
            $user_name =array("user_name"=> $user_name);
            $Gmodel = new Goods();
            $myrelease = $Gmodel->select('goods','*',$user_name); //获取用户发布的商品
            $myreleases = count($myrelease);
            $this->render('main',['user'=>$arr[0],'myreleases'=>$myreleases]);
        }
    }
    public function register(){//新用户注册页面
        $this->render('register');
    }
    public function updateuserpic(){//修改头像
        //$this->render('register');
        echo '头像暂不支持修改';
    }
    public function updateuser_sex(){//修改收款码
        //$this->render('register');
        echo '收款码暂不支持修改';
    }
    public function registerdo(){//用户注册的方法 name:name,pwd:pwd,tel:tel,yzm:yzm}
        $useryzm=$_POST['yzm'];
        if(isset($_SESSION['yzm'])){
            $yzm=$_SESSION['yzm'];
        }
        $yzm=substr($yzm,-4);
        if($useryzm!=$yzm){
            echo 'yzmno';exit;
        }
        $arr=array(
            'user_name'=>$_POST['name'],
            'password'=>$_POST['pwd'],
            'tel'=>$_POST['tel']
        );
        $model = new Users();
        $aa = $model->useradd('users',$arr);
        if($aa != '0'){
            $user_name=array('user_name'=>$_POST['name']);
            $user_id = $model->user_id('users',$user_name);
            $balance=array('user_id'=>$user_id,'balance'=>0);
            $wallet=$model->balanceadd('balance',$balance);
            print_r($wallet);
        }
    }
    public function yzm(){//发送给用户验证码
        $tel=$_POST['tel'];
        $ma=rand(1000,9999);
        $time=date('H:i:s');
        $_SESSION['yzm']="$time.$tel.$ma";
        $yzm="http://api.k780.com:88/?app=sms.send&tempid=50831&param=code=$ma&phone=$tel&appkey=18791&sign=fa8509d106d00179b9a853cc6cb05684&format=json";
        $arr=file_get_contents($yzm);
        //$arr='{"success":"1","result":{"status":"OK","phone":"13021978295","qty":"1"}}';
        exit($arr);
    }
    public function loginout(){//用户退出
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header("Location:index.php?c=Login&a=login");die;
    }
    public function myreleases(){//获取用户发布的商品
        if(!isset($_SESSION['user_id'])){//检测用户是否登陆
            header("Location:index.php?c=Login&a=login");die;
        }else {
            $user_name = $_SESSION['user_name'];//用户name
            $user_name = array("user_name" => $user_name);
            $Gmodel = new Goods();
            $myrelease = $Gmodel->select('goods', '*', $user_name); //获取用户发布的商品
            print_r($myrelease);
            die;
        }
    }
    public function updateuser(){//完善用户的个人资料
        $user_id = $_SESSION['user_id'];//用户id
        $user_id =array("user_id"=> $user_id);
        $model = new Users();
        $arr = $model->users('users',$user_id);
        $this->render('updateuser',['name'=>$arr[0]]);
    }
    public function updateusernick(){//修改用户的昵称
        if(!isset($_SESSION['user_id'])){//检测用户是否登陆
            header("Location:index.php?c=Login&a=login");die;
        }else {
            $user_id = $_SESSION['user_id'];
            $user_id =array("user_id[=]"=> $user_id);
            //print_r($user_id);die;
            $nickname = $_POST['nickname'];
            $nickname =array("nickname"=> $nickname);
            $model = new Users();
            $arr = $model->updateusernick('users',$user_id,$nickname);
            print_r($arr);
        }
    }
    public function mywallet(){//用户钱包页面
        if(!isset($_SESSION['user_id'])){//检测用户是否登陆
            header("Location:index.php?c=Login&a=login");die;
        }else {
            $user_id = $_SESSION['user_id'];//用户id
            $user_id = array("user_id" => $user_id);
            $model = new Users();
            $user = $model->users('users',$user_id);
            $arr = $model->mywallet('balance', $user_id);
            if(empty($arr)){
                $balance=0;
            }else{
                $balance=$arr[0];
            }
            $_SESSION['balance']= $balance;//用户余额
            $this->render('mywallet', ['balance' => $balance,'user' => $user[0]]);
        }
    }
    public function recharge(){//充值的页面
        $this->render('recharge');
    }
    public function withdrawals(){//提现的页面
        if(isset($_SESSION['user_name'])){
            $name=$_SESSION['user_name'];
        }else{
            $name='';
        }
        if(isset($_SESSION['balance'])){
            $balance=$_SESSION['balance'];
        }else{
            $balance='';
        }
        $this->render('withdrawals',['name'=>$name,'balance'=>$balance]);
    }
    public function withdrawalsdo(){//用户发起提现
        $ti = $_POST['fa']; //接受用户发起的体现金额
        $user_id = $_SESSION['user_id'];
        $model = new Users();
        $user_balance=$_SESSION['balance'];
        $balance=$user_balance-$ti;
        $balance = array('balance'=>$balance);
        $user_id = array('user_id'=>$user_id);
        $tixian = $model->mywalletti('balance',$balance,$user_id);
        if($tixian==1){
            $time = date('Y-m-d H:i:s');
            $arr = array(
                'user_id'=>$user_id,
                'money'=>$ti,
                'type'=>'1',
                'time'=>$time
            );
            $tilog = $model->money_log('money_log',$arr);
            print_r($tilog);
        }

    }
}