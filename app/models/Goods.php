<?php
namespace app\models;
use framework\core\Model;
class Goods extends Model{
    public function myrelease($table,$user_name){//用户发布的商品
        return $ret = $this->select($table,'*',$user_name);
    }
}