<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/var/www/html/public/../application/admin/view/category/index.html";i:1475303682;}*/ ?>
<html><!-- Mirrored from www.zi-han.net/theme/hplus/tabs_panels.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:53 GMT --><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 选项卡 &amp; 面板</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="__STATIC__/img/favicon.ico">
    <link href="__STATIC__/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="__STATIC__/css/admin.css" rel="stylesheet">
    <link href="__STATIC__/css/plugins/iCheck/custom.css" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-sm-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="<?php if($tab != 2): ?>active<?php endif; ?>"><a data-toggle="tab" href="#tab-1" aria-expanded="<?php if($tab != 2): ?>true<?php else: ?>false<?php endif; ?>">分类列表</a>
                    </li>
                    <li class="<?php if($tab == 2): ?>active<?php endif; ?>"><a data-toggle="tab" href="#tab-2" aria-expanded="<?php if($tab == 2): ?>true<?php else: ?>false<?php endif; ?>">模型管理</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane <?php if($tab != 2): ?>active<?php endif; ?>" >
                        <div class="panel-body">
                            <div class="ibox-content">
                                <form method="post" class="form-horizontal" action="<?php echo url(''); ?>">
                                    <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th style="width: 10%;">排序</th>
                                                <th style="width: 10%;">分类ID</th>
                                                <th style="width: 35%;">分类名称</th>
                                                <th style="width: 20%;">所属模型</th>
                                                <th style="width: 25%;">操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php echo $trs; ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane <?php if($tab == 2): ?>active<?php endif; ?>">
                        <div class="panel-body">
                            <form method="post" class="form-horizontal" action="
                            <?php if($operate == 'editor'): ?><?php echo url('update','id='.$catArr['id']); else: ?><?php echo url('index'); endif; ?>
                            ">
                                <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
                                <div class="hr-line-dashed"></div>
                                <input type="hidden" name="tab" value="<?php if($operate == 'editor' or $operate == 'add'): ?>1<?php else: ?>2<?php endif; ?>">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">分类名称</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="catname" value="<?php echo $catArr['catname']; ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">所属模型</label>

                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="modelid">
                                            <option value="0" >请选择模型</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">上级分类</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="parentid">
                                            <option value="0" >≡ 作为顶级分类 ≡</option>
                                            <?php echo $opts; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">是否终级分类</label>

                                    <div class="col-sm-10">
                                        <div class="checkbox i-checks">
                                            <label style="padding-left: 0px;">
                                                <input type="checkbox" name='haschild' value="">
                                                <i></i> 终极分类（终极分类才可以添加内容）
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">分类目录</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="catdir" value="<?php echo $catArr['catdir']; ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">指定分类地址</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="seturl" value="<?php echo $catArr['seturl']; ?>">
                                        <span class="help-block m-b-none">留空按默认地址访问</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">是否首页菜单显</label>

                                    <div class="col-sm-10">
                                        <div class="radio i-checks radio-inline">
                                            <label>
                                                <input type="radio" value="0" name="ismenu" <?php if($catArr['ismenu'] == 0): ?>checked<?php endif; ?>> <i></i> 否</label>
                                        </div>
                                        <div class="radio i-checks radio-inline">
                                            <label>
                                                <input type="radio" value="1" name="ismenu" <?php if($catArr['ismenu'] == 1): ?>checked<?php endif; ?>> <i></i> 是</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">角色权限</label>
                                    <div class="col-sm-10">
                                        预留
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">显示排序</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="listorder" value="<?php echo $catArr['listorder']; ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">
                                            <?php if($operate == 'editor'): ?>更新<?php else: ?>提交<?php endif; ?>
                                        </button>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script src="__STATIC__/js/jquery.min.js?v=2.1.4"></script>
<script src="__STATIC__/js/bootstrap.min.js?v=3.3.6"></script>
<script src="__STATIC__/js/content.min.js?v=1.0.0"></script>
<script src="__STATIC__/js/plugins/iCheck/icheck.min.js"></script>
<script src="__BOWER__/layer/layer.js"></script>
<script>
    $(document).ready(function () {
        $(".i-checks").iCheck({checkboxClass: "icheckbox_square-green", radioClass: "iradio_square-green",});
        $(".i-checks>label").on("click",function(){
            var div = $(this).children('div');
            if ( div.hasClass('checked') ) {
                var val = div.children(':input[type=checkbox]').attr('value','1');
            }else{
                var val = div.children(':input[type=checkbox]').attr('value','0');
            }
        });
        $(".iCheck-helper").on("click",function(){
            var div = $(this).parent('div');
            if ( div.hasClass('checked') ) {
                var val = div.children(':input[type=checkbox]').attr('value','1');
            }else{
                var val = div.children(':input[type=checkbox]').attr('value','0');
            }
        });
        $(".table .fa-trash").on("click",function(){
            var a               = $(this).parent('a'),
                href            =       a.attr('href')
                val             = a.next('input').val(),
                token_validity  = $('input[name=__token__]').val();
            var data            = {'__token__' : token_validity};
            var index = layer.open({
                    title   :   "删除提醒",
                    content :   '确定要删除分类“'+val+'”吗？（如果其包含子类，也会被一同删除！）',
                    btn     :   ['是','否'],
                    'yes'   :   function(index,layero){
                                    layer.close(index);
                                    $.get(href,data).success(function(result){
                                        if (result.data.code =202 ){
                                            var tr;
                                            var ids = result.data.ids;
                                            for ( var id in ids ){
                                                tr  = $("td[id="+ids[id]+"]").parent("tr");
                                                tr.remove();
                                            }
                                        }else if(result.data.code =202){

                                        }
                                    });
                                },
                });
            return false;
        })
    });
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>



<!-- Mirrored from www.zi-han.net/theme/hplus/tabs_panels.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:53 GMT -->

</body></html>