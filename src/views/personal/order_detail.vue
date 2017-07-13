<template>
	<div id="order_detail">
		<topHead headTitle="订单详情"></topHead>
		<div class="content">
			<div class="head">
				<div>订单状态：{{order_detail.status}}</div>
				<div>订单编号：{{order_detail.sn}}</div>
			</div>
			<ul class="good_list">
                <li v-for="good in order_detail.goods">
                  <div class="good">
                    <img :src="'/api/'+good.goods_image" alt="">
                    <div class="good_info">
                    	<span class="good_name">{{good.goods_name}}</span>
                    	<p>{{good.goods_ver}} {{good.goods_color}}</p>
                    </div>
                    <div class="price">￥{{good.goods_price}}<p>× {{good.num}}</p></div>
                  </div>
                  
                </li>
			</ul>
			<div class="money">
				<div class="money_list">
					<div class="money_detail">
						<span>订单金额：</span>
						<span>￥{{order_detail.goods_price}}</span>
					</div>
					<div class="money_detail">
						<span>配送费用：</span>
						<span>￥{{order_detail.carry_price}}</span>
					</div>
				</div>
				<div class="total">
					<span>应付金额：</span>
					<span>￥{{order_detail.total_price}}</span>
				</div>
			</div>
			<div class="order_info">
				<div class="info_detail">
					<span>下单日期：</span>
					<span>{{order_detail.date}}</span>
				</div>
				<div class="info_detail">
					<span>订单编号：</span>
					<span>{{order_detail.sn}}</span>
				</div>
				<div class="info_detail">
					<span>收货人：</span>
					<span>{{order_detail.consignee}}</span>
				</div>
				<div class="info_detail">
					<span>电话号码：</span>
					<span>{{order_detail.phone_num}}</span>
				</div>
				<div class="info_detail">
					<span>收货地址：</span>
					<span>{{order_detail.address}}</span>
				</div>
				
			</div>
			<div class="action">
				<mt-button type="primary" class="btn" v-if="order_detail.status=='待付款'" @click="pay()">
				  去付款
				</mt-button>
				<mt-button type="primary" class="btn"  v-if="order_detail.status=='待收货'" @click="confirm()">确认收货</mt-button>
				<mt-button type="primary" class="btn"  v-if="order_detail.status=='已收货'">申请售后</mt-button>
			</div>
		</div>
	</div>
</template>

<script type="es6">
import {mapMutations} from 'vuex'
import topHead from '../../components/Head'
import {baseUrl} from '../../service/config'
import Vue from 'vue'
import {Toast, Indicator} from 'mint-ui'

export default {
  name: 'order',
  components: {
    topHead
  },
  data() {
  	return {
      order_detail: ''
  	}
  },
  created() {
  	let order_id = this.$route.query.id;
      Vue.http.jsonp(baseUrl+'mobile/order/detail/id/'+order_id).then(rtn => {
        this.order_detail = rtn.data;
      })
  },
  methods: {
    confirm(){
        Indicator.open();
    	let id = this.order_detail.id
    	Vue.http.jsonp(baseUrl+'mobile/order/confirm/id/'+id).then(rtn => {
    		Indicator.close();
         if(rtn.data==1){
            Toast('确认收货成功,感谢购买')
            this.$router.go(-1)
         }
      })
    },
    pay(){
    	let id = this.order_detail.id
    	this.$router.push({path: '/pay', query:{'order_id': id}})
    }
  }
}	
</script>

<style scoped lang="scss"> 
#order_detail{
	padding-top:40px;
	.head{
		background: url("../../assets/images/personal/bg_0425a88.png") center 0 #f37d0f;
   		background-size: auto 100%;
    	padding: 15px 14px;
    	overflow: hidden;
    	text-align: left;
    	font-size:13px;
    	color:#fff;
	}
	.good_list{
		margin-top:8px;
		background:#fff;
          		li{
                  padding:9px 14px;
                  border-bottom: 1px solid #e0e0e0;
                  overflow: hidden;
                  .good{
                  	
                  	text-align: left;
                    display: flex;
                    align-items:center;
					flex-direction: row;
                      img{
                      	  flex:1;
                          width:50px;
                      }
                      .good_info{
                      	flex:2;
                      	.good_name{
                       font-size:12px;           
                      }
                      p{
                      	font-size:12px;
                      }
                      }
                      .price{
                    	flex:1;
                    	text-align: right;
                        font-size:13px;
                         p{
                      	font-size:13px;
                      	color:#333;
                      }
                    }
                      
                    }
                    
                  }
    }
    .money{
    	margin-top:8px;
		background:#fff;
		.money_list{
			padding:9px 14px;
			font-size:13px;
			border-bottom: 1px solid #e0e0e0;
			.money_detail {
				overflow: hidden;
				span:first-child{
					float:left;
				}
				span:last-child{
					float:right;
				}
			}
		}
		.total{
			padding:9px 16px;
			font-size:15px;
			color:#FF5722;
			overflow: hidden;
			span:first-child{
					float:left;
				}
			span:last-child{
					float:right;
			}
		}
    }
	.order_info{
				margin-top:8px;
				background:#fff;
				padding:9px 14px;
				font-size:13px;
				.info_detail{
					overflow: hidden;
					span:first-child{
						float:left;
						width: 30%;
						text-align: left;
					}
					span:last-child{
						float:right;
						width: 70%;
						text-align: right;
					}
				}
		}
	.action{
		margin-top:8px;
		background:#fff;
		padding:9px 14px;
		font-size:13px;
		text-align: right;
		.btn{
			font-size:15px;
			background:#FF5722;
			a{
				font-size:15px;
				color:#fff;
			}
		}
	}
}
</style>
