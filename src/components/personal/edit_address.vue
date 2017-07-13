<template>
<div class="consignee">
	<div class="editor">
	<form action="">
		<div class="input">
			<span class="title">收货人</span>
			<input type="text"  placeholder="真实姓名" v-model="addressInfo.consignee">
		</div>
		<div class="input">
			<span class="title">手机号码</span>
			<input type="text"  placeholder="11位手机号" v-model="addressInfo.phone_num">
		</div>
		<div class="input">
			<span class="title">详细地址</span>
			<input type="text"  placeholder="详细收货地址" v-model="addressInfo.address">
		</div>
		<div class="input">
			<span class="title">备注</span>
			<input type="text"  placeholder="备注" v-model="addressInfo.ps">
		</div>
		</form>
		<mt-button type="primary" size="large" class="btn" @click="doUpdate(type)">保存</mt-button>
	</div>
</div>
</template>

<script type="es6">
import {Toast} from 'mint-ui'
import Vue from 'vue'

export default {
	data() {
		return {
             addressInfo: {
                 consignee: '',
                 phone_num: '',
                 address: '',
                 ps: ''
             }
		}
	},
	props:['type'],
	created() {
		if(this.type=='edit') {
          let Uinfo = {'id': this.$route.query.id}
          Vue.http.jsonp('/api/mobile/address/editInfo', {params: Uinfo}).then(rtn=>{
              this.addressInfo = rtn.data
          })
		}
      
	},
	methods: {
           doUpdate(type){
           	if(type=='edit'){
           		Vue.http.jsonp('/api/mobile/address/updateInfo', {params: this.addressInfo}).then(rtn=>{
                    if(rtn.data==1) {
                    	Toast('保存成功')
                    	this.$router.go(-1)
                    }else {
                    	Toast('保存失败')
                    }
                })
           	}else if(type=='new') {
           		// this.addressInfo.user_id = this.$route.query.user_id
           		let Uinfo = {'user_id': this.$route.query.user_id, 'consignee': this.addressInfo.consignee, 'address': this.addressInfo.address, 'phone_num': this.addressInfo.phone_num, 'ps': this.addressInfo.ps}
           		Vue.http.jsonp('/api/address/create', {params: Uinfo}).then(rtn=>{
                    if(rtn.data==1) {
                    	Toast('保存成功')
                    	this.$router.go(-1)
                    }else {
                    	Toast('保存失败')
                    }
                })
           	}
           }
		}
}
</script>

<style scoped lang="scss">
.consignee{
  .editor{
  	padding-top:40px;
	.input{
		background:#fff;
		text-align: left;
		.title{
			font-size:14px;
			display:inline-block;
			width: 25%;
			padding-left:10px;
		}
		input{
			display:inline-block;
			width: 73%;
			height: 40px;
			font-size:14px;
			border:none;
			margin-bottom:0;
		}
	}
	.btn{
		font-size:16px;
		width: 90%;
		margin: 10px auto;
		background:#FF5722;
	}
  }	
}
</style>
