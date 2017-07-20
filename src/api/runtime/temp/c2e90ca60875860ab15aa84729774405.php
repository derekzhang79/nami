<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\wamp64\www\nami\src\api\public/../application/pc\view\index\cate.html";i:1499345002;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\header.html";i:1499940697;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\footer.html";i:1499862757;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>纳米商城 - 纳米6、红米Note 4X、纳米Max 2、纳米笔记本官方网站</title>
    <link rel="stylesheet" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/hf.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/cate.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/iconfont/iconfont.css">
    <script src="__PUBLIC__static/js/jquery.min.js"></script>
    <script src="__PUBLIC__static/js/bootstrap.min.js"></script>
</head>

<body>
    <!--头部-->
   
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
    
    
    

    
    <!--面包屑-->
    <div class="breadcrumbs">
        <div class="container">
            <a href="">首页</a>
            <span class="sep"></span>
            <a href="">所有分类</a>
        </div>
    </div>
    <!--分类主页-->
    <div class="container J_category category-index">
        <div class="xm-plain-box category-list">
            <div class="box-hd J_box-hd">
                <h2 class="title">
                    <span><p onselectstart="return false;">></p></span>
                    手机 电话卡
                </h2>
            </div>
            <div class="box-bd J_box-bd">
                <ul class="clearfix">
                    <li>
                        <a href="<?php echo url('details/detail',array('id'=>2)); ?>" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="xm-plain-box category-list">
            <div class="box-hd J_box-hd">
                <h2 class="title">
                    <span><p onselectstart="return false;">></p></span>
                    手机 电话卡
                </h2>
            </div>
            <div class="box-bd J_box-bd">
                <ul class="clearfix">
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                    <li>
                        <a href="" class="category-list-img">
                            <img src="__PUBLIC__static/images/index/cate/xm6_140.png" alt="">
                        </a>
                        <a href="" class="category-list-title">纳米6</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--页尾-->
    <div class="footer">
    <div class="container">
        <div class="footer_title font16 text_center">
            <ul>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-editor2"></i>预约维修服务
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-sevenday"></i>7天无理由退货
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-15tian"></i>15天免费换货
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-icon25"></i>满150元包邮
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-dizhi"></i>预约维修服务
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer_list">
            <ul class="left font12">
                <li>
                    <h4 class="font14">帮助中心</h4>
                    <a href="javascript:;">账户管理</a>
                    <a href="javascript:;">购物指南</a>
                    <a href="javascript:;">订单操作</a>
                </li>
                <li>
                    <h4 class="font14">服务支持</h4>
                    <a href="javascript:;">售后政策</a>
                    <a href="javascript:;">自助服务</a>
                    <a href="javascript:;">相关下载</a>
                </li>
                <li>
                    <h4 class="font14">线下门店</h4>
                    <a href="javascript:;">纳米之家</a>
                    <a href="javascript:;">服务网点</a>
                    <a href="javascript:;">零售网点</a>
                </li>
                <li>
                    <h4 class="font14">关于纳米</h4>
                    <a href="javascript:;">了解纳米</a>
                    <a href="javascript:;">加入纳米</a>
                    <a href="javascript:;">联系我们</a>
                </li>
                <li>
                    <h4 class="font14">关注我们</h4>
                    <a href="javascript:;">新浪微博</a>
                    <a href="javascript:;">纳米部落</a>
                    <a href="javascript:;">官方微信</a>
                </li>
                <li>
                    <h4 class="font14">特色服务</h4>
                    <a href="javascript:;">F码通道</a>
                    <a href="javascript:;">礼物码</a>
                    <a href="javascript:;">防伪查询</a>
                </li>
            </ul>
            <div class="right text_center">
                <span class="text_color">400-100-5678<br></span>
                <p class="font12">周一至周日 8:00-18:00
                    <br>（仅收市话费）
                    <br>
                </p>
                <span class="text_box">
                        <i class="iconfont icon-duanxin"></i>
                        24小时在线客服
                    </span>
            </div>
        </div>
        <div class="footer_info">
            <div class="left footer_logo_img">
                <a href="javascript:;">
                    <img src="__PUBLIC__static/images/headfoot/logo-footer.png" alt="">
                </a>
            </div>
            <div class="left font12">
                <ul>
                    <li><a href="javascript:;">纳米商城</a></li>
                    <li><a href="javascript:;">MIUI</a></li>
                    <li><a href="javascript:;">米聊</a></li>
                    <li><a href="javascript:;">多看书城</a></li>
                    <li><a href="javascript:;">纳米路由器</a></li>
                    <li><a href="javascript:;">视频电话</a></li>
                    <li><a href="javascript:;">纳米天猫店</a></li>
                    <li><a href="javascript:;">纳米淘宝直营店</a></li>
                    <li><a href="javascript:;">纳米网盟</a></li>
                    <li><a href="javascript:;">纳米移动</a></li>
                    <li><a href="javascript:;">隐私政策</a></li>
                    <li><a href="javascript:;">Select Region</a></li>
                </ul>
                <br>
                <div class="font12">
                    <p>©mi.com 京ICP证110507号 京ICP备10046444号 京公网安备11010802020134号 京网文[2014]0059-0009号 </p>
                    <p>违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
                </div>
            </div>
            <div class="right footer_img_list">
                <img src="__PUBLIC__static/images/headfoot/truste.png" alt="">
                <img src="__PUBLIC__static/images/headfoot/v-logo-2.png" alt="">
                <img src="__PUBLIC__static/images/headfoot/v-logo-1.png" alt="">
                <img src="__PUBLIC__static/images/headfoot/site-weixin.png" alt="">
            </div>
        </div>
        <div class="footer_footer">
            <p>探索黑科技，纳米为发烧而生</p>
        </div>
    </div>
</div>

</body>
<script>
$(function() {
    function Click() {
        let $aBtn = $(".title span");
        $aBtn.click(function() {
            let $content = $(this).parent().parent().siblings();
            if ($content.css('display') == 'block') {
                $(this).css("border", "1px solid #f96f07");
                $(this).find("p").addClass('btn-p');
                $content.hide();
            } else {
                $(this).css("border", "1px solid #b0b0b0");
                $(this).find("p").removeClass('btn-p');
                $content.fadeIn(300);
            }
        })
    }
    Click();
})
</script>
<script>
$(function() {
    var $navLi = $(".pro_left li"),
        $li_detail = $(".pro_detailed");
    var $search_text = $(".search-text.search_hot_text"),
        $search_btn = $(".search-btn.btn");
    var $input_text = $("input[type='search']"),
        $input_btn = $("input[type='submit']");
    var $search_keyword = $(".key_word"),
        $customer_show = $(".customer_show"),
        $customer_detail = $(".customer_detail");


    function Product_detailed(data, search_data) {
        this.data = data;
        this.search_data = search_data;
        this.doms = {
            pro_detailed: $(".pro_detailed"),
            pro_ul: $(".pro_detailed_ul"),
            search_input: $("input[type='search']"),
            search_hotText: $(".search_keyword")
        };
    }
    Product_detailed.prototype = {
        // 获取product数据
        getData_pro: function(index) {
            var str = '';
            this.doms.pro_ul.html("");
            var products = this.data[index];
            if (!products) {
                return;
            }
            for (var i = 0; i < products.length; i++) {
                //console.log(products[i]);
                str += this.creat_proLi(products[i]);
            }
            this.doms.pro_ul.append(str);

        },
        // 获取search的数据
        getData_hotText: function() {
            var str = '';
            for (var i = 0; i < this.search_data.length; i++) {
                str += this.creat_search_keyword_li(i);
            }
            this.doms.search_hotText.append(str);
        },
        // 创建product_li
        creat_proLi: function(obj) {
            var str_product = '<li class="text_center">' +
                '<span class="text_box">' + obj.pro_new + '</span>' +
                '<img src="' + obj.pro_img + '" alt="">' +
                '<p>' + obj.pro_name + '</p>' +
                '<span class="text_color">' + obj.pro_price + '</span>' +
                '</li>';
            return str_product;
        },
        // 创建search_keyword_li
        creat_search_keyword_li: function(index) {
            this.doms.search_hotText.html("");
            var str_keyword = '<li>' +
                '<a href="javascript:;">' +
                '<span class="key_word_text">' + this.search_data[index].keyword_text + '</span>' +
                '<span class="pro_piece right">' + this.search_data[index].product_piece + '</span>' +
                '</a>' +
                '</li>';
            return str_keyword;
        }
    };
    //search的数据
    var data = [{
        keyword_text: "纳米6",
        product_piece: "约有7件"
    }, {
        keyword_text: "纳米5s Plus",
        product_piece: "约有6件"
    }, {
        keyword_text: "纳米MIX",
        product_piece: "约有1件"
    }, {
        keyword_text: "手环",
        product_piece: "约有6件"
    }, {
        keyword_text: "纳米Note 4x",
        product_piece: "约有7件"
    }, {
        keyword_text: "路由器",
        product_piece: "约有14件"
    }];
    // product的数据
    var data1 = [
        [{
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/xm6_320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }, {
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/xm6_320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }, {
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/xm6_320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }],
        [{
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/hm4a320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }, {
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/hm4a320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }]
    ];

    var p = new Product_detailed(data1, data);

    // 搜索栏位
    $search_text.on("click", function() {
        $(this).hide();
        $search_btn.hide();
        $input_text.focus().addClass('box_border');
        $input_btn.addClass('box_border');
        $search_keyword.show().addClass('box_border border_top_none');
        p.getData_hotText();
        $input_text.blur(function() {
            $search_keyword.hide().removeClass('box_border border_top_none');
            $input_btn.removeClass('box_border');
            $search_btn.show();
            $search_text.show();
            $(this).removeClass('box_border');
        })
    });

    function hover_event(obj) {
        obj.hover(function() {
            $(this).stop().slideDown(300);
        }, function() {
            $(this).stop().slideUp(300);
        });
    }
    // 鼠标经过时，出现产品详细列表
    $navLi.hover(function() {
        var index = $navLi.index(this);
        p.getData_pro(index);
        $li_detail.stop().slideDown(300);
    }, function() {
        $li_detail.stop().slideUp(300);
    });
    // 鼠标在详细列表的盒子移动不隐藏
    hover_event($li_detail);

    // 用户信息下拉框显示
    $customer_show.hover(function() {
        $customer_detail.stop().slideDown(300);
        $(this).css({
            background: 'white',
        });;
    }, function() {
        $customer_detail.stop().slideUp(300);
        $(this).css({
            background: '#333',
        });;
    });
    // 鼠标在详细列表的盒子移动不隐藏
    hover_event($customer_detail);

});
</script>

</html>
