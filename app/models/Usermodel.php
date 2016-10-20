<?php
namespace app\models;
use framework\core\Model;
/*
模型
*/
class Usermodel extends Model{
    //表名
    public $table = "goods";
    public $tabletwo = "address";
    //查询
    public function lists(){
        $data = $this->select($this->table,'*',["goods_status[=]"=>'0']);
        // dump($data);die;
        // $model = new \core\lib\model();
        // $sql = "select * from user";
        // $model->query('set names utf8;');
        // $res = $model->query($sql);
        // $data = $res->fetchAll();
        return $data;
    }
    //查询单个商品信息
    function alone($goods_id){
        $data = $this->select($this->table,'*',["goods_id[=]" => $goods_id]);
        return $data;
    }
    //查询用户的默认收货地址
    function user_address($user_id){
        // $data = $this->select($this->tabletwo,'*',[["user_id[=]" => $user_id],["default[=]" => '1']]);
        // $data = $this->select($this->tabletwo,'*',array(
        //       "AND" => array(
        //           "user_id[=]" => $user_id,
        //           "default[=]" => '1',
        //       )
        //  	));
        $sql = "SELECT * FROM address AS ONE INNER JOIN users AS TWO WHERE ONE.user_id = TWO.user_id AND ONE.user_id=$user_id AND ONE.default=1";
        // echo $sql;die;
        $data = $this->query($sql)->fetchAll();
        // dump($data);die;
        return $data;
    }
    //查询用户余额及支付密码
    function user_balance($user_id){
        $data = $this->select('balance','*',["user_id[=]"=>$user_id]);
        return $data;
    }
}