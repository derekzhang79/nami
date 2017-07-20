<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\wamp64\www\nami\src\api\public/../application/pc\view\details\atlaspic.html";i:1499330609;s:78:"D:\wamp64\www\nami\src\api\public/../application/pc\view\details\sub_head.html";i:1499787689;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\header.html";i:1499940697;}*/ ?>
<nav id="nav">
    
    <div class="header" id="header">
        <div class="nav">
            <div class="container">
                <div class="left">
                    <ul class="nav_left">
                        <li><a href="__PUBLIC__pc/index/index">纳米商城</li>
                        <li><a href="javascript:;">MIUI</li>
                        <li><a href="javascript:;">米聊</li>
                        <li><a href="javascript:;">游戏</li>
                        <li><a href="javascript:;">多看阅读</li>
                        <li><a href="javascript:;">云服务</li>
                        <li><a href="javascript:;">金融</li>
                        <li><a href="javascript:;">纳米商城移动版</li>
                        <li><a href="javascript:;">问题反馈</li>
                        <li><a href="javascript:;">Select Region</li>
                    </ul>
                </div>
           <?php
            if(empty($user_id)){
                echo 
                '<div class="right" id="sign-out">
                    <div class="left">
                    <!-- 登录之前显示 -->
                    <div class="left login">
                        <a href="__PUBLIC__pc/personal/login">登录</a>
                        <a href="__PUBLIC__pc/personal/register">注册</a>
                        <a href="javascript:;">消息通知</a>
                    </div>
                    </div>';
            }
           ?>
           
                    <div class="right">
                        <a href="__PUBLIC__pc/order/cart">
                    <i class="iconfont">&#xe626;</i>购物车<span>(
                    <?php
                        if(empty($user_id)){
                            echo '0';
                        }else {
                            echo $cartNum;
                        }
                        
                    ?>
                    )</span>
                        </a>
                    </div>
                    <!-- 登录之后显示 -->
        
                    <?php
                        if($userData){
                            echo '<div class="right">
                            <ul class="customer">
                                <li class="customer_show">
                                    <a href="javascript:;">';
                            }
                        
                            if($userData){
                            echo $userData['username'];
                            }
                        
                        if($userData){
                            echo '</a>
                            </li>
                            <li><a href="javascript:;">消息通知</a></li>
                            <li><a href="__PUBLIC__pc/personal/home">我的订单</a></li>
                        </ul>
                        <!-- 登录后账户下拉信息框 -->
                        <ul class="customer_detail text_center">
                            <li><a href="__PUBLIC__pc/personal/home">个人中心</a></li>
                            <li><a href="javascript:;">评价晒单</a></li>
                            <li><a href="javascript:;">我的喜欢</a></li>
                            <li><a href="__PUBLIC__pc/personal/home">纳米账户</a></li>
                            <li><a href="__PUBLIC__pc/personal/login">退出登录</a></li>
                        </ul>
                    </div>';
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container product" id="title">
        <div class="left pro_img">
            <a href="__PUBLIC__pc/index/index">
                <img src="__PUBLIC__static/images/headfoot/logo.png">
                <img src="__PUBLIC__static/images/headfoot/yyymix.gif">
            </a>
        </div>
        <div class="left">
            <!-- 产品区域 -->
            <div class="pro_left">
                <ul>
                    <li><span class="text">纳米手机</span></li>
                    <li><span class="text">红米</span></li>
                    <li><span class="text">平板笔记本</span></li>
                    <li><span class="text">电视</span></li>
                    <li><span class="text">盒子影音</span></li>
                    <li><span class="text">路由器</span></li>
                    <li><span class="text">智能硬件</span></li>
                    <li><span class="text">服务</span></li>
                    <li><span class="text">社区</span></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <!-- 搜索区域 -->
            <div class="search">
                <form role="form">
                    <input type="search" class="search-text">
                    <input type="submit" value="&#xe601;" class="iconfont search-btn">
                    <!-- 搜索文本的遮罩div -->
                    <div class="search-text search_hot_text">
                        <a href="javascript:;">红米4X 699元起</a>
                        <a href="javascript:;">笔记本</a>
                    </div>
                    <div class="iconfont icon-sousuo_sousuo search-btn btn"></div>
                </form>
                <!-- 纳米热卖产品下拉div -->
                <div class="key_word">
                    <ul class="search_keyword">
                        <!-- <li>
                            <a href="javascript:;">
                                <span class="key_word_text">纳米6</span>
                                <span class="pro_piece right">约有7件</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="javascript:;">
                                <span class="key_word_text">纳米6</span>
                                <span class="pro_piece right">约有7件</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="key_word_text">纳米6</span>
                                <span class="pro_piece right">约有7件</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--  产品详细下拉框   -->
    <div class="container" id="login-nav">
    <div class="container pro_detailed" style="width: 100% !important;">
            <ul class="pro_detailed_ul">
            <!-- <li class="text_center">
                <span class="text_box">新品</span>
                <img src="images/xm6_320.png" alt="">
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <img src="images/xm6_320.png" alt="">
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <img src="images/xm6_320.png" alt="">
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <img src="images/xm6_320.png" alt="">
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <img src="images/xm6_320.png" alt="">
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <img src="images/xm6_320.png" alt="">
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li> -->
            </ul>
    </div>
    </div>
    
    
    

    <div class="container">
        <div class="row nav-list">
            <p class="col-md-3 pull-left">纳米Max 2 大屏大电量</p>
            <div class="col-sm-5 pull-right">
                <a href="<?php echo url('pc/details/index',array('id'=>$id,'type'=>'index')); ?>"  class="<?php echo setActiveByAction('index','cur')?>">概述</a>
                <span>|</span>
                <a href="<?php echo url('pc/details/atlasPic',array('id'=>$id,'type'=>'atlasPic')); ?>" class="<?php echo setActiveByAction('atlasPic','cur')?>">图集</a>
                <span>|</span>
                <a href="<?php echo url('pc/details/specs',array('id'=>$id,'type'=>'specs')); ?>" class="<?php echo setActiveByAction('specs','cur')?>">参数</a>
                <!-- <span>|</span>
                 <a href="#">F码通道</a>-->
                <span>|</span>
                <a href="#">用户评价</a>
                <?php  $curCtrl = getAction(); if($curCtrl  != 'detail'): ?>
                <span>|</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>$id,'type'=>'detail')); ?>" class="nav-btn JS_aBtn <?php echo setActiveByAction('detail','cur')?>">立即购买</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>详情页面</title>
    <link rel="stylesheet" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/animate.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/detail.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/hf.css">
    <script type="text/javascript" src="__PUBLIC__static/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/vue.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/ueditor.config.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/index.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/addjs.js"></script>
</head>
<body>

<section id="pic_list" class="pic_list">
    <h1>纳米 Max 2</h1>
    <div class="section-items mj-active preload" v-for="pic in pic_data">
        <img class="img-items" :src="pic.pic">
    </div>
</section>
</body>
</html>
<script>
    new Vue({
        el:'#pic_list',
        data:{
            pic_data:[
                {pic:"__PUBLIC__static/images/detail/gallery-01.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-02.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-03.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-04.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-05.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-06.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-07.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-08.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-09.jpg"},
                {pic:"__PUBLIC__static/images/detail/gallery-10.jpg"},
                {pic:"__PUBLIC__static/images/detail/art-2.jpg"}
            ]
        }
    })



    $(function () {
    var proChoosetwo= $(".page02 .page02-info .main .pro-choose-two ul li");

   proChoosetwo.click( function () { $(this).addClass("active").siblings().removeClass("active");

   });


    var proChooseAlone=$(".page02 .page02-info .main .pro-choose-alone ul li")
    proChooseAlone.click( function () {

            if($(this).hasClass("active") == false){

                $(this).addClass("active")
            }else {

               $(this).removeClass("active");

            }
        });

    /*参数页面*/
    var Select=$(".Js_select p a");
    var Js_selectContent=$(".Js_selectContent");
    var JS_Show=$(".Js_selectContent a");

    Select.click(function () {

        Js_selectContent.show();
    })

    JS_Show.click(function () {
        Js_selectContent.hide();
    })

    /*nav隐藏 滚动一定距离隐藏*/
    $('#title,#login-nav').hide();
    $('#header').css({"height":"42px"});
    var winHeight = $(document).scrollTop();
    $(window).scroll(function(){
        var scrollY =$(document).scrollTop();
        if(scrollY > 50){
            $('#header').slideUp(500);
        }else {
            $('#header').slideDown(500);
        }

    })


});
</script>
