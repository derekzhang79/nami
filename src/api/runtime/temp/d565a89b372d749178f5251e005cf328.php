<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\wamp64\www\nami\src\api\public/../application/pc\view\details\detail.html";i:1499961357;s:78:"D:\wamp64\www\nami\src\api\public/../application/pc\view\details\sub_head.html";i:1499787689;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\header.html";i:1500245659;}*/ ?>
<!--顶部nav-->

<!--详情nav  include file="details/sub_head"  include file="public/header"-->

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
    <script type="text/javascript" src="__PUBLIC__static/js/axios.min.js"></script>
    <!-- <script type="text/javascript" src="__PUBLIC__static/js/detail.js"></script> -->
</head>
<body>

<section class="page02" id="page02" style="padding-top: 100px">
    <!--遮盖滚动条-->
    <div style="width: 17px;
         height: 550px;
         position: absolute;
         top: 99px;
         left: 1258px;
         z-index: 2;
         background: #FFFFFF"></div>

    <div class="container clearfix row">
        <!--图片轮播-->
        <div class="col-md-6 page02-pic">
            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->

                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img :src="detail_info.goods_image" style="width: 80%;" alt="First slide">
                    </div>
                    <div class="item" v-if="detail_info.pic_1>0">
                        <img :src="detail_info.pic_1" style="width: 80%;" alt="Second slide">
                    </div>
                    <div class="item" v-if="detail_info.pic_1>0">
                        <img :src="detail_info.pic_2" style="width: 80%;" alt="Three slide">
                    </div>
                   <!--  <div class="item" v-if="detail_info.pic_1>0">
                        <img :src="detail_info.pic_3" style="width: 80%;" alt="Four slide">
                    </div> -->
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="carousel-control left" href="#myCarousel"
                   data-slide="prev">&lsaquo;
                </a>
                <a class="carousel-control right" href="#myCarousel"
                   data-slide="next">&rsaquo;
                </a>
            </div>
        </div>
        <!--选择区-->
        <div class="col-md-6 page02-info element" style="height:550px;
          overflow-y: scroll;" >
            <h2>{{detail_info.goods_name}}</h2>
            
            <p><span>【预计2周内为您发货，64GB版本】</span>{{detail_info.goods_deta}}</p>
            <h4>{{detail_info.goods_price}}元 </h4>
            <!--规格-->
            <div class="main">
                <div class="list-wrap">
                    <div class="pro-choose pro-choose pro-choose-col2 J_step pro-choose-two">
                        <h2 class="step-title">选择版本</h2>
                        <ul class="step-list row clearfix">

                            <li class="col-md-6  index.active" v-for="(model,index) in detail_info.goods_attr" @click="modelLi(index)">
                                <a>
                                    <span class="name">
                                    {{model.goods_ver}}</span>
                                    <span class="price">{{model.goods_price}}元</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="pro-choose pro-choose-col2 J_step pro-choose-two">
                        <h2 class="step-title">选择颜色</h2>
                        <ul class="step-list row clearfix select">
                            <li class="btn col-md-6 btn-biglarge (active.index)" id="color" v-for="(BgGoods,index) in version.goods_color" @click="BgGoodss(index)">
                                <a>
                                    {{BgGoods.goods_color}}
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="pro-choose list-choose list-choose-small pro-choose-alone">
                        <h2 class="step-title step_bottom">
                            选择纳米提供的意外险
                            <a href="">了解意外险 ></a>
                        </h2>
                        <ul class="ul-width">
                            <li class="li-width" >
                                <i class="iconfont icon-checkbox">
                                    <em style="border: none;font-size: 30px;" class="iconfont">&#xe62f;</em>
                                </i>
                                <img src="__PUBLIC__static/images/detail/icon01.jpg" alt="">
                                <div v-for="(insure,index) in insure_data" @click="insureClick(index)">
                                    <span>{{insure.name}}</span>
                                    <p class="desc">手机意外损坏，一年内免费维修</p>
                                    <span class="price">{{insure.price}}元</span>
                                </div>

                                
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="pro-list" v-if="price>0">
                    <ul>
                        <li>{{model}}&nbsp;&nbsp;&nbsp;&nbsp;{{BgGoods}}
                            <span>{{price}}元</span>
                        </li>
                        <li>{{insureName}}
                            <span>{{insurePrice}}</span>
                        </li>
                        <li class="totlePrice">总计 ：{{insurePrice +price}}元</li>

                    </ul>
                </div>
                <div class="pro-list"   v-if='click && (detail_info.goods_price==""||BgGoods=="")'>
                    <p class="attr">请选择商品属性和规格╭(╯^╰)╮</p>
                </div>
                <ul class="btn-wrap clearfix">
                    <li>
                        <a class="btn btn-primary" @click="submitBuy()">加入购物车</a>
                        <div class="J_hasChange" style="display: block">全款预售，商品到货后按照预购顺序发货
                            <a href="">了解详情</a>
                           <!-- Button trigger modal -->
                        </div>
                    </li>
                </ul>
                <div class="pro-policy">
                    <i class="iconfont">&#xe62f;</i>
                    <span>支持7天无理由退货</span>
                </div>
                <div class="addressWrap">
                    <div class="user-default-address">
                        <i class="iconfont">&#xe6d9;</i>
                        <div>

                        <div class="address-info">

                            <span class="item" ><?php echo $detail_list['cmbProvince']; ?></span>
                            <span class="item"><?php echo $detail_list['cmbCity']; ?></span>
                            <span class="item"><?php echo $detail_list['cmbArea']; ?></span>


                        </div>

                            <a class="" data-toggle="modal" data-target="#myModal" style="text-decoration: none;cursor: pointer">
                                修改
                            </a>
                    </div>

                        <div class="product-status">
                        付款后2周内发货
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<!--更改地址模态框-->
<form>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="margin: 200px auto 0 500px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">更改地址</h4>
                </div>
                <div class="modal-body" id="modal-body">
                    <select id="cmbProvince" name="cmbProvince" v-model="cmbProvince"></select>
                    <select id="cmbCity" name="cmbCity"></select>
                    <select id="cmbArea" name="cmbArea"></select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">退出</button>
                    <input type="submit" class="btn btn-primary" value="确定更改">
                </div>
            </div>
        </div>
    </div>

</form>
<!-- <script type="text/javascript">
    
</script> -->
<!--详情区-->
<section class="page03">
    <div class="section  is-visible preload container">
        <img src="__PUBLIC__static/images/detail/pic03.jpg" alt="">
    </div>
    <div class="section  preload is-visible container">
        <img src="__PUBLIC__static/images/detail/pic04.jpg" alt="">
    </div>
</section>

</body>
</html>
<script>

addressInit('cmbProvince', 'cmbCity', 'cmbArea');
    
    $(function(){
        new Vue({
            el:"#page02",

            data:{
                model:'',
                version:'', 
                price:'',   //击显示的价格
                BgGoods:'',    //点击显示的颜色
                insureName:'',   //点击显示的保险名字
                insurePrice:'',   //点击选中的价格
                cmbProvince:'', 
                goods_id:<?php echo $id; ?>,   //url中的产品id 
                click:false ,    //判断选中属性
                user:<?php echo $user; ?>,   //session传过来的user
                detail_info:<?php echo $detail_info; ?>,

                insure_data:[
                    {name:"纳米Max 2 意外保险",price:149}
                ]
            },

            methods:{
                BgGoodss:function (index) {
                    this.click=true;
                    this.BgGoods = this.version.goods_color[index].goods_color;
                    console.log(this.BgGoods);

                },
                modelLi:function (index) {
                    this.click=true;
                    this.version=this.detail_info.goods_attr[index];
                    // console.log(this.version);
                    var active=$(".page02 .page02-info .main .pro-choose ul li");
                
                    if(active.hasClass("index,active") == false)
                    {   
                        this.model = this.detail_info.goods_attr[index].goods_ver;
                        this.version=this.detail_info.goods_attr[index];
                        this.price=this.version.goods_price;
                        console.log(this.BgGoods);
                    }else {
                        this.version="";
                        this.price="";
                        this.BgGoods = "";
                    }
                },
                insureClick:function (index) {
                    this.click=true;
                    
                    this.insureName = this.insure_data[index].name;
                    this.insurePrice = this.insure_data[index].price;
   
                },
                submitBuy:function () {
                    
                    // console.log(this.goods_id);
                    // return false;
                    
                    if (this.user=='null') {
                         console.log(this.user);
                    // return false;
                        window.location.href = "__PUBLIC__pc/personal/login";

                    }else {
                        
                        if (this.price!=""&&this.BgGoods!="") {                       
                        let buyList = {};
                        buyList.user_id=this.user.id;
                        buyList.goods_id= this.goods_id;
                        buyList.goods_name = this.detail_info.goods_name;
                        buyList.goods_price = this.price;
                        buyList.goods_attr2 = this.BgGoods;
                        buyList.goods_attr1 = this.model;
                        buyList.goods_thumb = this.detail_info.goods_image;                       
                        axios({
                            url: '__PUBLIC__pc/details/submitBuyAjax',
                            method:'get',
                            //使用post 需要配置              
                            // data:{"data":JSON.stringify(buyList)}   
                            params:{data:buyList}                         
                        }).then(rtnD=>{
                            console.log(rtnD);
                            if(rtnD.data.active){
                                console.log(rtnD.data.active);
                                // return false;s
                                window.location.href="__PUBLIC__pc/order/cart";
                            }

                        })

                    }else {
                        this.click=true;
                        return false;
                    }

                    }
                    

                
                
                }

            }
        })
    })
    

    $(function () {
    var proChoosetwo= $(".page02 .page02-info .main .pro-choose-two ul li");

    proChoosetwo.click( function () { 

        $(this).addClass("active").siblings().removeClass("active");

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