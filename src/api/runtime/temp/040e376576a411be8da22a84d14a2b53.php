<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\personal\home.html";i:1499957652;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\header.html";i:1500245659;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\footer.html";i:1499862757;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/home.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/hf.css">
    <script type="text/javascript" src="__PUBLIC__static/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- header -->
    
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
    
    
    

    <!-- page-main -->
    <div class="page-main">
        <div class="container">
            <div class="home-left">
                <div class="um-box">
                    <div class="um-nav-box">
                        <div class="nav-hd">
                            <h3 class="title">订单中心</h3></div>
                        <div class="nav-bd">
                            <ul class="bd-list">
                                <li class="selected" ><a>我的订单</a></li>
             
                                <li><a>团购订单</a></li>
                                <li><a>评价晒单</a></li>
                                <li><a>话费充值订单</a></li>
                                <li><a>以旧换新订单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="um-nav-box">
                        <div class="nav-hd">
                            <h3 class="title">个人中心</h3></div>
                        <div class="nav-bd">
                            <ul class="bd-list">
                                <li><a >我的个人中心</a></li>
                                <li><a >消息通知</a></li>
                                <li><a >购买资格</a></li>
                                <li><a >现金账户</a></li>
                                <li><a >纳米礼品卡</a></li>
                                <li><a >手机换新券</a></li>
                                <li><a >喜欢的商品</a></li>
                                <li><a >优惠券</a></li>
                                <li><a >收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="um-nav-box">
                        <div class="nav-hd">
                            <h3 class="title">售后服务</h3></div>
                        <div class="nav-bd">
                            <ul class="bd-list">
                                <li><a>服务记录</a></li>
                                <li><a>申请服务</a></li>
                                <li><a>领取快递报销</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="um-nav-box">
                        <div class="nav-hd">
                            <h3 class="title">账户管理</h3></div>
                        <div class="nav-bd">
                            <ul class="bd-list">
                                <li><a>个人信息</a></li>
                                <li><a>修改密码</a></li>
                                <li><a>社区VIP认证</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-right">
                <!-- 我的订单 -->
                <div class="uc-home con-tip" id="my-order">
                    <div class="uc-content-box">
                        <div class="box-hd">
                            <h1 class="title">我的订单</h1>
                            <div class="more">
                                <ul class="filter-list">
                                    <li data-status="1" class="active"><a>全部有效订单</a></li>
                                    <li data-status="2"><a>待支付<span>(<?php echo $waitPayNum; ?>)</span></a></li>
                                    <li data-status="3"><a>待收货<span>(<?php echo $waitReceiveNum; ?>)</span></a></li>
                                    <li data-status="4"><a>已关闭 <span>(<?php echo $finishNum; ?>)</span></a></li>
                                </ul>
                                <formn class="search-form" method="">
                                    <label class="hide" for="">站内搜索</label>
                                    <input type="search" class="search-text" placeholder="输入商品名称、商品编号、订单号">
                                    <input type="submit" class="search-btn iconfont" name="" value="&#xe601">
                                    </form>
                            </div>
                        </div>
                        <div class="box-bd">
                            <ul class="order-list">
                                <?php foreach($myOrderList as $list): ?>
                                <li class="uc-order-item">
                                    <!--  -->
                                    <div class="order-title">
                                        <h4>
                                        <?php
                                            if($list['status']==0){
                                                echo '待支付';
                                            }else if($list['status']==1||$list['status']==2){
                                                echo '待收货';
                                            }else {
                                                echo '已完成';
                                            }
                                        ?>
                                        </h4>
                                        <ul class="order-attr">
                                            <li>
                                            <?php
                                                echo date('Y-m-d H:i',$list['date']);
                                            ?>
                                            &nbsp</li>
                                            <li><?php echo $list['consignee']; ?>&nbsp</li>
                                            <li>订单号:<span><?php echo $list['sn']; ?></span></li>
                                            <li>&nbsp在线支付</li>
                                        </ul>
                                        <div class="summary">订单金额：<span><?php echo $list['total_price']; ?>元</span></div>
                                    </div>
                                    <div class="order-content">
                                        <div>
                                            <div class="order-content-img"><img src="__PUBLIC__static/images/headfoot/hm4a320.png"></div>
                                            <div class="name">
                                                <p>红米Note 4X 全网通版 香槟金 32GB</p>
                                                <span>999元×1</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="order-content-img"><img src="__PUBLIC__static/images/headfoot/xm6_320.png"></div>
                                            <div class="name">
                                                <p>红米Note 4X 全网通版 香槟金 32GB</p>
                                                <span>999元×1</span>
                                            </div>
                                        </div>
                                        <div class="order-next">
                                            <button>立即支付</button>
                                            <button>订单支付</button>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 个人中心 -->
                <section class="bio-box con-tip hide" id="my-personal">
                    <div class="bio-header">
                        <div class="header-left">`
                            <div class="left-pic">
                                <img src="__PUBLIC__static/images/6qYwLL2xvAZT3B_320.jpg" alt="">
                            </div>
                            <div class="left-info">
                                <h3 class="info-name">啊泽</h3>
                                <span class="info-greet">早上好</span>
                                <a href="#">修改个人信息></a>
                            </div>
                        </div>
                        <div class="header-right">
                            <p class="info-safety">账户安全：<span>普通</span></p>
                            <p class="info-mobile">绑定手机：<span>18815151616</span></p>
                            <p class="info-e">绑定邮箱：<span>123456789@qq.com</span></p>
                        </div>
                    </div>
                    <ul class="bio-footer row">
                        <li class="col-md-6">
                            <img src="__PUBLIC__static/images/portal-icon-1.png" alt="">
                            <div class="footer">
                                <h4>待支付的订单：<span>0</span></h4>
                                <a id="wait-pay" click=waitPay()>查看待支付订单></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="__PUBLIC__static/images/portal-icon-2.png" alt="">
                            <div class="footer">
                                <h4>待收货的订单：<span>0</span></h4>
                                <a href="#">查看待收货订单></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="__PUBLIC__static/images/portal-icon-3.png" alt="">
                            <div class="footer">
                                <h4>待支付商品数：<span>0</span></h4>
                                <a href="#">查看待评价商品></a>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <img src="__PUBLIC__static/images/portal-icon-4.png" alt="">
                            <div class="footer">
                                <h4>喜欢的商品：<span>0</span></h4>
                                <a href="#">查看喜欢的商品></a>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <!-- footer -->
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
<script type="text/javascript">
    $(function(){
        var $nav_li=$(".nav-bd ul.bd-list li:first-child");
        $nav_li.click(function(){
            $(this).addClass("selected")
                .siblings().removeClass("selected");
            var index = $nav_li.index(this);
            $(".home-right .con-tip")
                .eq(index).removeClass("hide")
                .siblings().addClass("hide");
        })

        // .css({'background':'yellow'});
       var $wait_pay = $('a#wait-pay');
       $wait_pay.click(function(){
           $('#my-order').removeClass("hide");
           $('#my-personal').addClass("hide");               
       })
        
    })

    $('.filter-list li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        $.get('__PUBLIC__pc/personal/payStatusAjax',{status:$(this).attr("data-status")},function(rtnD){
            $('.box-bd').html(rtnD);
        })
    })
    /*$('.filter-list li').click(function(){
        var index = $('.filter-list li').index(this);
        $(this).eq(index).addClass('active');
        $(this).addClass("active").siblings().removeClass("active");
    })*/
</script>

</html>
