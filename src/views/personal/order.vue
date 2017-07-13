<template>
	<div id="order">
		<topHead headTitle="我的订单"></topHead>
		<div class="section">	
    <mt-navbar v-model="active" class="nav">
        <mt-tab-item id="tab1">全部</mt-tab-item>
        <mt-tab-item id="tab2">待付款</mt-tab-item>
        <mt-tab-item id="tab3">待收货</mt-tab-item>
      </mt-navbar>		
		   <mt-tab-container v-model="active" swipeable class="tab">
        <mt-tab-container-item id="tab1">
        <div class="nothing" v-if="order_list==''">
         <div class="img">
           <img src="../../assets/images/personal/buycar.png" alt="">
         </div>
         <p>你还没有订单</p>
        </div>
        <ul class="order_list">
          <li class="order" v-for="order in order_list">
          <router-link :to="'order/order_detail?id='+order.id">
            <div class="item-1">
                <span class="date">{{order.date}}</span>
                <span class="status">{{order.status}}</span>
              </div>
              <ul class="item-2">
                <li v-for="good in order.goods">
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
              <div class="item-3">
                <span class="quantity">
                  共{{order.goods_num}}件商品 合计：
                </span>
                <span class="total">
                  ￥{{order.total_price}}
                </span>
              </div>
          </router-link>
            </li>
          </ul>
          </mt-cell>
        </mt-tab-container-item>
        <mt-tab-container-item id="tab2">
        <div class="nothing" v-if="pay_list==''">
         <div class="img">
           <img src="../../assets/images/personal/nav-1_f74ca94.png" alt="">
         </div>
         <p>你还没有待付款订单</p>
        </div>
          <ul class="order_list">
          <li class="order" v-for="order in pay_list">
          <router-link :to="'order/order_detail?id='+order.id">
            <div class="item-1">
                <span class="date">{{order.date}}</span>
                <span class="status">{{order.status}}</span>
              </div>
              <ul class="item-2">
                <li v-for="good in order.goods">
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
              <div class="item-3">
                <span class="quantity">
                  共{{order.goods_num}}件商品 合计：
                </span>
                <span class="total">
                  ￥{{order.total_price}}
                </span>
              </div>
          </router-link>
            </li>
          </ul>
        </mt-tab-container-item>
        <mt-tab-container-item id="tab3">
        <div class="nothing" v-if="delivery_list==''">
         <div class="img">
           <img src="../../assets/images/personal/nav-2_a05a641.png" alt="">
         </div>
         <p>你还没有待收货订单</p>
        </div>
          <ul class="order_list">
          <li class="order" v-for="order in delivery_list">
          <router-link :to="'order/order_detail?id='+order.id">
            <div class="item-1">
                <span class="date">{{order.date}}</span>
                <span class="status">{{order.status}}</span>
              </div>
              <ul class="item-2">
                <li v-for="good in order.goods">
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
              <div class="item-3">
                <span class="quantity">
                  共{{order.goods_num}}件商品 合计：
                </span>
                <span class="total">
                  ￥{{order.total_price}}
                </span>
              </div>
          </router-link>
            </li>
          </ul>
        </mt-tab-container-item>
      </mt-tab-container> 
	</div>
 </div>
</template>

<script type="es6">
import {mapMutations} from 'vuex'
import Vue from 'vue'
import topHead from '../../components/Head'
import { TabContainer, TabContainerItem, Navbar } from 'mint-ui';
import {baseUrl} from '../../service/config'

Vue.component(TabContainer.name, TabContainer);
Vue.component(TabContainerItem.name, TabContainerItem);
Vue.component(Navbar.name, Navbar);


export default {
  name: 'order',
  components: {
    topHead
  },
  data() {
  	return {
      active: '',
      order_list: [],
      pay_list: [],
      delivery_list: []
  	}
  },
  created() {
    let id = JSON.parse(localStorage.getItem('curUser')).id;
      Vue.http.jsonp(baseUrl+'mobile/order/index/id/'+id).then(rtn => {
        this.order_list = rtn.data;
        this.order_list.forEach(item=>{
          if(item.status=='待付款'){
            this.pay_list.push(item)
          }else if(item.status=='待收货'){
            this.delivery_list.push(item)
          }
        })
      })
  },
  beforeRouteEnter  (to, from, next) {
     next(vm => {
       vm.active='tab'+to.query.t
       
    })
    
  },
  methods: {
    
  }
}	
</script>

<style scoped lang="scss">
#order{
	padding-top:40px;
  .section{
      .nav{
        border-bottom: 1px solid #e0e0e0;
        width: 100%;
        margin: 0;
        padding: 0;
        .mint-tab-item{
          padding:10px 0;
          color:#888;
          .mint-tab-item-label{
            font-size:14px;
          }
        }
        .mint-tab-item.is-selected{
          color:#FF5722;
          border-bottom: 1px solid #FF5722;
          margin-bottom:0;
        }
      }
      .tab{
        .mint-tab-container-item{
          min-height:480px;
          .mint-cell{
            margin-top:8px;
          }
          .nothing{
            .img{
              margin:30px 0;
              img{
                 width: 25%;
              }
            }
          }
          .order_list{
            .order{
              margin-top:8px;
              background:#fff;
              .item-1{
                padding:10px 14px;
                overflow: hidden;
                border-bottom: 1px solid #e0e0e0;
                .date{
                  font-size:12px;
                  float:left;
                  color:#888;
                }
                .status{
                  float:right;
                  font-size:14px;
                  color:#FF5722;
                }
              }
              .item-2{
                li{
                  padding:10px 14px;
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
              .item-3{
                padding:10px 14px;
                text-align: right;
                .quantity{
                  font-size:12px;
                  color:#888;
                }
                .total{
                  color:#000;
                  font-size:16px;
                }
              }
            }
          }
        }
      }
  }
}
</style>
