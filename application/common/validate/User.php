<?php
namespace app\common\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username'   =>  'require',
        'password'   =>  'require',
        'repassword' =>  'require|confirm:password',
        'check'      =>  'require',
    ];

    protected $message = [
        'username.require'      => ['code'=>'1','msg'=>'用户名不能为空'],
        'password.require'      => ['code'=>'2','msg'=>'密码不能为空'],
        'repassword.require'    => ['code'=>'3','msg'=>'确认密码不能为空'],
        'repassword.confirm'    => ['code'=>'4','msg'=>'两次密码输入不一致'],
        'check.require'         => ['code'=>'5','msg'=>'请勾“选我同意注册协议”'],
    ];


}