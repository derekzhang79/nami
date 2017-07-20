<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\order\confirm.html";i:1499477605;s:82:"D:\wamp64\www\nami\src\api\public/../application/pc\view\personal\orderHeader.html";i:1499947492;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\footer.html";i:1499862757;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>支付订单</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/confirm.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/index.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/hf.css">
    <script type="text/javascript" src="__PUBLIC__static/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- header -->
    <div class="head">
        <div class="container">
            <div class="head-logo">
                <a href="__PUBLIC__pc/index/index"><img src="__PUBLIC__static/images/milogo.png" ></a>
                
            </div>
            <div class="head-title">
                <h2>支付订单</h2>
                <p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
            </div>
            <div class="head-uinfo">
                <span>
                    <a href="__PUBLIC__pc/personal/home"><?php echo $user_info['username']; ?></a>
                    <ul class="user-menu" style="display:none;">
                        <li><a>个人中心</a></li>
                        <li><a>评价晒单</a></li>
                        <li><a>我的喜欢</a></li>
                        <li><a>纳米账户</a></li>
                        <li><a>退出登录</a></li>
                    </ul>
                </span>
                <span>|</span>
                <a href="__PUBLIC__pc/personal/home">我的订单</a>
            </div>
        </div>
    </div>
    <!-- script>
        $('.head-uinfo span a').mousemove(function(){
            $('.head-uinfo span user-menu').css('display','block');
        })
    </script> -->
    <!-- content -->
    <div class="page-main">
        <div class="container confirm-box">
            <form target="_blank" action="#" id="J_payForm" method="post">
                <div class="section section-order">
                    <div class="order-info clearfix">
                        <div class="fl">
                            <h2 class="title">订单提交成功！去付款咯～</h2>
                            <p class="order-time" id="J_deliverDesc">我们将尽快为您发货</p>
                            <p class="order-time">请在<span class="pay-time-tip">23小时30分</span>内完成支付, 超时后将取消订单</p>
                            <p class="post-info" id="J_postInfo">
                                收货信息：<?php echo $orderList['consignee']; ?> <?php echo $orderList['phone_num']; ?> &nbsp;&nbsp; <?php echo $orderList['address']; ?> </p>
                        </div>
                        <div class="fr">
                            <p class="total">
                                应付总额：<span class="money"><em><?php echo $orderList['total_price']; ?></em>元</span>
                            </p>
                            <a href="javascript:void(0);" class="show-detail" id="J_showDetail" data-stat-id="f6ce11cebe4cd0c7" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-f6ce11cebe4cd0c7', 'javascript:void0', 'pcpid', '']);">订单详情<i class="iconfont"></i></a>
                        </div>
                    </div>
                    <div class="order-detail" style="display: block;">
                        <ul>
                            <li class="clearfix">
                                <div class="label">订单号 :</div>
                                <div class="content">
                                    <span class="order-num">
                                    <?php echo $orderList['sn']; ?></span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">收货信息：</div>
                                <div class="content">
                                    收货信息：<?php echo $orderList['consignee']; ?> <?php echo $orderList['phone_num']; ?> &nbsp;&nbsp; <?php echo $orderList['address']; ?>  </div>
                            </li>
                            <!-- <li class="clearfix">
                                <div class="label">商品名称：</div>
                                <div class="content">
                                    {}{{}{}}</div>
                            </li> -->
                            <li class="clearfix">
                                <div class="label">配送时间：</div>
                                <div class="content">
                                    不限送货时间 </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">发票信息：</div>
                                <div class="content">
                                    电子发票 个人 </div>
                            </li>
                        </ul>
                    </div>
                    <i class="iconfont icon-right">√</i>
                    <div class="order-detail" style="display: none;">
                        <ul>
                            <li class="clearfix">
                                <div class="label">订单号：</div>
                                <div class="content">
                                    <span class="order-num">
                                    1170626268500192                                </span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">收货信息：</div>
                                <div class="content">
                                    覃坤荣 131****8645&nbsp;&nbsp; 湖南&nbsp;&nbsp;长沙市&nbsp;&nbsp;岳麓区&nbsp;&nbsp;&nbsp;&nbsp;枫林二路139号湖南财政经济学院 </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">商品名称：</div>
                                <div class="content">
                                    纳米VR眼镜PLAY2 太空灰 </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">配送时间：</div>
                                <div class="content">
                                    不限送货时间 </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">发票信息：</div>
                                <div class="content">
                                    电子发票 个人 </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section section-payment">
                    <div class="cash-title" id="J_cashTitle">
                        选择以下支付方式付款
                    </div>
                    <!-- <div class="payment-box">
                    <div class="payment-header clearfix">
                        <h3 class="title">最近使用过: </h3>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div> -->
                    <div class="payment-box ">
                        <div class="payment-header clearfix">
                            <h3 class="title">支付平台</h3>
                            <span class="desc"></span>
                        </div>
                        <div class="payment-body">
                            <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                                <li id="J_weixin" data-stat-id="ecb19ebff89bfe8d" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-ecb19ebff89bfe8d', '', 'pcpid', '']);"><img src="//c1.mifile.cn/f/i/15/pay/wechat0715.jpg" alt="微信支付" style="margin-left: 0;"></li>
                                <li class="J_bank" data-stat-id="697962cd4871b27e" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-697962cd4871b27e', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="alipay" value="alipay" type="radio"> <img src="//c1.mifile.cn/f/i/15/pay/event-alipay20160718.jpg" alt="支付宝" style="margin-left: 0;"></li>
                                <li class="J_bank" data-stat-id="f8ac83d702a1fcfd" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-f8ac83d702a1fcfd', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="unionpay" value="unionpay" type="radio"> <img src="//s01.mifile.cn/i/banklogo/unionpay.png?ver2015" alt="银联" style="margin-left: 0;"></li>
                                <li class="J_bank" data-stat-id="c6597ab9a9e0bd00" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-c6597ab9a9e0bd00', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="cft" value="cft" type="radio"> <img src="//s01.mifile.cn/i/banklogo/cft.png" alt="财付通" style="margin-left: 0;"></li>
                                <li class="J_bank" data-stat-id="a87f620c78db2b2b" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-a87f620c78db2b2b', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="micash" value="micash" type="radio"> <img src="//c1.mifile.cn/f/i/15/pay/event-mipay20170427.jpg" alt="纳米钱包" style="margin-left: 0;"></li>
                            </ul>
                            <div class="event-desc">
                                <p>微信支付：关注纳米手机微信公众号，支付成功后可领取3-10元电影票红包。</p>
                                <p>支 付 宝：支付宝扫码支付满38元，参与赢取1999元红包</p>
                                <p>纳米钱包：绑定新卡支付，享最高立减99元</p> <a href="//www.mi.com/c/payrule/" class="more" target="_blank" data-stat-id="082bccdc0dce87da" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-082bccdc0dce87da', '//www.mi.com/c/payrule/', 'pcpid', '']);">了解更多&gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="payment-box ">
                        <div class="payment-header clearfix">
                            <h3 class="title">银行借记卡及信用卡</h3>
                        </div>
                        <div class="payment-body">
                            <ul class="clearfix payment-list payment-list-much J_paymentList J_linksign-customize">
                                <li class="J_bank" data-stat-id="ab154aed085947cf" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-ab154aed085947cf', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CMB" value="CMB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_zsyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="7998330cbb62eecb" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-7998330cbb62eecb', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="ICBCB2C" value="ICBCB2C" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_gsyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="0ca03e76abb984c8" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-0ca03e76abb984c8', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CCB" value="CCB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_jsyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="06de530039da8b38" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-06de530039da8b38', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="COMM" value="COMM" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_jtyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="8656db966e93f938" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-8656db966e93f938', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="ABC" value="ABC" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_nyyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="248651d06000e2a7" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-248651d06000e2a7', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="BOCB2C" value="BOCB2C" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_zgyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="8fa40e5ac268b29e" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-8fa40e5ac268b29e', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_youzheng.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="ab2fd7c15b466ad2" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-ab2fd7c15b466ad2', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="GDB" value="GDB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_gfyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="a3c47799e97d470d" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-a3c47799e97d470d', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="SPDB" value="SPDB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_pufa.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="56565ba582001f90" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-56565ba582001f90', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CEBBANK" value="CEBBANK" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_gdyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="4768ae2336413eb6" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-4768ae2336413eb6', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CIB" value="CIB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_xyyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="6eef43a83d87cc0b" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-6eef43a83d87cc0b', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CMBC" value="CMBC" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_msyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="c7a05519141a406a" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-c7a05519141a406a', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CITIC" value="CITIC" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_zxyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="cf61ac1722da02b2" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-cf61ac1722da02b2', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="SHBANK" value="SHBANK" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_shyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="97f3869e8b59e807" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-97f3869e8b59e807', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="BJRCB" value="BJRCB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_bjnsyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="182a6540a166f721" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-182a6540a166f721', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="NBBANK" value="NBBANK" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_nbyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="0c1fd9edbb2ffdf3" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-0c1fd9edbb2ffdf3', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="HZCBB2C" value="HZCBB2C" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_hzyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="e2164be795d58002" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-e2164be795d58002', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="SHRCB" value="SHRCB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_shnsyh.png?ver2015" alt=""></li>
                                <li class="J_bank hide" data-stat-id="ce440019c46271da" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-ce440019c46271da', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="FDB" value="FDB" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_fcyh.png?ver2015" alt=""></li>
                                <li class="J_showMore" data-stat-id="8b70221d47a030ba" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-8b70221d47a030ba', '', 'pcpid', '']);">
                                    <span class="text">查看更多</span>
                                    <span class="text  hide">收起更多</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="payment-box payment-box-last ">
                        <div class="payment-header clearfix">
                            <h3 class="title">快捷支付</h3>
                            <span class="desc">（支持以下各银行信用卡以及部分银行借记卡）</span>
                        </div>
                        <div class="payment-body">
                            <ul class="clearfix payment-list  J_paymentList J_linksign-customize">
                                <li class="J_bank" data-stat-id="cf5c79caebd4ce4d" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-cf5c79caebd4ce4d', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CMB-KQ" value="CMB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_zsyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="7659e125813c697e" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-7659e125813c697e', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="COMM-KQ" value="COMM-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_jtyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="ac8d246311892220" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-ac8d246311892220', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CCB-KQ" value="CCB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_jsyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="ee06952bbd4f4d0a" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-ee06952bbd4f4d0a', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="ICBCB2C-KQ" value="ICBCB2C-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_gsyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="74411e695cd6624e" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-74411e695cd6624e', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CITIC-KQ" value="CITIC-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_zxyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="6a609f8ffa09ec9d" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-6a609f8ffa09ec9d', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CEBBANK-KQ" value="CEBBANK-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_gdyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="3f5bfe4137171a90" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-3f5bfe4137171a90', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="BOCB2C-KQ" value="BOCB2C-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_zgyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="b64f8a9b6dd3b75c" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-b64f8a9b6dd3b75c', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="SRCB-KQ" value="SRCB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_shncsyyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="729ad1d14eee2a2f" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-729ad1d14eee2a2f', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="JSB-KQ" value="JSB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_jiangsshuyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="9aa4813e4a7fd47c" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-9aa4813e4a7fd47c', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="CIB-KQ" value="CIB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_xyyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="3420e08efd3d3e67" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-3420e08efd3d3e67', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="ABC-KQ" value="ABC-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_nyyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="61c6b46df23af369" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-61c6b46df23af369', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="SPABANK-KQ" value="SPABANK-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_payh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="b4dc808a450a09da" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-b4dc808a450a09da', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="HXB-KQ" value="HXB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_hyyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="5c39e922eb18bc68" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-5c39e922eb18bc68', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="GDB-KQ" value="GDB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_gfyh.png?ver2015" alt=""></li>
                                <li class="J_bank" data-stat-id="adc2b0678ca52fb2" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-adc2b0678ca52fb2', '', 'pcpid', '']);">
                                    <input name="payOnlineBank" id="BOB-KQ" value="BOB-KQ" type="radio"> <img src="//s01.mifile.cn/i/banklogo/payOnline_bjyh.png?ver2015" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
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

</html>
