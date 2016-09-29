<?php
namespace app\admin\controller;

use think\Controller;

class Config extends Controller
{
    protected $config = null;

    public function _initialize() {
        $this->config = model('common/config');
        $this->site   = $configlist   = $this->config->getField();
        $this->assign('site',$this->site);
    }

    public function index() {
        if ( request()->isPost() ) {
            $tab = input('post.tab');
            $model = model('common/config');
            if ( $model->saveConfig(request()->post()) ) {
                return $this->success("更新配置成功",url('','tab='.$tab));
            }else {
                return $this->success("更新配置失败",url('','tab='.$tab));
            }
        } else {
            $this->assign('tab',input('param.tab'));
            return $this->fetch();
        }
    }
}