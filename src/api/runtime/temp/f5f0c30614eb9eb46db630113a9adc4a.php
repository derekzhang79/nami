<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\details\index.html";i:1499330611;s:78:"D:\wamp64\www\nami\src\api\public/../application/pc\view\details\sub_head.html";i:1499787689;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\header.html";i:1500245659;}*/ ?>
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
                    <?php
                        if(empty($user_id)){
                            echo '<a href="">';
                        }else {
                            echo '<a href="__PUBLIC__pc/order/cart">';
                        }
                        
                    ?>
                        
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
                <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>4)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>红米4X</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>4)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>4)); ?>"><img src="images/xm6_320.png" alt=""></a>
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

<section class="page01">
    <div class="page01-max">
        <div class="page01-item max-01">
            <div class="max-container">
                <h1>小米Max 2 大屏大电量</h1>
                <p>6.44" 大屏，看什么都震撼 / 5300mAh 充电宝级的大电量</p>
                <h4>1699元起</h4>
            </div>

        <div class="max-01-img">
            <img src="__PUBLIC__static/images/detail/max2-01.jpg" alt="">
        </div>
        </div>
        <div class="page01-item max-02">
            <div class="max-02-title">
                <h2>充电宝级的大电量</h2>
            </div>
            <a href="#">电量对比实测</a>
            <img src="__PUBLIC__static/images/detail/max2-03.jpg" alt="">
        </div>
        <div class="page01-item max-03">
            <div class="max-03-block">
                <h2>6.44" 大屏<br>看什么都震撼</h2>
                <p>看视频、玩游戏、看电子书画面更大</p>
                <a href="#">大屏体验</a>
            </div>
            <img src="__PUBLIC__static/images/detail/max2-02.jpg" alt="">
        </div>
        <div class="page01-item max-04">
            <div class="max-04-block">
                <h2>轻薄全金属<br>单手可握的大屏手机</h2>
                <p>隐藏式天线带、圆润的弧形收边，带来更好的手感</p>
                <a href="#">欣赏工艺视频</a>
            </div>
            <img src="__PUBLIC__static/images/detail/max2-04.jpg" alt="">
        </div>
        <div class="page01-item max-05">
            <div class="max-05-block">
                <h2>大像素相机<br>像小米6 一样好的画质</h2>
                <p>配备索尼 IMX386 感光元件，照片画质更细腻</p>
                <a href="#">欣赏样片</a>
            </div>
            <img src="__PUBLIC__static/images/detail/max2-05.jpg" alt="">
        </div>
        <div class="page01-item max-06">
            <div class="max-06-block">
                <h2>4GB 大内存<br>骁龙八核处理器</h2>
                <p>游戏流畅运行无压力，画面真实细腻，<br>还有听得清走位的立体声</p>
            </div>
            <img src="__PUBLIC__static/images/detail/max2-06.jpg" alt="">
        </div>
        <div class="page01-item max-07">
            <div class="max-07-block">
                <h2>独特的分屏模式<br>边看视频，边聊微信</h2>
                <p>即将推出的分屏功能，一屏显示不同内容，<br>比价选商品、读书做笔记更方便</p>
                <a href="#">演示分屏功能</a>
            </div>
            <img src="__PUBLIC__static/images/detail/max2-07.jpg" alt="">
            <h4>2017 年 7 月 MIUI 8 开发版分机型陆续支持</h4>
        </div>
        <div class="page01-item max-08">
            <div class="max-08-block">
                <h2>双功放立体声扬声器<br>画面震撼，声音更震撼</h2>
                <p>还有红外遥控、指纹识别等功能</p>
            </div>
            <img src="__PUBLIC__static/images/detail/max2-08.jpg" alt="">
            <div class="max-08-box">
                <img src="__PUBLIC__static/images/detail/max2-08-hand.png" alt="">
                <div class="max-08-band max-08-band01">
                    <i class="band-01"></i>
                    <i class="band-02"></i>
                </div>
                <div class="max-08-band max-08-band02">
                    <i class="band-01"></i>
                    <i class="band-02"></i>
                </div>
            </div>
        </div>
        <div class="page01-item max-09">
            <div class="max-09-block">
                <img src="__PUBLIC__static/images/detail/max2-09.jpg" alt="">
            </div>
            <div class="max-09-box container">
                <ul class="box-list row">
                    <li class="col-sm-4">
                        <h3>6.44" 大屏</h3>
                        <p>看什么都震撼</p>
                    </li>
                    <li class="col-sm-4 li-border">
                        <h3>6.44" 大屏</h3>
                        <p>看什么都震撼</p>
                    </li>
                    <li class="col-sm-4">
                        <h3>6.44" 大屏</h3>
                        <p>看什么都震撼</p>
                    </li>
                    <li class="col-sm-4">
                        <h3>6.44" 大屏</h3>
                        <p>看什么都震撼</p>
                    </li>
                    <li class="col-sm-4 li-border">
                        <h3>6.44" 大屏</h3>
                        <p>看什么都震撼</p>
                    </li>
                    <li class="col-sm-4">
                        <h3>6.44" 大屏</h3>
                        <p>看什么都震撼</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page01-item max-10">
            <a href="#">
                <p>欣赏图集 ></p>
                <img src="__PUBLIC__static/images/detail/max2-10.jpg" alt="">
            </a>
        </div>
        <div class="max-text">
            <p>
                MIUI 分屏功能由于技术条件、开发进度等有所差异，以产品完成测试时间为准。正式支持机型将通过 MIUI 官方网站（www.miui.com）公布。充电宝级大电量指相比小米 5000mAh 移动电源。页面中所对比的一般手机，均为小米自有手机。产品站非特别指出，均为我司实验室数据、设计技术参数及供应商提供数据，全站数据实际情况会因测试软件版本、具体测试环境、具体版本不同，而略有差异。全站所展示结构图片，均为功能示意图，并非绝对实际结构，最终以实物为准。
            </p>
        </div>
        <div class="max-weixin">
            <div class="weixin">
                <div class="weixin-pic">
                    <img src="__PUBLIC__static/images/detail/miphone-erweima.png" alt="">
                </div>
                <div class="weixin-content">
                    <p>扫码关注【<span>小米手机</span>】公众号</p>
                    <h4>了解更多新品资讯，还有机会赢 10 台小米Max 2</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
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
</body>
</html>