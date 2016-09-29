<?php
namespace app\admin\controller;

use think\Controller;
use app\common\util\Tree;

class Category extends Controller
{
    protected $category = null;//数据库实例
    protected $tab      = null;//页面选择

    public function _initialize() {
        $this->category = db('category');
        $this->tab      = input('param.tab');
        $this->assign("tab",$this->tab);
    }

    public function index() {
        if ( request()->isPost() ) {
            $id = $this->category->strict(false)->insertGetId(input("param."));
            if ( $id )  {
                return $this->success("添加分类成功",url('','tab='.$this->tab));
            }else {
                return $this->success("添加分类失败",url('','tab='.$this->tab));
            }
        } else {
            $arr    = $this->category->select();
            $newArr = array();
            foreach ($arr as $k => $v) {
                $newArr[$v['id']] = $v;
                $newArr[$v['id']]['disabled'] = $v['haschild'] != 1 ?   'disabled' : '';
                $newArr[$v['id']]['hidden'] = $v['haschild'] != 1 ?   'class="hidden"' : '';
                $newArr[$v['id']]['nbsp'] = $v['haschild'] != 1 ?   '&nbsp;&nbsp;&nbsp;' : '';
            }
            unset($arr);

//            dump($newArr);exit;

            $opt        = "<option value=\$id \$selected \$disabled >\$spacer\$catname</option>";
            $tree       = new Tree();
            $tree->icon = array('&nbsp;&nbsp;&nbsp;│', '&nbsp;&nbsp;&nbsp;├', '&nbsp;&nbsp;&nbsp;└');
            $tree->nbsp = "&nbsp;&nbsp;&nbsp;";
            $tree->arr  = $newArr;
            $opts       = $tree->get_tree(0,$opt);

//            dump($opts);exit;

            $tr         = "<tr>
                                <td>
                                    <input class='form-constrol col-sm-12' type='text' name='listorder' value='\$listorder'>
                                </td>
                                <td>\$id</td>
                                <td>\$catname</td>
                                <td>\$modelid</td>
                                <td>
                                    <a href='http://baidu.com' title='添加分类' \$hidden><i class='fa fa-plus text-navy'></i></a>\$nbsp &nbsp;&nbsp;&nbsp;
                                    <a href='http://baidu.com' title='编辑分类'><i class='fa fa-pencil text-navy'></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href='http://baidu.com' title='删除分类'><i class='fa fa-trash text-navy'></i></a>
                                </td>
                           </tr>";
            $tree->ret  = '';
            $trs        = $tree->get_tree(0,$tr);

            $this->assign('opts',$opts);
            $this->assign('trs',$trs);
            return $this->fetch();
        }
    }
}