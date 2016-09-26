<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"/var/www/vcmycloud/public/../template/default/index/index.html";i:1474867012;}*/ ?>
<!doctype html>
<!--[if lte IE 6 ]> <html class="ie ie6 lte_ie7 lte_ie8 lte_ie9" lang="zh-CN"> <![endif]-->
<!--[if IE 7 ]> <html class="ie ie7 lte_ie7 lte_ie8 lte_ie9" lang="zh-CN"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8 lte_ie8 lte_ie9" lang="zh-CN"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9 lte_ie9" lang="zh-CN"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="zh-CN"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <!--GCF 谷歌内嵌浏览器框架-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>StudyFoxCMS——雪狐ThinkPHP5内容管理系统</title>

    <!--<link rel="stylesheet" href="__BOWER__/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="__PUBLIC__/theme/default/css/bootstrap.css">
    <link rel="stylesheet" href="__PUBLIC__/theme/default/css/common.css">
    <link rel="stylesheet" href="__BOWER__/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/theme/default/css/main.css">
    <link rel="stylesheet" href="__PUBLIC__/theme/default/css/style.css">
    <link rel="stylesheet" href="__PUBLIC__/theme/default/css/index.css">
    <link rel="stylesheet" href="__BOWER__/Swiper/dist/css/swiper.min.css">

    <!--[if lt IE 9 ]>
    <script src="__PUBLIC__/theme/default/js/html5shiv.js"></script>
    <script src="__PUBLIC__/theme/default/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<header class="header">
    <div class="container">

        <div class="navbar-header pull-left">
            <a href="/" class="navbar-brand"><img src="__PUBLIC__/theme/default/images/logo.png" alt="雪狐CMS" class="img-responsive"></a>
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <nav class="collapse navbar-collapse pull-left">
            <ul class="nav navbar-nav topmenu">
                <li class="visible-xs"><a href="/"><i class="fa fa-search rm"></i> 搜索</a></li>
                <li><a href="/">首页</a></li>
                <li class="dropdown"><a href="/">主菜单一 <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/">子项一</a></li>
                        <li><a href="/">子项二</a></li>
                    </ul>
                </li>
                <li><a href="/">主菜单二</a></li>
                <li class="dropdown"><a href="/">主菜单三 <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/">子项一</a></li>
                        <li><a href="/">子项二</a></li>
                        <li><a href="/">子项三</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="pull-right user-nav clearfix">
            <ul class="nav nav-login">
                <li><a href="<?php echo url('admin/User/login'); ?>" class="color-gray-one">登录</a></li>
                <li><a href="<?php echo url('admin/User/register'); ?>">注册</a></li>
            </ul>

            <form action="/" class="navbar-form pull-right hz-search hidden-xs act" role="search">
                <div class="form-group">
                    <div id="search-left" class="pull-left search-left">
                        <div class="search-type pull-left"><div class="choose"> 搜索 </div></div>
                        <input class="form-control js-search" name="q" placeholder="请输入内容" autocomplete="off">
                    </div>
                    <button class="button fa fa-search" type="button"></button>
                </div>
            </form>
        </div>

    </div>
</header>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="/"><img src="__PUBLIC__/theme/default/images/slide.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="/"><img src="__PUBLIC__/theme/default/images/slide.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="/"><img src="__PUBLIC__/theme/default/images/slide.jpg" alt=""></a></div>
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>

    <!-- 如果需要导航按钮 -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>

<div class="hzindex-course index-sec">
    <div class="container">
        <h2><strong>最新资讯</strong></h2>
        <div class="index-course-list course">
            <div class="row clearfix act" id="course-commend">
                <div class="col-sm-3 col-xs-12">

                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">

                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">

                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">

                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                    <div class="course-item">
                        <div class="course-img">
                            <a href="/"><img src="__PUBLIC__/theme/default/images/cms.jpg" alt=""></a>
                        </div>
                        <div class="course-info">
                            <div class="title"><a href="/">雪狐Thinkphp5内容管理系统</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="/"><img src="__PUBLIC__/theme/default/images/foot-logo.png" alt=""></a>
            </div>
            <div class="col-md-4 about">
                <span><a href="/">关于我们</a></span>|
                <span><a href="/">加入我们</a></span>|
                <span><a href="/">合作申请</a></span>|
                <span><a href="/">意见反馈</a></span><br>
                <a href="http://www.miibeian.gov.cn" class="con" target="_blank">备案号：XXX</a>
            </div>
            <div class="col-md-4">
                联系我们：QQ 2608818666
            </div>
        </div>
    </div>
</footer>

<div class="friendlinks">
    <div class="container">
        <div class="content">
            <font>友情链接：</font>
            <a href="/" class="white" target="_blank">测试链接</a>
            <span>|</span>
            <a href="/" class="white" target="_blank">测试链接</a>
            <span>|</span>
            <a href="/" class="white" target="_blank">测试链接</a>
            <span>|</span>
            <a href="/" class="white" target="_blank">测试链接</a>
            <span>|</span>
            <a href="/" class="white" target="_blank">测试链接</a>
            <span>|</span>
            <a href="/" class="white" target="_blank">测试链接</a>
            <span>|</span>
            <a href="/" class="white" target="_blank">测试链接</a>
            <br>
        </div>
        Powered by <a href="http://studyfox.cn" target="_blank">StudyFox.cn</a>
        ©2016 <a href="http://studyfox.cn" target="_blank" class="mlm">雪狐网</a>
    </div>
</div>


<script src="__BOWER__/jquery/dist/jquery.min.js"></script>
<script src="__BOWER__/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="__BOWER__/Swiper/dist/js/swiper.jquery.min.js"></script>
<script src="__BOWER__/jquery-goup/jquery.goup.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.goup({
            trigger: 100,
            bottomOffset: 10,
            locationOffset: 10,
            title: '',
            titleAsText: false,
            containerColor : '#e7faf4',
            arrowColor : '#15c288',
        });
    });
</script>


<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        autoplay:3000,

        // 如果需要分页器
        pagination: '.swiper-pagination',
        paginationClickable:true,

        // 如果需要前进后退按钮
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    })
</script>
</body>
</html>