<?php
namespace app\api\controller;

use think\controller\Rest;

class Error extends Rest{
    protected $restTypeList      = 'json';
    protected $restDefaultType   = 'json';
    protected $restOutputType    = [ // REST允许输出的资源类型列表
        'json' => 'application/json',
    ];
    protected $otherResource    = ['plc','user','config'];
    protected $resource_name;

    public function _empty($name){
        $table = $this->resource_name = strtolower(request()->controller());
        if ( in_array($table,$this->otherResource) ) {
           return $this->$table();
        }else {
            $sql = "show tables like '".config('database.prefix').$table."'";
            if ( db()->query($sql) ) {
                if ( $name == 'list' ) {
                    $data = db($table)->select();
                    return response(['code'=>'201','message'=>$data],'201',[],$this->restDefaultType);
                } else {
                    $result = true;
                    $code = 404;
                    switch ( $this->method ) {
                        case "get":
                            $id = $name;
                            $data = db($table)->find($id);
                            if ( !empty($data) ) {
                                $code = 201;
                            } else {
                                $result = false;
                            }
                            break;
                        default :

                            break;
                    }
                    if ( $result ) {
                        return $this->success($data,$code);
                    } else {
                        return $this->error($data,$code);
                    }
                }
            } else {
                $data = ['code'=>'404','message'=>'请求资源'.$this->resource_name.'不存在'];
                return response($data,'404',[],$this->restDefaultType);
            }
        }
    }

    public function user() {
        $result = true;
        $code = 404;
        $data = '';
        //定义自动验证模型
        $validate = validate('user');
        //实例化user模型
        $model = model("user");
        switch ( $this->method ) {
            case "get":
                $map = [
                    'username' => input('get.username'),
//                    'password' => input('get.password'),
                ];
                //自动验证
                if ( !$validate->check($map) ) {
                    $data = $validate->getError();
                    $result = false;
                } else {
                    $data = $model->where($map)->field('id,username,email')->find();
                    if ( !empty($data) ) {
                        $code = 200;
                    } else {
                        $result = false;
                    }
                }
                exit;
                break;
            case "post" :
                $map = [
                    'username'      => input('post.username'),
                    'password'      => input('post.password'),
                    'repassword'    => input('post.repassword'),
                    'check'    => input('post.check'),
                ];
                //自动验证
                if ( !$validate->check($map) ) {
                    $data = $validate->getError();
                    $result = false;
                } else {
                    //判断用户名是否存在
                    if ( $model->where(['username' => $map['username']])->find() ) {
                        $data = [
                            'code'=> '6',
                            'msg' => '用户名已存在',
                        ];
                        $result = false;
                    } else {
                        $post = $model->save($data);
                        if ( $post ){

                        }else {

                        }
                    }
                }
                break;
            default :

                break;
        }
        if ( $result ) {
            return $this->success($data,$code);
        } else {
            return $this->error($data,$code);
        }
    }

    public function success($data,$code){
        $response = [
            'code' => $code,
            'data' => $data,
            'info' => $this->info().'资源成功！',
        ];
        return response($response,$code,[],$this->restDefaultType);
    }
    public function error($data,$code){
        $response = [
            'code' => $code,
            'data' => $data,
            'info' => $this->info().'资源失败！',
        ];
        return response($response,$code,[],$this->restDefaultType);
    }
    public function info(){
        $method = [
            'get'    => '获取',
            'post'   => '更新',
            'delete' => '删除',
            'put'    => '添加'
        ];
        return isset( $method[$this->method] ) ? $method[$this->method] : $this->method;
    }
}