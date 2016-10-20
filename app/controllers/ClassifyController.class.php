<?php
namespace app\controllers;
use framework\core\Model;
use app\models\Message;
//为了防止类名与方法名重复 我们在类名 后面+Ctrl
class ClassifyController extends \Controller
{
    //所有分类
    public function all_class(){
        //实例化模型
        $model = new Goods_type();
        $data = $model->lists();
        //print_r($data);die;
        $this->render('all_class',['data'=>$data]);
    }
    //单个分类下的商品
    function alone_class(){
        $id = $_GET['id'];
        //实例化模型
        $model = new Goods_type();
        $data = $model->alone_class($id);
        foreach ($data as $k => $v) {
            $data[$k]['goods_pic'] = explode(',', $v['goods_pic']);
        }
        // dump($data);die;
        $this->assign('data',$data);
        $this->display('class_goods.html');
    }
}