<?php
namespace app\controllers;
use app\models\Login;
use framework\core\Config;
use framework\core\Log;
use app\models\School;
session_start();
header("content-type:text/html;charset=utf-8");
class LoginController extends \Controller{

    public function login(){//登陆页面
        $this->render('login');
    }
    public function logindo(){//登陆方法
        $jname = $_POST['username'];
        if(!$jname){
            echo "<script>alert('用户名不存在');</script>";
            header("Location:index.php?c=Login&a=login");die;
        }
        $name =array("user_name"=> $jname);
        $pwd = $_POST['password'];
        $model = new Login();
        $arr = $model->losel('users',$name);
        //print_r($arr);die;
        if($pwd == $arr[0]['password']){
            //echo 'ok';die;
            $_SESSION['user_id'] = $arr[0]['user_id'];//在session中存入用户id
            $_SESSION['user_name'] = $arr[0]['user_name'];
            //echo $_SESSION['user_id'];die;
            echo '{"status":"success"}';die;
            //header("Location:index.php?c=User&a=mymain");
        }else{
            echo '{"status":"fail"}';die;
            //echo "<script>alert('用户名或密码错误');</script>";
            //header("Location:index.php?c=Login&a=login");
        }
    }
}
?>