<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\wamp64\www\nami\src\api\public/../application/pc\view\order\cart.html";i:1499431724;s:82:"D:\wamp64\www\nami\src\api\public/../application/pc\view\personal\orderHeader.html";i:1499947492;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\footer.html";i:1499862757;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>购物车</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/css/cart.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__static/front-end/css/index.css">
    <script type="text/javascript" src="__PUBLIC__static/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/vue.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__static/js/axios.min.js"></script>
</head>

<body>
    <!-- head -->
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
        <div class="container">
            <div id="J_cartBox" class="cart-list">
                <div class="cart-goods-list">

                    <div class="list-head clearfix">
                        <div class="col col-check"><input type="checkbox" name="" class="icon-checkbox" v-on:click="checkAll()"  v-model="allQuan">全选</div>
                        <div class="col col-img">&nbsp;</div>
                        <div class="col col-name">商品名称</div>
                        <div class="col col-price">单价</div>
                        <div class="col col-num">数量</div>
                        <div class="col col-total">小计</div>
                        <div class="col col-action">操作</div>
                    </div>
                    <div class="list-body" id="J_cartListBody">

                        <div   class="item-box" v-for="(list,index) in cart_list">
                            <div class="item-table J_cartGoods">
                                <div class="item-row clearfix">
                                <!-- icon-checkbox-selected 添加 为选中 -->
                                <!-- <i class="iconfont icon-checkbox  J_itemCheckbox" v-model="checkedNames">√</i> -->
                                    <div class="col col-check">  
                                    <!-- 监听 value的list  选中时有list  v-on:click  v-bind:value=()  -->
                                        <input class="icon-checkbox" type="checkbox" :value="list" v-model="checkedNames">
                                    </div>

                                    <div class="col col-img">
                                        <a href="" target="_blank">
                                            <img alt="" :src="list.goods_thumb" width="106" height="70">
                                        </a>
                                    </div>
                                    <div class="col col-name">
                                        <div class="tags"> </div>
                                        <h3 class="name">  <a href="" target="_blank"> {{ list.goods_name }} </a>  </h3> </div>
                                    <div class="col col-price"> {{ list.goods_price }} </div>
                                    <div class="col col-num">
                                        <div class="change-goods-num clearfix J_changeGoodsNum"> 
                                        <a class="J_minus"><i @click="subNum(list)">-</i></a>
                                            <input tyep="text" v-model="list.num" class="goods-num J_goodsNum"> 
                                            <a class="J_plus"><i @click="addNum(list)">+</i></a>
                                            <div class="msg J_canBuyLimit">每人限购10件</div>
                                        </div>
                                    </div>

                <div class="col col-total">  {{ list.num*list.goods_price | formatPrice  }} 元
                                        <p class="pre-info"> </p>
                                    </div>
                                    <div class="col col-action"> <a @click="del(index,list.id)" id="2171400019_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="">×</i></a> </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="cart-bar clearfix" id="J_cartBar">
                    <div class="section-left">
                        <a href="__PUBLIC__pc/index/cate" class="back-shopping J_goShoping" data-stat-id="3d1e5bdd191768c8" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-3d1e5bdd191768c8', '#', 'pcpid', '']);">继续购物</a>
                        <span class="cart-total">共 <i id="J_cartTotalNum">{{ totalNum | formatNum  }}</i> 件商品，已选择 <i id="J_selTotalNum">{{ choiceNum | formatNum  }}</i> 件</span>                        
                    </div>
                    <span class="activity-money hide">
                    活动优惠：减 <i id="J_cartActivityMoney">0</i> 元
                </span>
                    <span class="total-price">
                    合计（不含运费）：<em id="J_cartTotalPrice">{{ totalPrice | formatPrice }}</em>元
                </span>
                    <a v-bind:disabled="checkedNames.length>0?false:true"  @click="submitCart()" class="btn btn-a btn btn-primary" id="J_goCheckout" data-stat-id="f975aeb3e19f0f37">去结算</a>
                    <div class="no-select-tip hide" id="J_noSelectTip">
                        请勾选需要结算的商品
                        <i class="arrow arrow-a"></i>
                        <i class="arrow arrow-b"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <script>
    $(function() {
        // 用户信息下拉框显示
        /*    $customer_show.hover(function() {
                $customer_detail.stop().slideDown(300);
                $(this).css({
                    background: 'white',
                });
            }, function() {
                $customer_detail.stop().slideUp(300);
                $(this).css({
                    background: '#333',
                });
            });*/


        new Vue({
            el: '.cart-list',
            data: {
                //问题-->页面加载先后
                cart_list: <?php echo $cart_list; ?>,// 购物车列表
                checkedNames:[],
                allQuan:false,
                uinfo:<?php echo $uinfo; ?>
            },
            /*filters: {
                formatPrice: function(value) {
                    //为value值设置小数点两位
                    return value.toFixed(2);
                }
            },*/
            computed:{
                //计算全部商品价格
                totalPrice: function () {
                    let p=0;
                    this.checkedNames.forEach(list=>{
                        p+= Number(list.num)*Number(list.goods_price); 
                    })                    
                    return p;
                },
                //选择了的商品数量
                choiceNum: function () {
                    let c =0 ;
                    this.checkedNames.forEach( list=>{
                        c += Number(list.num);
                    })
                    return c;
                },
                //显示全部商品数量
                totalNum: function () {
                    let n = 0;
                    this.cart_list.forEach(list=>{
                        n += Number(list.num);
                    })
                    return n;
                }
            },

            methods: {

                //增加商品数量
                addNum(list){

                    if (list.num < 10) {
                        list.num++;                          
                    }
                },
                //检索商品数量
                subNum(list){                    
                    if (list.num>1) {

                        list.num--;                          
                    }                    
                },
                //全选和取消
                checkAll(){
                    console.log(this.allQuan)
                    if(typeof(this.checkedNames[0])!= 'undefined' || this.allQuan==false){
                        this.checkedNames=[];
                        //有问题-->全选之后 单个取消后  点击交互相反
                        this.checkbox =! this.checkbox;

                    } else {
                        for(var i=0; i < this.cart_list.length; i++){
                            this.checkedNames.push(this.cart_list[i]);
                        }
                    }
                },
                //删除购物车 -->删除数据表???
                // 返回值 -->传递出来  -->问题
                del(index, id){                    
                    /*this.cart_list.splice(index, 1)
                    for(var i=0; i<this.checkedNames.length;i++){
                        if(id==this.checkedNames[i].id){
                            this.checkedNames.splice(i, 1)
                            //console.log(del)
                        }                         
                    }*/
                    axios({
                        url:'__PUBLIC__pc/order/delete',
                        methods:'get',
                        params:{id}
                    }).then(rtnD=>{

                        if(rtnD.data){
                            this.cart_list.splice(index, 1)

                            for(var i=0; i<this.checkedNames.length;i++){

                                if(id==this.checkedNames[i].id){

                                this.checkedNames.splice(i, 1)
                            
                                }                         
                            }
                        }
                    })                      
                },
                //判断是否登录=> 一次（ajax）多个请求，保存数据到购物车
                submitCart(){
                   //已登录
                    if(this.uinfo){

                        //存到数组
                        let idList=[];
                        for (var i =0; i< this.checkedNames.length ; i++) {
                            let num=this.checkedNames[i].num;
                            let id=this.checkedNames[i].id;                           
                            idList[i]={id,num};                            
                        }
                        //一个数组一个请求
                        if (idList.length>0) {
                            axios({
                               url:'__PUBLIC__pc/order/update',
                               methods:'get',

                               //传递过去的需要是字符串
                               params:{data:JSON.stringify(idList)}
                               
                                }).then(rtnD=>{
                                    
                                window.location.href='__PUBLIC__pc/order/order'
                            })
                        }
                        //console.log(idList);
                        
                        
                    }else {
                        window.location.href='__PUBLIC__pc/personal/login'
                        
                    }

                }

            }
        })
    })
    </script>
<script type="text/javascript" src="__PUBLIC__static/js/bootstrap.min.js"></script>

</body>

</html>
