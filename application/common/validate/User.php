<?php
namespace app\common\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username'   =>  'require',
        'password'   =>  "require|checkPass:d41d8cd98f00b204e9800998ecf8427e",
        'repassword' =>  'require|checkRepass:d41d8cd98f00b204e9800998ecf8427e|confirm:password',
        'check'      =>  'require',
    ];

    protected $message = [
        'username.require'          => ['code'=>'202','msg'=>'用户名不能为空'],
        'password.require'          => ['code'=>'203','msg'=>'密码不能为空'],
        'repassword.require'        => ['code'=>'204','msg'=>'确认密码不能为空'],
        'repassword.confirm'        => ['code'=>'205','msg'=>'两次密码输入不一致'],
        'check.require'             => ['code'=>'206','msg'=>'请勾“选我同意注册协议”'],
    ];

    protected function checkPass($value,$rule,$data) {
        return $rule != $value ? true : ['code'=>'203','msg'=>'密码不能为空'];
    }
    protected function checkRepass($value,$rule,$data) {
        return $rule != $value ? true :  ['code'=>'204','msg'=>'确认密码不能为空'];
    }

}