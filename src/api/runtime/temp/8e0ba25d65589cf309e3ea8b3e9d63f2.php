<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\wamp64\www\nami\src\api\public/../application/pc\view\order\order.html";i:1499853321;s:82:"D:\wamp64\www\nami\src\api\public/../application/pc\view\personal\orderHeader.html";i:1499947492;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\footer.html";i:1499862757;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>确认订单</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/hf.css">    
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/order.css">
    <!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/index.css"> -->

    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/front-end/css/index.css">
    <script type="text/javascript" src="__PUBLIC__static/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- head -->
    <!-- 前后不能有空格 -->
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
    <!-- 页面载入时显示的地址 -->
    <div class="container confirm_order">
        <div class="address">
            <h4>收货地址</h4>
            <div class="delivery_address">
                <!-- 前后不能有空格 -->
                <!-- 区别于Vue.js -->
                <?php foreach($address as $list): ?>
                <div class="customer_address left text_left">
                    <h4 class="address_name"><?php echo $list['consignee']; ?></h4>
                    <p class="customer_mobile"><?php echo $list['phone_num']; ?></p>
                    <p class="describe"><?php echo $list['address']; ?></p>
                    <p class="describe_detail"><?php echo $list['ps']; ?> </p>
                    <a class="text_color modify hide">修改</a>
                </div>
                <?php endforeach; ?>
                <!-- 添加新地址触发按钮 -->
                <div class="customer_address left text_left" id="customer_address">
                    <i class="iconfont">+</i>
                    <p class="add_address text_center">添加新地址</p>
                </div>
            </div>
            <!-- 显示收起添加地址按钮 -->
            <div class="display_address text_center clear_both">
                <div class="hide_address">
                    <p>显示更多收货地址</p>
                    <i></i>
                </div>
                <div class="show_address">
                    <p>收起更多收货地址</p>
                    <i></i>
                </div>
            </div>
        </div>
        <!-- 商品订单选择 -->
        <div class="product_information clear_both">
            <div class="pay_method height90 border_bottom_line">
                <h4 class="width150">支付方式</h4>
                <p class="text_color">在线支付（支持微信支付、支付宝、银联、财付通、纳米钱包等）</p>
            </div>
            <div class="delivery_mode height90 border_bottom_line">
                <h4 class="width150">配送方式</h4>
                <p class="text_color">快递配送（运费 10 元）</p>
            </div>
            <div class="delivery_time height90 border_bottom_line">
                <div class="delivery_time_title width150 left">
                    <h4>配送时间</h4>
                </div>
                <ul class="delivery_time_ul">
                    <li>
                        不限送货时间：<span>周一至周日</span>
                    </li>
                    <li>
                        工作日送货：<span>周一至周五</span>
                    </li>
                    <li>
                        双休日、假日送货：<span>周六至周日</span>
                    </li>
                </ul>
            </div>
            <div class="invoice">
                <div class="invoice_title width150 height90 left">
                    <h4>发票</h4>
                </div>
                <div class="fill_invoice left">
                    <ul class="invoice_ul">
                        <li>电子发票（非纸质）</li>
                        <li>普通发票（纸质）</li>
                    </ul>
                    <div class="unit_name">
                        <label class="unit" for="unit">填写个人 / 单位名称</label>
                        <input type="text" value="个人" id="unit">
                    </div>
                    <span>发票内容：购买商品明细</span>
                    <label>电子发票法律效力、基本用途及使用规定同纸质发票。不随商品寄送。<span class="text_color">什么是电子发票</span></label><i></i>
                </div>
            </div>
            <!-- 重点商品详情 -->
            <div class="coupon clear_both">
                <h4>商品及优惠券</h4>
                <a href="__PUBLIC__pc/order/cart" class="right"> 返回购物车<i></i></a>
                <!-- 商品下单详情 -->
                <?php foreach($orderList as $item): ?>
                <div class="confirm_order_product border_bottom_line">
                    <div class="pro_img left" style="width: 110px;">
                        <img src="<?php echo $item['goods_thumb']; ?>" style="width: 80px;height: 50px;">
                    </div>
                    <span class="product_name" style="width: 580px;"><?php echo $item['goods_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item['goods_attr2']; ?></span>
                    <span class="width150 text_center">
                        <span class="unit_price"><?php echo $item['goods_price']; ?></span> x
                    <span class="number"><?php echo $item['num']; ?></span>
                    </span>
                    <span class="width100 text_center">有货</span>
                    <span class="unit_price text_color width190 text_center"><?php echo $item['goods_price'] * $item['num']; ?>元</span>
                </div>
                <?php endforeach; ?>
                <!-- 立即下单 详情 -->
                <div class="product_detail">
                    <div class="right">
                        <?php
                    $listNum=0;
                        $listPrice=0;
                        for($i = 0; $i<count($orderList);$i++){
                            $listNum += $orderList[$i]['num'];
                            $listPrice += $orderList[$i]['num']*$orderList[$i]['goods_price'];
                        }
                    ?>
                            <div class="right">
                                <p class="num">
                                    <label class="text_right left">商品件数:</label>
                                    <span class="text_right text_color">    <b><?php echo $listNum; ?></b>件
                                </span>
                                </p>
                                <p class="price">
                                    <label class="text_right left">金额合计: </label>
                                    <span class="text_right text_color">
                                <b><?php 
                                echo $listPrice;
                                ?> </b>元</span>
                                </p>
                                <p>
                                    <label class="text_right left">活动优惠:</label>
                                    <span class="text_right text_color">0元</span>
                                </p>
                                <p>
                                    <label class="text_right left">优惠券抵扣:</label>
                                    <span class="text_right text_color">0元</span>
                                </p>
                                <p class="map">
                                    <label class="text_right left">运费: </label>
                                    <span class="text_right text_color"><b>10</b>元</span>
                                </p>
                                <p class="total">
                                    <label class="text_right left">应付总额: </label>
                                    <span class="text_right text_color"><b class="font30">
                                <?php echo $listPrice-10; ?></b>元</span>
                                </p>
                            </div>
                    </div>
                </div>
            </div>
            <!-- 最终选择的地址 -->
            <div class="order_immediately clear_both">
                <div class="left">
                    <span class="consignee">覃坤荣</span><span class="phone_num">13107498645</span>
                    <br>
                    <span class="address">广东省广州市越秀区岳麓区</span>
                    <a class="text_color modify" data-toggle="modal" data-target="#modify_address">修改</a>
                </div>
                <div class="right">
                    <button class="comfirm" onclick="orderSubmit()">立即下单</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 修改地址模态框 -->
    <div class="modal fade" id="modify_address" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">修改地址</h4>
                </div>
                <div class="modal-body" id="modify_modal-body">
                    <div class="unit_name left">
                        <label class="unit">姓名</label>
                        <label class="unit1 width100">个人</label>
                        <input type="text" value="" id="modify_name">
                    </div>
                    <div class="unit_name left margin_right_none">
                        <label class="unit1 width100">手机号</label>
                        <input type="text" value="" id="modify_cell_number">
                    </div>
                    <div class="select_address clear_both" contenteditable="true" id="modify_location_address">
                        广东省广州市越秀区
                    </div>
                    <div class="unit_name personal_address">
                        <label class="unit width50">详细地址</label>
                        <textarea placeholder="请输入详细地址" name="personal_address" class="personal_address" id="modify_personal_address"></textarea>
                    </div>
                    <div class="unit_name left clear_both">
                        <label class="unit width50">邮政编码</label>
                        <input type="text" value="" id="modify_postcode" placeholder="">
                    </div>
                    <div class="unit_name left margin_right_none">
                        <label class="unit1 width100">地址标签</label>
                        <input type="text" value="" class="address_label" id="modify_address_label">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="comfirm" id="modify_save">保存</button>
                    <button type="button" class="comfirm cancel" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 添加地址模态框 -->
    <div class="modal fade" id="add_address" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加新地址</h4>
                </div>
                <div class="modal-body" id="add_modal-body">
                    <div class="unit_name left">
                        <label class="unit">姓名</label>
                        <label class="unit1 width100">个人</label>
                        <input type="text" value="" id="add_name">
                    </div>
                    <div class="unit_name left margin_right_none">
                        <label class="unit1 width100">手机号</label>
                        <input type="text" value="" id="add_cell_number">
                    </div>
                    <div class="select_address clear_both" contenteditable="true" id="add_location_address">
                        广东省广州市越秀区
                    </div>
                    <div class="unit_name personal_address">
                        <textarea placeholder="请输入详细地址" name="personal_address" class="personal_address" id="add_personal_address"></textarea>
                    </div>
                    <div class="unit_name left clear_both">
                        <label class="unit width50">邮政编码</label>
                        <input type="text" value="" id="add_postcode" placeholder="">
                    </div>
                    <div class="unit_name left margin_right_none">
                        <label class="unit1 width100">地址标签</label>
                        <input type="text" value="" class="address_label" id="add_address_label">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="comfirm" id="add_save">保存</button>
                    <button type="button" class="comfirm cancel" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
    <p id="textVal"></p>
    <!-- footer -->
<!--     <div class="footer">
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
 -->
    <script>
    /*异步请求  json 添加键值对 */
    var order = {};
    // (new Date()).valueOf(); 包含毫秒数的时间戳
    $(function() {
        
        var $num = Number($('.right .num .text_right b').html());
        var $price = Number($('.right .price .text_right b').html());
        var $map = Number($('.right .map .text_right b').html());
        var $total = Number($('.right .total .text_right b').html());
        var $consignee = $('.order_immediately .consignee').html();
        var $phone_num = $('.order_immediately .phone_num').html();
        var $address = $('.order_immediately .address').html();
        var $user_id;
        var t = <?php echo time();?>;

        order.sn = t + String(parseInt(Math.random() * 10000));
        order.consignee = $consignee;
        order.goods_num = $num;
        order.goods_price = $price;
        order.carry_price = 10;
        order.total_price = $total;
        order.phone_num = $phone_num;
        order.address = $address;
        order.date = t;
        //rtnD 通过API session  userID的值
        //异步请求 order都在里面或者放置前面
        $.getJSON('__PUBLIC__pc/order/userAjax.html?callback=?', function(rtnD) {            
            $user_id=rtnD;
            order.user_id=$user_id; 
        }) 

        //console.log(order);
    })

    function orderSubmit() {

        console.log(order);

        $.post('__PUBLIC__pc/order/orderAjax', {data:JSON.stringify(order)}, function(rtnD) {
            if(rtnD.status){
                console.log(rtnD.status);
                window.location.href = "__PUBLIC__pc/order/confirm";
                
            }else {
                console.log('NO');
            }

                
        })
        //window.location.href = "__PUBLIC__pc/order/confirm";
    }

    var $show_address = $(".show_address"),
        $hide_address = $(".hide_address"),
        $delivery_address = $(".delivery_address"),
        $customer_address = $(".customer_address"), //获取地址对象
        $add_address = $("#customer_address"), //获取添加新地址对象
        $address_modify = $(".customer_address .modify"), //获取修改地址对象（收货地址处）
        $address_modify_all = $(".modify"), //获取全部的修改对象
        $delivery_time = $(".delivery_time_ul li"),
        $invoice = $(".invoice_ul li");


    var len = $customer_address.length;

    address_number(); //判断地址信息数量
    customer_address_click();
    modify_address_click(); //修改地址信息
    add_address_click(); //新增地址信息
    clicl_add_border($delivery_time);
    clicl_add_border($invoice);

    // 收货地址超过四个换行隐藏
    function address_number() {
        if (len < 5) {
            $hide_address.addClass('hide');
            $show_address.addClass('hide');
        } else {
            $delivery_address.addClass('delivery_address_hide');
            change_address_position();
            $show_address.addClass('hide');
            bar();
        }
    }

    // 收货地址过多时下方的点击栏
    function bar() {
        //收起更多的收货地址 
        $show_address.on("click", function() {
            $delivery_address.addClass('delivery_address_hide');
            $hide_address.removeClass('hide');
            $(this).addClass('hide');
            change_address_position();
        });
        // 显示更多的收货地址
        $hide_address.on("click", function() {
            $delivery_address.removeClass('delivery_address_hide');
            $show_address.removeClass('hide');
            $(this).addClass('hide');
            create_change_address();
            customer_address_click();
            add_address_click();
        });
    }

    // 收起更多的收货地址时把添加新地址放在首行最后
    function change_address_position() {
        var last_address = $customer_address[len - 1],
            target_address = $customer_address[3];
        $delivery_address[0].removeChild(last_address);
        $delivery_address[0].insertBefore(last_address, target_address);
    }

    function create_change_address() {
        $delivery_address.html("");
        $delivery_address.append($customer_address);
    }

    // 点击收货地址添加边框
    function customer_address_click() {
        $customer_address.on("click", function() {
            var index = $customer_address.index(this);
            $(this).addClass('click_border_show').siblings().removeClass('click_border_show');
            $address_modify.addClass('hide');
            $address_modify.eq(index).removeClass('hide');
        })
    }

    // 点击时添加边框
    function clicl_add_border(obj) {
        obj.on("click", function() {
            var index = obj.index(this);
            $(this).addClass('click_border_show').siblings().removeClass('click_border_show');
        })
    }

    // 弹窗点击，隐藏label
    function div_hide() {
        var $objDiv = $(".modal-body .unit_name.left"),
            $objInput = $("#add_modal-body input[type='text']");
        $objDiv.click(function() {
            $(this).children('label.unit1').addClass('hide');
            var index = $objDiv.index(this);
            $objInput.eq(index).focus();
        });
    }

    //新增地址
    function add_address_click() {
        $add_address.on("click", function() {
            $(this).removeClass('click_border_show');
            $('#add_address').modal("show");
            var $add_save = $("#add_save");
            div_hide();

            // 保存并创建地址
            $add_save.click(function() {
                var obj = data_address();
                $('#add_address').modal("hide");
                create_address(obj);
            });
        });
    }

    // 修改地址
    function modify_address_click() {
        $address_modify_all.on("click", function() {
            var index = $address_modify_all.index(this);
            $('#modify_address').modal("show");
            div_hide();
            $("#modify_save").click(function() {
                var obj = modify_data_get(); //获取修改地址后输入框的值
                modify_data_address(obj, index);
                $('#modify_address').modal("hide");

            });
        });
    }

    // 获取新增输入的地址数据
    function data_address() {
        var obj = {};
        obj.add_name = $("#add_name").val();
        obj.add_cell_number = $("#add_cell_number").val();
        obj.add_postcode = $("#add_postcode").val();
        obj.add_address_label = $("#add_address_label").val();
        obj.add_location_address = $("#add_location_address").text().trim();
        obj.add_personal_address = $("#add_personal_address").val();
        return obj;
    }

    //获取修改地址后输入框的值
    function modify_data_get() {
        var obj = {};
        obj.add_name = $("#modify_name").val();
        obj.add_cell_number = $("#modify_cell_number").val();
        obj.add_postcode = $("#modify_postcode").val();
        obj.add_address_label = $("#modify_address_label").val();
        obj.add_location_address = $("#modify_location_address").text().trim();
        obj.add_personal_address = $("#modify_personal_address").val();
        return obj;
    }
    // 修改后的数据显示到页面
    function modify_data_address(obj, index) {
        $(".address_name").eq(index).text(obj.add_name);
        $(".customer_mobile").eq(index).text(obj.add_cell_number);
        $(".describe").eq(index).text(obj.add_location_address);
        $(".describe_detail").eq(index).text(obj.add_personal_address);
    }

    // 创建地址
    function create_address(data) {
        var address_str = '<div class="customer_address left text_left">' +
            '<h4 class="address_name">' + data.add_name + '</h4>' +
            '<p class="customer_mobile">' + data.add_cell_number + '</p>' +
            '<p class="describe">' + data.add_location_address + '</p>' +
            '<p class="describe_detail">' + data.add_personal_address + '</p>' +
            '<a class="text_color modify hide">修改</a>' +
            '</div>'
        $delivery_address.prepend(address_str);
        //create_change_address();  //重新生成地址，由于数据未保存到后台，一刷新没有新增到数据
        customer_address_click();
        add_address_click();
    }

    function get_data_address(data) {
        var address_str = '';
        for (var i = 0; i < data.length; i++) {
            address_str += create_address(data[i]);
        }
    }
    // data = [{
    //     add_name: "asd",
    //     add_cell_number: "12345678901",
    //     add_location_address: "zxc",
    //     add_personal_address: "poilkjmnb"
    // }];

    get_data_address(data);
    </script>
</body>

</html>
