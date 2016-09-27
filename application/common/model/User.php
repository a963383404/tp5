<?php
namespace app\common\model;

use think\Model;

class User extends Model{
    protected $auto = [/*'password',*/'last_login_time','last_login_ip'];
    protected $insert = ['create_time'];
    protected $update = [];

    /*protected function setPasswordAttr($value)
    {
        return md5($value);
    }*/

    protected function setLastLoginIpAttr()
    {
        return request()->ip();
    }
    protected function setLastLoginTimeAttr()
    {
        return date("Y-m-d H:i:s",time());
    }
    protected function setCreateTimeAttr()
    {
        return date("Y-m-d H:i:s",time());
    }
}