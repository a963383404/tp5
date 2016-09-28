<?php
namespace app\common\model;

use think\Model;

class Config extends Model
{
    public function getField() {
        $data = $this->field(['varname','value'])->select();
        $arr  = array();
        foreach ( $data as $k => $v ) {
            $arr[$v['varname']] = $v['value'];
        }
        return $arr;
    }

    public function saveConfig($data){
        //判断$data是否为空，是否是数组
        if ( !empty($data) && is_array($data) ) {
//            dump($data);exit;
            foreach ( $data as $k => $v ) {
                $arr = array( 'varname' => $k );
                if ( $this->where($arr)->find() ) {
                    $this->where($arr)->update(['value'=>$v]);
                }else{
                    continue;
                }
            }
        }else {
            return false;
        }
        return true;
        //查看表中是否存在varname的值

    }
}