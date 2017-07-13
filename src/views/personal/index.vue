<template>
	<div class="page-personal-center" id="personal">
		<div class="header">
			<div class="user" v-if="!curUser">
				<router-link to="/login">
					<div class="img nologin"></div>
					<div class="name">登录/注册</div>
				</router-link>
			</div>
			<div class="user" v-if="curUser">
				<router-link to="/personal/info">
					<div class="img">
						<img src="../../assets/images/personal/head-ph.jpg" alt="">
					</div>
					<div class="name">{{curUser.username}}</div>
				</router-link>
			</div>
		</div>
		<div class="a1">
			<router-link to="/personal/order?t=1" class="order">
				<span class="myorder">我的订单</span>
				<span class="more">全部订单</span>
			</router-link>
			<ul class="nav">
				<li class="dfk">
					<router-link to="/personal/order?t=2" class="item">
						<div class="icon"></div>
						<span>待付款</span>
					</router-link>
				</li>
				<li class="dsh">
					<router-link to="/personal/order?t=3" class="item">
						<div class="icon"></div>
						<span>待收货</span>
					</router-link>
				</li>
				<li class="thx">
					<router-link to="" class="item">
						<div class="icon"></div>
						<span>退换修</span>
					</router-link>
				</li>
			</ul>
		</div>
		<div class="items">
			<ul>
				<li class="i-wallet">
					<router-link to="" class="item">
						<span>我的优惠</span>
					</router-link>
				</li>
			</ul>
			<ul>
				<li class="i-service">
					<router-link to="" class="item">
						<span>服务中心</span>
					</router-link>
				</li>
				<li class="i-mihome">
					<router-link to="" class="item">
						<span>纳米之家</span>
					</router-link>
				</li>
			</ul>
			<ul>
				<li class="i-setting">
					<router-link to="/personal/setting" class="item">
						<span>设置</span>
					</router-link>
				</li>
			</ul>
		</div>
	</div>
</template>

<script type="es6">
import {mapState,mapMutations} from 'vuex'

export default {
    name: 'personal',
    data() {
        return {
            
       }
    },
    created() {
        this.getCurUser();
        this.setSelected('tab4');
    },
    computed: {
        ...mapState(['curUser'])
    },
    methods: {
    	...mapMutations(['getCurUser','setSelected'])
    }
}
</script>

<style scoped>
.page-personal-center{
	background: #f5f5f5;
    min-height: 100%;
}
.page-personal-center .header{
	background: url("../../assets/images/personal/bg_0425a88.png") center 0 #f37d0f;
    background-size: auto 100%;
    padding: 15px 0;
}
.page-personal-center .header .user{
	margin:0;
	overflow: hidden;
}
.page-personal-center .header .user .img.nologin{
	float:left;
	background: url("../../assets/images/personal/avatar_e29d6cb.png") no-repeat;
    background-size: 100% auto;
}
.page-personal-center .header .user .img{
	margin: 0 8px 0 15px;
    width: 43px;
    height: 43px;
    overflow: hidden;
    box-sizing: border-box;
    border-radius: 100%;
    float:left;
}
.page-personal-center .header .user .img img{
	width: 100%;
}
.page-personal-center .header .user .name{
	float:left;
	font-size:12px;
	color:#fff;
	line-height: 43px;
}

.page-personal-center .a1{
	overflow: hidden;
}

.page-personal-center .a1 .order{
	font-size:12px;
	color:#333;
	display:block;
	width: 100%;
	height: 35px;
	background: #fff;
	border-bottom: 1px solid rgba(0,0,0,.15);
}
.page-personal-center .a1 .order span{
	line-height:35px;
}
.page-personal-center .a1 .order .myorder{
	float:left;
	padding-left:15px;
}
.page-personal-center .a1 .order .more{
	float:right;
	padding-right:25px;
	color: rgba(0,0,0,.54);
	position: relative;
}
.page-personal-center .a1 .order .more:after {
    content: "";
    position: absolute;
    right: 10px;
    top:50%;
    width: 9px;
    height: 9px;
    border-left: 1px solid currentColor;
    border-top: 1px solid currentColor;
    transform: translate3d(0,-50%,0) rotateZ(135deg);
    -webkit-transform: translate3d(0,-50%,0) rotateZ(135deg);
}
.page-personal-center .a1 .nav{
	padding:0 36px;
	display: box;
    display: -webkit-box;
    box-align: stretch;
    -webkit-box-align: stretch;
    box-pack: justify;
    -webkit-box-pack: justify;
    margin:0;
    background: #fff;
}
.page-personal-center .a1 .nav li .item{
	display: block;
	padding:20px 0;
	text-align: center;
	color:#333;
}
.page-personal-center .a1 .nav li .item .icon{
	width: 21px;
    height: 21px;
    margin: 0 auto 10px;
}
.page-personal-center .a1 .nav li.dfk .item .icon{
	background: url(../../assets/images/personal/nav-1_f74ca94.png) no-repeat center 0;
	background-size: 100% auto;
}
.page-personal-center .a1 .nav li.dsh .item .icon{
	background: url(../../assets/images/personal/nav-2_a05a641.png) no-repeat center 0;
	background-size: 100% auto;
}
.page-personal-center .a1 .nav li.thx .item .icon{
	background: url(../../assets/images/personal/nav-4_42676a4.png) no-repeat center 0;
	background-size: 100% auto;
}
.page-personal-center .items{
	margin-top:6px;
}
.page-personal-center .items ul{
	background: #fff;
	margin: 0 0 6px 0;
	padding: 0;
}
.page-personal-center .items ul li{
	position: relative;
    color: rgba(0,0,0,.54);
    vertical-align: middle;
    padding-left: 50px;
}
.page-personal-center .items ul li:after{
	content: "";
    position: absolute;
    right: 10px;
    top:50%;
    width: 9px;
    height: 9px;
    border-left: 1px solid currentColor;
    border-top: 1px solid currentColor;
    transform: translate3d(0,-50%,0) rotateZ(135deg);
    -webkit-transform: translate3d(0,-50%,0) rotateZ(135deg);
}
.page-personal-center .items ul li .item{
	display: block;
    height: 45px;
    display: box;
    display: -webkit-box;
    box-align: center;
    -webkit-box-align: center;
    box-pack: justify;
    -webkit-box-pack: justify;
    color:#333;
    border-bottom: 1px solid rgba(0,0,0,.15);
}
.page-personal-center .items ul li:last-child .item{
	border-bottom:none;
}
.page-personal-center .items ul li.i-wallet{
    background: url(../../assets/images/personal/i-wallet_13a8fda.png) no-repeat 16px center;
    background-size: 20px auto;
}
.page-personal-center .items ul li.i-service{
	background: url(../../assets/images/personal/i-service_7b9f412.png) no-repeat 16px center;
    background-size: 20px auto;
}
.page-personal-center .items ul li.i-mihome{
	background: url(../../assets/images/personal/i-mihome_c836072.png) no-repeat 16px center;
    background-size: 20px auto;
}
.page-personal-center .items ul li.i-setting{
	background: url(../../assets/images/personal/i-setting_4ddebe5.png) no-repeat 16px center;
    background-size: 20px auto;
}

	


</style>
