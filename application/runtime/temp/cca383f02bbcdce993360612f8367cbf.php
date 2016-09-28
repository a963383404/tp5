<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"/var/www/vcmycloud/public/../template/dispatch_jump.html";i:1475054444;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <script src="__STATIC__/js/jquery.min.js?v=2.1.4"></script>
    <script src="__BOWER__/layer/layer.js"></script>

</head>
<body>
<input type="hidden" id="code" value="<?php echo $code; ?>">
<input type="hidden" id="msg" value="<?php echo $msg; ?>">
<input type="hidden" id="wait" value="<?php echo $wait; ?>">
<input type="hidden" id="href" value="<?php echo $url; ?>">

<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait').value,
            href = document.getElementById('href').value,
            code = document.getElementById('code').value,
            msg = document.getElementById('msg').value;
        wait = wait*1000;
        var index = layer.open({
            title   :   "友情提醒",
            content :   msg,
            shade   : [0.8, '#f3f3f4'],
            time    : wait,
            end : function(){
                //do something
                location.href = href;
            },
        });
    })();
</script>
</body>
</html>
