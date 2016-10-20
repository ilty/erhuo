<?php
namespace app\controllers;
use app\models\Login;
use app\models\Users;
use app\models\Goods;
use app\models\Usermodel;
use framework\core\Config;
use framework\core\Log;
session_start();
class IndexController extends \Controller{
    //查找所有商品
    public function index(){
        //实例化模型
        $model = new Usermodel();
        $data = $model->lists();
        foreach ($data as $k => $v) {
            $data[$k]['goods_pic'] = explode(',', $v['goods_pic']);
        }
        //print_r($data);die;
        $this->render('index',['data'=>$data]);
    }
    //查询单个商品
    public function alone(){
        $goods_id = $_GET['goods_id'];
        $model = new Usermodel();
        $data = $model->alone($goods_id);
        foreach ($data as $k => $v) {
            $data[$k]['goods_pic'] = explode(',', $v['goods_pic']);
        }
        // print_r($data);die;
        $this->render('alone',['data'=>$data]);
    }

}
?>