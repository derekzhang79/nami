<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\wamp64\www\nami\src\api\public/../application/pc\view\personal\login.html";i:1499958027;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>登陆</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/login.css">
    <script type="text/javascript" src="__PUBLIC__static/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="signInH">
        <a href="__PUBLIC__pc/index/index"><img></a>
    </div>
    <div class="login_banner"><img></div>
    <div class="container-wrap">
        <div class="signIn">
            <div class="right">
                <ul class="title">
                    <li><a>账户登录</a></li>
                    <li><a>扫描登录</a></li>
                </ul>
                <div class="login">
                    <div class="list">
                        <form class="login-data" method="post" onsubmit="return checkForm()">
                            <div class="form-group">
                                <input type="text" name="user_name" class="form-control" id="firstname" placeholder="邮箱/手机号码/纳米账号">
                            </div>
                            <div class="form-group">
                                <input type="password" name="user_psw" class="form-control" id="lastname" placeholder="密码">
                            </div>
                            <div class="form-group">
                                <div id="logAlert" name="uset_tip" class="alert hide alert-danger">
                                    <!--data-dismiss="alert"   声明式触发      -->
                                    <a class="close">x</a>
                                    <strong></strong>
                                </div>
                                <button type="submit" class="btn btn-default">立即登陆</button>
                            </div>
                        </form>
                        <ul class="change">
                            <li><a href="__PUBLIC__pc/personal/register">注册纳米账号</a></li>
                            <div></div>
                            <li><a href="">忘记密码？</a></li>
                        </ul>
                        <div class="other">
                            <div class="tip">
                                <legend align="center" class="oth_type_txt">其他方式登录</legend>
                            </div>
                            <div class="other-login">
                                <a class="glyphicon glyphicon-cd" href="" title="   QQ登陆"></a>
                                <a class="glyphicon glyphicon-cd" href="" title="   微博登陆"></a>
                                <a class="glyphicon glyphicon-cd" href="" title="   支付宝登陆"></a>
                                <a class="glyphicon glyphicon-cd" href="" title="   微信登陆"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="re-footer">
        <div class="lang">
            <ul class="list">
                <li><a>简体</a></li>
                <li><a>繁体</a></li>
                <li><a>English</a></li>
                <li><a>常见问题</a></li>
            </ul>
        </div>
        <p class="nf-intro">
            <span>
            纳米公司版权所有-京ICP备10046444-
            <a class="beianlink beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134">
                <span>
                    <img src="https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png"></span> 京公网安备11010802020134号
            </a>
            -京ICP证110507号
            </span>
        </p>
    </div>
    
    <script>
    function checkForm() {
        $('#firstname').click(function() {
            hideAlert('#logAlert');
        })

        let user_name = $('input[name="user_name"]').val();
        let user_psw = $('input[name="user_psw"]').val();

        $.getJSON('__PUBLIC__pc/personal/loginAjax.html?callback=?', {
            user_name,
            user_psw
        }, function(rtnD) {
            if (rtnD.status == 0) {
                showAlert(rtnD.msg, "#logAlert");
                console.log('返回0 验证有误');
                return false;
            }
            console.log(rtnD.status);
            window.location.href = "__PUBLIC__pc/index/index";

        })

        return false;
    }
    $(function() {

    })


    //隐藏提示
    function hideAlert(ele) {
        $(ele).addClass('hide');
    }

    //显示提示
    function showAlert(msg, ele) {
        $(ele).removeClass('hide').find('strong').html(msg);
        setTimeout('hideAlert("#logAlert")', 3000);

    }
    </script>
</body>

</html>
