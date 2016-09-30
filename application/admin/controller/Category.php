<?php
namespace app\admin\controller;

use think\Controller;
use app\common\util\Tree;

class Category extends Controller
{
    protected $category = null;//数据库实例
    protected $tab      = null;//页面选择
    protected $optSel   = null;//设置下拉框选中项
    protected $catArr   = null;//所要更新的分类数据

    public function _initialize() {
        $this->category = db('category');
        $this->tab      = input('param.tab');
        $editor         = 0;
        if ( $id = input('param.id') ) {
            $this->optSel = $id;
            if ( input('param.operate') == 'editor' ) {
                $this->catArr = $this->category->where(['id'=>$id])->find();
                $editor       = 1;
            }
        }
        $this->assign("catArr",$this->catArr);
        $this->assign("editor",$editor);
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
                $newArr[$v['id']]               = $v;
                $newArr[$v['id']]['href']       = url("index","id={$v['id']}&tab=2");
                $newArr[$v['id']]['delHref']       = url("delete","id={$v['id']}");
                $newArr[$v['id']]['disabled']   = $v['haschild'] != 1 ?   'disabled' : '';
                $newArr[$v['id']]['hidden']     = $v['haschild'] != 1 ?   'class="hidden"' : '';
                $newArr[$v['id']]['nbsp']       = $v['haschild'] != 1 ?   '&nbsp;&nbsp;&nbsp;' : '';
            }
            unset($arr);

            $opt        = "<option value=\$id \$selected \$disabled >\$spacer\$catname</option>";
            $tree       = new Tree();
            $tree->icon = array('&nbsp;&nbsp;&nbsp;│', '&nbsp;&nbsp;&nbsp;├', '&nbsp;&nbsp;&nbsp;└');
            $tree->nbsp = "&nbsp;&nbsp;&nbsp;";
            $tree->arr  = $newArr;
            $opts       = $tree->get_tree(0,$opt,$this->optSel);

            $tr         = "<tr>
                                <td>
                                    <input class='form-constrol col-sm-12' type='text' name='listorder' value='\$listorder'>
                                </td>
                                <td>\$id</td>
                                <td style='text-align:left'>\$spacer\$catname</td>
                                <td>\$modelid</td>
                                <td>
                                    <a href='\$href' title='添加分类' \$hidden><i class='fa fa-plus text-navy'></i></a>\$nbsp &nbsp;&nbsp;&nbsp;
                                    <a href='\$href/operate/editor' title='编辑分类'><i class='fa fa-pencil text-navy'></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href='\$delHref' title='删除分类'><i class='fa fa-trash text-navy'></i></a>
                                    <input type='hidden' value='\$catname'>
                                </td>
                           </tr>";
            $tree->ret  = '';
            $trs        = $tree->get_tree(0,$tr);

            $this->assign('opts',$opts);
            $this->assign('trs',$trs);
            return $this->fetch();
        }
    }

    public function update() {

    }

    public function delete(){
        if($this->category->where(['id'=>input('param.id')])->delete()){
            return $this->success("删除成功",url("index"),['code'=>200]);
        }else{
            return $this->success("删除失败",url("index"));
        }

    }
}