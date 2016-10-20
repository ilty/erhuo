<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Model;
session_start();
class ReleaseController extends \Controller{
    public function index(){
        $model=new Model();
        $arr=$model->select('near','*');
        $ar=$model->select('goods_type','*');
//        print_r($ar);die;
        $this->render('index',['arr'=>$arr,'ar'=>$ar]);
    }
  //接值 添加入库
    public function add_ku(){
        $model=new Model();
        $user_name=$_SESSION['user_name'];
        $goods_name=$_POST['goods_name'];
        $goods_desc=$_POST['goods_desc'];
        $city=$_POST['city'];
        $goods_now=$_POST['goods_now'];
        $near_name=$_POST['near_name'];
        $goods_type=$_POST['goods_type'];

        $files=$_FILES['goods_pic'];
        $num=count($files['name']);
        $str="";
        for($i=0;$i<$num;$i++){
            $name=pathinfo($files['name'][$i]);
            if(!empty($name['extension'])){
                $name=uniqid().'.'.$name['extension'];   //重新设置名字
                $lin=$files['tmp_name'][$i];
                move_uploaded_file("$lin",ROOT_DIR.'/images/'.$name);
                $path=ROOT_DIR.'/images/'.$name;
                $ctrlfile = str_replace('/', '\\',$path);
                $str.=$ctrlfile.',';
                $img=substr($str,0,strlen($str)-1);
            }
        }
//print_r($img);die;
        $arr=$model->insert('goods',array(
            'goods_name'=>$goods_name,
            'goods_desc'=>$goods_desc,
            'goods_city'=>$city,
            'goods_now'=>$goods_now,
            'goods_pic'=>$img,
            'near_name'=>$near_name,
            'user_name'=>$user_name,
            'goods_type'=>$goods_type
        ));
        if($arr){
            header( "Location: index.php?c=login&a=log" );
        }
    }
}
