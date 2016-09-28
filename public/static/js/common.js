$(function(){
    /**
     *TEST git PUSH
     * 知识点：
     *  document.getElementById('username'),//DOM对象
     *  $("#username")， //Juqery对象
     *  Jquery对象==》DOM对象：$("#username").get(0)
     *  DOM对象==》Jquery对象:juqery(document.getElementById('username'))
     */
    $("#registerBtn").on("click",function(){
        var username    = $("#username").get(0),//Jquery对象转换为DOM对象
            password    = document.getElementById("password"),
            repassword  = document.getElementById("repassword"),
            check       = document.getElementById("check");
        if ( username.value == '' ) {
            username.setCustomValidity("用户名不能为空");
            return;
        }
        if ( password.value == '' ) {
            password.setCustomValidity("密码不能为空");
            return;
        }
        if ( repassword.value == '' ) {
            repassword.setCustomValidity("确认密码不能为空");
            return;
        }
        if ( repassword.value !== password.value ) {
            repassword.setCustomValidity("两次密码输入不一致");
            return;
        }
        if ( !check.checked ) {
            check.setCustomValidity("请勾“选我同意注册协议”");
            return;
        }

        var form,target,query;
        form = $('.ajax_post');
        target = form[0].action;
        query  = 'username='+username.value + '&password=' + md5($.trim(password.value)) + '&repassword=' + md5(repassword.value);
        if ( check.checked ) {
            query += "&check="+check.value;
        }
        $.post(target,query).success(function(result){
            if (result.code == '201') {
                $('#myModal').modal({
                    keyboard: true
                });
                $(".modal-body").html(result.data.msg);
            }else if( result.code == '200' ){
                location.href = result.url;
            }else{
                $('#myModal').modal({
                    keyboard: true,
                });
                $(".modal-body").html("注册失败，请联系管理员6");
            }
        }).error(function(result){
            $('#myModal').modal({
                keyboard: true,
            });
            $(".modal-body").html("注册失败，请联系管理员8");
        });
        return false;
    });

    $("#loginBtn").on("click",function(){
        var username = document.getElementById("username"),
            password = document.getElementById("password");
        /*if ( username.value == '' ) {
            username.setCustomValidity("用户名不能为空");
            return;
        }
        if ( password.value == '' ) {
            password.setCustomValidity("密码不能为空");
            return;
        }*/
        var form,target,query;
        form    = $(".ajax-get");
        target  = form.get(0).action;
        query   = 'username=' + username.value + "&password=" + md5($.trim(password.value));
        $.get(target,query).success(function(result){
            if ( result.code == '200') {
                location.href = result.url;
            }else if ( result.code == '201'){
                $('#myModal').modal({
                    keyboard: true
                });
                $(".modal-body").html(result.data.msg);
            }else{
                $('#myModal').modal({
                    keyboard: true,
                });
                $(".modal-body").html("注册失败，请联系管理员");
            }
            //alert(result.code);alert(result.data.msg);
            //console.log(result);
        }).error(function(result){
            $('#myModal').modal({
                keyboard: true,
            });
            $(".modal-body").html("注册失败，请联系管理员");
        });
        return false;
    });
})
