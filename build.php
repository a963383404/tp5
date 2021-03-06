<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 生成应用公共文件
    '__file__' => ['common.php', 'config.php', 'database.php'],
    '__dir__'  => ['runtime'],

    // 定义index模块的自动生成 （按照实际定义的文件名生成）
    'index'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'model'],
        'controller' => ['Index'],
        'model'      => ['User', 'UserType'],
    ],
    // 定义index模块的自动生成 （按照实际定义的文件名生成）
    'admin'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'model','view'],
        'controller' => ['Index','User',"Config","Category"],
        'view'       => ['index/index','index/jump','user/register','user/login','config/index',"category/index"]
    ],
    // 定义index模块的自动生成 （按照实际定义的文件名生成）
    'api'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['controller'],
        'controller' => ['Error'],
    ],
    // 定义Common模块的自动生成 （按照实际定义的文件名生成）
    'common'     => [
        '__dir__'    => ['controller','model','validate'],
        'model' => ['User','Config'],
        'validate' => ['User'],
    ],
    // 其他更多的模块定义
];
