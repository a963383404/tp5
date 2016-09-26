<?php
namespace app\common\model;

use think\Model;

class User extends Model{
    protected $auto = ['password','last_login_time','last_login_ip'];
    protected $insert = ['create_time'];
    protected $update = [];

    protected function setPasswordAttr($value)
    {
        return md5($value);
    }

    protected function setLast_login_timeAttr()
    {
        return request()->ip();
    }
}