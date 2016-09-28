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
        return $this->fetch();
    }

    public function update() {
        if ( request()->isPost() ) {
            $model = model('common/config');
            if ( $model->saveConfig(request()->post()) ) {
                return $this->success("更新配置成功");
            }else {
                return $this->success("更新配置失败");
            }
        }
    }
}