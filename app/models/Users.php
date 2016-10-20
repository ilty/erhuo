<?php
namespace app\models;
use framework\core\Model;
class Users extends Model{
    public function users($table,$user_id){//用户信息
        $ret = $this->select($table,'*',$user_id);
        return $ret;
    }
    public function user_id($table,$user_name){//用户id
        $ret = $this->select($table,'user_id',$user_name);
        return $ret;
    }
    public function useradd($table,$arr){//用户注册
        $ret = $this->insert($table,$arr);
        return $ret;
    }
    public function balanceadd($table,$balance){//用户注册完添加钱包
        $ret = $this->insert($table,$balance);
        return $ret;
    }
    public function mywallet($table,$user_id){//用户余额
        $ret = $this->select($table,'balance',$user_id);
        return $ret;
    }
    public function mywalletti($table,$balance,$user_id){//提现余额
        $ret = $this->update($table,$balance,$user_id);
        return $ret;
    }
    public function money_log($table,$arr){//提现余额日志
        $ret = $this->insert($table,$arr);
        return $ret;
    }
    public function myrelease($table,$user_name){//用户发布的商品
        return $ret = $this->select($table,'*',$user_name);
    }
    public function updateusernick($table,$user_id,$nickname){//修改用户的昵称
        $ret = $this->update($table,$nickname,$user_id);
        return $ret;
    }
}