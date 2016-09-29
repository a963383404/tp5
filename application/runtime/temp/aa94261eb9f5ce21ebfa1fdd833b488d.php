<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/var/www/vcmycloud/public/../application/admin/view/config/index.html";i:1475118640;}*/ ?>
<html><!-- Mirrored from www.zi-han.net/theme/hplus/tabs_panels.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:53 GMT --><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 选项卡 &amp; 面板</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="__STATIC__/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="__STATIC__/css/plugins/iCheck/custom.css" rel="stylesheet">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-sm-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="<?php if($tab != 2): ?>active<?php endif; ?>"><a data-toggle="tab" href="#tab-1" aria-expanded="<?php if($tab != 2): ?>true<?php else: ?>false<?php endif; ?>"> 站点配置</a>
                    </li>
                    <li class="<?php if($tab == 2): ?>active<?php endif; ?>"><a data-toggle="tab" href="#tab-2" aria-expanded="<?php if($tab == 2): ?>true<?php else: ?>false<?php endif; ?>">附件配置</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane <?php if($tab != 2): ?>active<?php endif; ?>" >
                        <div class="panel-body">
                            <div class="ibox-content">
                                <form method="post" class="form-horizontal" action="<?php echo url(''); ?>">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">站点名称</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sitname" value="<?php echo $site['sitname']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">关键字</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sitkeywords" value="<?php echo $site['sitkeywords']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">描述</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sitinfo" value="<?php echo $site['sitinfo']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">验证码类型</label>
                                        <div class="col-sm-4">
                                            <select class="form-control m-b" name="checkcode_type">
                                                <option value="0" <?php if($site['checkcode_type'] === '0'): ?>selected<?php endif; ?>>字母、数字混合</option>
                                                <option value="1" <?php if($site['checkcode_type'] === '1'): ?>selected<?php endif; ?>>纯字母</option>
                                                <option value="2" <?php if($site['checkcode_type'] === '2'): ?>selected<?php endif; ?>>纯数字</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit">保存内容</button>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane <?php if($tab == 2): ?>active<?php endif; ?>">
                        <div class="panel-body">
                            <form method="post" class="form-horizontal" action="<?php echo url('index'); ?>">
                                <input type="hidden" name="tab" value="2">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文件大小限制</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="uploadfilemax" value="<?php echo $site['uploadfilemax']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文件类型</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="uploadfiletype" value="<?php echo $site['uploadfiletype']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">是否打水印</label>

                                    <div class="col-sm-10">
                                        <div class="radio i-checks radio-inline">
                                            <label>
                                                <input type="radio" value="0" name="watermark" <?php if($site['watermark'] == 0): ?>checked<?php endif; ?>> <i></i> 否</label>
                                        </div>
                                        <div class="radio i-checks radio-inline">
                                            <label>
                                                <input type="radio" value="1" name="watermark" <?php if($site['watermark'] == 1): ?>checked<?php endif; ?>> <i></i> 是</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">保存内容</button>
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
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>



<!-- Mirrored from www.zi-han.net/theme/hplus/tabs_panels.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:53 GMT -->

</body></html>