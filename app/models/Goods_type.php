<?php
namespace app\models;
use framework\core\Model;
class Goods_type extends Model{
    //表名
    public $table = "goods_type";
    public $tabletwo = "goods";
    //所有分类
    function lists(){
        $data = $this->select($this->table,'*');
        return $data;
    }
    //单个分类下的商品
    function alone_class($id){
        $class_info = $this->select($this->table,'*',["id[=]" => $id]);
        $data = $this->select($this->tabletwo,'*',["goods_type[=]" => $class_info[0]['goods_type']]);
        // dump($data);die;
        return $data;
    }
}