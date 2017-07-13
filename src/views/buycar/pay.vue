<template>
    <div id="pay">
    	<topHead headTitle="支付页面"></topHead>
    	<div class="paying">
    		<label for="">支付密码</label>
            <input type="password" placeholder="请输入支付密码">
            <mt-button type="primary" size="large" class="btn" @click="pay()">确认支付</mt-button>
    	</div>
    	
    </div>
</template>

<script type="es6">
import topHead from '../../components/Head'
import {Axios} from '../../service/config'
import {Toast, Indicator} from 'mint-ui'

export default {
  components: {
    topHead
  },
  data () {
    return {
      
    }
  },
  methods:{
     pay() {
     	Indicator.open();
     	let info = {'id': this.$route.query.order_id}
        Axios({
              url:'/api/mobile/order/finPay',
              method:'post',
              data: info
           }).then(rtn=>{
      	          Indicator.close();
           	if(rtn.data==1){
                Toast('支付成功，尽快为您发货')
                this.$router.push('/buycar')
           	}
           	    
           })
     }
  }
}
</script>

<style lang="scss" scoped>
#pay{
	padding-top:40px;
	.paying{
		margin-top:10px;
	input[type="password"]{
        margin-top:10px;
        font-size:14px;
        text-align: center;
	}
	.btn{
		width: 90%;
		margin:auto;
		background:#FF5722;
		font-size:14px;
	}
}
}
</style>
