<template>
	<div class="editor">
		<div class="input">
			<span class="title">当前密码</span>
			<input type="password" placeholder="请输入" v-model="curPsw">
		</div>
		<div class="input">
			<span class="title">新密码</span>
			<input type="password" placeholder="请输入" :class="{'bg-red':rightpsw}" v-model="password" @keyup="checkPsw()">
		</div>
		<div class="input">
			<span class="title">确认密码</span>
			<input type="password" placeholder="请输入" :class="{'bg-red':rightConfirm}" v-model="confirmPsw" @keyup="checkConfirm()">
		</div>
		<mt-button type="primary" size="large" class="btn" @click="doUpdate(id)" :disabled="rightpsw||rightConfirm">确定</mt-button>
	</div>
</template>

<script type="es6">
import {Toast} from 'mint-ui'
import {Axios} from '../../service/config'
export default {
	data() {
		return {
		   curPsw: '',
           password: '',
           confirmPsw: '',
           rightpsw: false,
           rightConfirm: false
		}
	},
	props:['id'],
	methods: {
		doUpdate(id) {
			let Uinfo = {'curPsw': this.curPsw, 'password': this.password, 'id': id, 'type': 'password'}
			Axios({
				url:'/api/mobile/user/updateInfo',
				method:'post',
				data:Uinfo
			}).then(rtn=>{
				console.log(rtn.data);
                if(rtn.data==1){
		    		Toast("修改成功,请重新登录")
		    		this.$router.push({path: '/login'})
		    		localStorage.removeItem('curUser')   		
		    	}else{
		    		Toast("当前密码不正确,请重新输入")
		    	}
			})
			
		},
		checkPsw() {
			if(this.password.length>=6 && this.password.length<=12 && this.curPsw!=this.password){
    		   this.rightpsw = false;
    	    }else{
    		   this.rightpsw = true;
    	    }
		},
		checkConfirm() {
			if(this.confirmPsw==this.password){
    		   this.rightConfirm = false;
    	    }else{
    		   this.rightConfirm = true;
    	    }
		}

	}	
}
</script>

<style scoped lang="scss">
.editor{
	.input{
		position: relative;
		border-bottom: 1px solid #e0e0e0;
		.title{
			font-size:14px;
			position: absolute;
			top:50%;
			margin-top:-10px;
			left:10px;
		}
			input{
				height: 40px;
				text-indent: 80px;
				font-size:14px;
				border:none;
				margin:0px;
			}
	}
	.btn{
		font-size:16px;
		width: 90%;
		margin:auto;
		background:#FF5722;
		margin-top:15px;
	}
	.bg-red{
	color:#f56869;
	}
}	
</style>
