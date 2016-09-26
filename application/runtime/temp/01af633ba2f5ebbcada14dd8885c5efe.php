<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/var/www/html/public/../application/admin/view/user/register.html";i:1474901737;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>雪狐ThinkPHP5内容管理系统 - 注册</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="__STATIC__/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__STATIC__/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">StudyFoxCMS</h1>

        </div>
        <h3>欢迎注册雪狐CMS</h3>
        <p>创建一个新账户</p>
        <form class="m-t" role="form" action="<?php echo url('api/user/'); ?>" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="请输入用户名" >
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="请输入密码" >
            </div>
            <div class="form-group">
                <input type="password" name="repassword" class="form-control" placeholder="请再次输入密码" >
            </div>
            <div class="form-group text-left">
                <div class="checkbox i-checks">
                    <label class="no-padding">
                        <input type="checkbox" name="check" value="1"><i></i> 我同意注册协议</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">注 册</button>

            <p class="text-muted text-center"><small>已经有账户了？</small><a href="<?php echo url('login'); ?>">点此登录</a>
            </p>

        </form>
    </div>
</div>
<script src="__STATIC__/js/jquery.min.js?v=2.1.4"></script>
<script src="__STATIC__/js/bootstrap.min.js?v=3.3.6"></script>
<script src="__STATIC__/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>
