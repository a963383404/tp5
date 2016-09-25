<?php
namespace app\api\controller;

use think\controller\Rest;

class Error extends Rest{
    protected $restTypeList      = 'json';
    protected $restDefaultType   = 'json';
    protected $restOutputType    = [ // REST允许输出的资源类型列表
        'json' => 'application/json',
    ];
    protected $otherResource    = ['plc','config'];
    protected $resource_name;

    public function _empty($name){
        $table = $this->resource_name = strtolower(request()->controller());
        if ( in_array($table,$this->otherResource) ) {

        }else {
            $sql = "show tables like '".config('database.prefix').$table."'";
            if ( db()->query($sql) ) {
                if ( $name == 'list' ) {
                    $data = db($table)->select();
                    return response(['code'=>'201','message'=>$data],'201',[],$this->restDefaultType);
                }
            } else {
                $data = ['code'=>'404','message'=>'请求资源'.$this->resource_name.'不存在'];
                return response($data,'404',[],$this->restDefaultType);
            }
        }
    }
}