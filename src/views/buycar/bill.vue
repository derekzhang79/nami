<template>
	<div>
    <topHead headTitle="用户结算" class="header"></topHead>

		<!-- <div class="address">
			<mt-cell v-if="addressList.length==0"
  				title="添加地址"
  				to="/address"
  				is-link
  				>
			</mt-cell>
       <div class="select-address" v-for="(address,index) in addressList">
          <div>
              <span>{{ address.dname }}</span><span>{{ address.dphone }}</span>
              <p>{{ address.dintroduction }}</p>
              <img src="../../../static/buycar-images/delete.png" class="del-ad" @click="delad(index)">
              <router-link :to="'/add-address/'+index"><img class="edit-ad" src="../../../static/buycar-images/right-icon.png"></router-link>
          </div>
           
      </div>
		</div> -->
    <div class="address">
      <mt-cell
            v-if="addressInfo==''"
            title="选择收货地址"
            to="/personal/address"
            is-link
            >
        </mt-cell>  
      <div class="select-address" v-if="addressInfo!=''">
          <div>
              <span>{{ addressInfo.consignee }}</span><span>{{ addressInfo.phone_num }}</span>
              <p>{{ addressInfo.address }}</p>
              <router-link to="/personal/address"><img class="edit-ad" src="../../../static/buycar-images/right-icon.png"></router-link>
          </div>
      </div>
    </div>
		<ul class="pay mui-table-view mui-table-view-radio">

			<li class="mui-input-row mui-radio" v-for="(pay,index) in pay">
				<img :src='pay.pay_icon'>
				<label>{{ pay.pay_name }}</label>
        <input name="radio1" type="radio">
			</li>
    
		</ul>
		<div class="rule">
			<a>*查看支付活动规则</a>
				
			
		</div>
		

		<div class="others">
			<mt-cell
  				title="快速配送(满90包邮)"
  				
  				>
			</mt-cell>
			<mt-cell
  				title="电子发票"
  				
  				>
			</mt-cell>
		</div>

		<div class="goods">
			<ul class="mui-table-view">
    			<li class="mui-table-view-cell mui-media" v-for="goods in buyList">
        			<div>
            			<img class="mui-media-object mui-pull-left"  :src="'/api/'+goods.goods_image">
            			<div class="mui-media-body">
                			<span class="c1"> {{ goods.goods_name }}{{ goods.goods_ver }}{{ goods.goods_color }}</span>
                			<span class="c3">×{{ goods.num  }}</span>
                			<span class="c2">{{ goods.goods_price  }}元</span>
             			</div>
        			</div>
    			</li>
    
			</ul>
		</div>

    <div class="price">
      <div class="goods_price">
        商品价格：
        <span>{{goods_price}}元</span>
      </div>
      <div class="carry_price">
        配送费用：
        <span>{{carry_price}}元</span>
      </div>
      <div class="discount">
        折扣：
        <span>0元</span>
      </div>
    </div>


		<div class="footer">
			<div class="mui-content">
    			<div class="mui-row">
        			<div class="mui-col-sm-5 mui-col-xs-5">
                    	<span>应付金额:</span><span>￥{{ goods_price + carry_price }}元</span>
        			</div>
        			<div class="mui-col-sm-7 mui-col-xs-7">
        				<div class="go-buy">
                  <button @click="createOrder()" :disabled="!addressInfo">去付款</button>
        				</div>
        			</div>
    			</div>
			</div>
		</div>


	</div>
</template>

<script type="es6">
import { mapState,mapMutations } from 'vuex'
import {Axios} from '../../service/config'
import topHead from '../../components/Head'
import {Toast} from 'mint-ui'
// Vue.component(Radio.name, Radio);

export default {
  components: {
    topHead
  },
  data () {
    return {
      addAddre:false,
      receive:{
          address:'',
          mobile:'',
          name:'',
      },
      pay: [
      {pay_icon:'../../../static/buycar-images/weixin.png',pay_name:'微信'},
      {pay_icon:'../../../static/buycar-images/zhifubao.png',pay_name:'支付宝'},
      {pay_icon:'../../../static/buycar-images/xiaomipay.png',pay_name:'小米钱包'},
      {pay_icon:'../../../static/buycar-images/yinlian.png',pay_name:'银联在线付款'}
      ],
      
      
    }
  },
  created() {
    this.addressInfo = ''
  },
  computed: {
      ...mapState(['buyList','addressInfo','cartList']),//映射 


        totalNum: function (){
            let num = 0;
            this.buyList.forEach( item => {
                num += item.num
            })
            return num
        },

        goods_price:function() {
          let gPrice=0;
          this.buyList.forEach( item =>{
             gPrice += Number(item.goods_price)*Number(item.num);
          })
          
          return gPrice;
        },

        carry_price:function() {
          let gPrice=0;
          this.buyList.forEach( item =>{
             gPrice += Number(item.goods_price)*Number(item.num);
          })
          if(gPrice<90){
            return 10;
          }else{
            return 0;
          }
        }
  },

  methods:{
    createOrder(){
      let user_id = JSON.parse(localStorage.getItem('curUser')).id
      let orderInfo = {'user_id': user_id, 'goods_num': this.totalNum, 'goods_price': this.goods_price, 'carry_price': this.carry_price, 'consignee': this.addressInfo.consignee, 'phone_num': this.addressInfo.phone_num, 'address': this.addressInfo.address, 'buyList': JSON.stringify(this.buyList)}
      // console.log(orderInfo);
      Axios({
              url:'/api/mobile/order/newOrder',
              method:'post',
              data:orderInfo
           }).then(rtn=>{
                Toast('下单成功，请完成支付')
                this.buyList.forEach(item=>{
                  for(var i=0;i<this.cartList.length;i++){
                    if(item.goods_id==this.cartList[i].goods_id){
                      this.cartList.splice(i,1)
                      break;
                    }
                  }
                })
                this.$router.push({path: '/pay', query:{'order_id': rtn.data}})
           })

    }
  }
}
</script>

<style scoped>
.header{
  height: 2.5rem;
}
.header .mint-header {
    background-color: white;
    color: #999;
    text-align: left;
}
.header .mint-header h1{
  margin-left: -4rem;
}
.address{
  text-align: left;
  margin-top: .5rem;

}
.select-address{
  list-style: none;
  text-align: left;
  background: white;
}
.select-address div:first-child{
  border-top: 1px solid #ccc;
}
.select-address div{
  border-bottom: 1px solid #ccc;
  position: relative;
}

.select-address div span{
  margin-left: .5rem;
  font-size: .8rem; 
}
.select-address div span:first-child{
  color: #ff6700;
  
}
.select-address div p{
  width: 50%;
  margin: .5rem 0 0 .5rem;
  padding-bottom: .5rem;
}
.select-address div .del-ad{
  position: absolute;
  width: 1rem;
  top: 30%;
  right: 10%;
}
.select-address div .edit-ad{
  position: absolute;
  width: 1rem;
  top: 30%;
  right: 3%;
}
.pay{
  text-align: left;
  margin-top: 1rem;
  background: white;
  font-size: .8rem;
  position: relative;
}
.pay img{
  display: inline-block;
  height: 1rem;
  position: absolute;
  top: 25%;
  left: 2.5%;
}
.pay label{
  position: relative;
  left: 7.5%;
}
.pay .radio{
  position: absolute;
  right: -1rem;
  top: .1rem;
}

.rule{
  text-align: right;
  font-size: .6rem;
  width: 95%;
}
.rule a{
  color: #999;
}
.other{
  overflow: hidden;
}
.goods{
  margin-top:1rem;
  overflow: hidden;
}
.goods img{
  height: 50%;
}
.goods .mui-table-view .mui-media-object {
    max-width: 1.5rem;
    height: 1.5rem;
}
.mui-table-view-cell {
    position: static;
}
.goods .c1{
  font-size: .7rem;
  text-align: left;
  position: absolute;
  left: 2.8rem;
}
.goods .c3{
  font-size: .7rem;
  text-align: center;
  position: absolute; 
  right: 4rem;
  
}
.goods .c2{
  font-size: .7rem;
  text-align: right;
  position: absolute;
  right: .7rem;
}

.price{
  margin-top:1rem;
  margin-bottom:4rem;
  background: #fff;
  padding:0.7rem;
  text-align: left;
  font-size:.8rem;
}

.others{
  overflow: hidden;
  text-align: left;
}
.footer{
  position: fixed;
  width: 100%;
  margin-top: 1rem;
  bottom: 0rem;
  overflow: hidden;
  line-height: 3rem;
}
.footer .mui-content .mui-row{
  background: white;
}
.footer span{ 
  color: #ff6700; 
  font-size: .8rem;
}
.footer .go-buy button{
  width: 100%;
  height: 3rem;
  border:none;
  background: #ff6700;
  color: white;
  border-radius: 0;
}


</style>
