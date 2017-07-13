<template>
	<div class="editor">
		<div class="input">
			<span class="title">手机号</span>
			<input type="text" :value="name" v-model="name">
		</div>
		<mt-button type="primary" size="large" class="btn" @click="doUpdate(id)">确定</mt-button>
	</div>
</template>

<script type="es6">
import {Toast} from 'mint-ui'
import Vue from 'vue'

export default {
	data() {
		return {
          name: ''
		}
	},
	props: ['name','id'],
	methods: {
		doUpdate(id) {
			let Uinfo = {'username': this.name, 'id': id, 'type': 'username'}
		    Vue.http.jsonp('/api/mobile/user/updateInfo', {params: Uinfo}).then(rtn=>{
                 
		    	if(rtn.data==1){
		    		Toast("修改成功,请重新登录")
		    		this.$router.push({path: '/login'})
		    		localStorage.removeItem('curUser')
		    		
		    	}else{
		    		Toast("该号码已存在,请重新输入")
		    	}
                
          })
		}
	}	
}
</script>

<style scoped lang="scss">
.editor{
	.input{
		position: relative;
		.title{
			font-size:14px;
			position: absolute;
			top:50%;
			margin-top:-20px;
			left:10px;
		}
		input{
			height: 40px;
			text-indent: 50px;
			font-size:14px;
			border:none;
		}
	}
	.btn{
		font-size:16px;
		width: 90%;
		margin:auto;
		background:#FF5722;
	}
}	
</style>
