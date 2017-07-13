<template>
<div id="register">
	<topHead headTitle="注册纳米账号"></topHead>
	<form action="" class="input">
		<input type="text" placeholder="手机号" v-model="username" :class="{'bg-red':rightphone}" @keyup="checkphone()">
		<div class="code_box">
			<input type="text" placeholder="请输入验证码" v-model="vcode">
			<mt-button type="default button" class="codebtn" size="small">获取验证码</mt-button>
		</div>
		<div class="pswInput">
			<input type="password" placeholder="密码" v-model="password" v-if="!isShow" :class="{'bg-red':rightpsw}" @keyup="checkpsw()">
			<input type="text" placeholder="密码" v-model="password" v-if="isShow" :class="{'bg-red':rightpsw}" @keyup="checkpsw()">
	      	<mt-switch v-model="isShow" class="showPsw"></mt-switch>
		</div>   
	    <mt-button type="primary" size="large" class="btn" @click="doReg()">注册</mt-button>
	</form>
	</div>
</template>

<script type="es6">
import {mapMutations} from 'vuex'
import topHead from '../../components/Head'
import {sendReg} from '../../service/sendApi.js'
import {Toast} from 'mint-ui'
import Vue from 'vue'
export default {
  name: 'register',
  components: {
    topHead
  },
  data() {
  	return {
      username:null,
      password:null,
      isShow:false,
      vcode:null,
      rightphone:false,
      rightpsw:false
  	}
  },
  created() {
    
  },
  methods:{
    ...mapMutations(['setCurUser']), //映射方法
    checkphone() {
    	if(!/^1\d{10}/.test(this.username)){
    		this.rightphone = true;
    	}else{
    		this.rightphone = false;
    	}
    },
    checkpsw() {
    	if(this.password.length>=6 && this.password.length<=12){
    		this.rightpsw = false;
    	}else{
    		this.rightpsw = true;
    	}
    },
    doReg() {
    	if(!this.rightphone && !this.rightpsw){
    		var userInfo = {'username': this.username,
          'password': this.password,
          'vcode': this.vcode}
          Vue.http.jsonp('http://localhost/nami/src/api/public/user/create', {params: userInfo}).then(rtn => {
        if (Number(rtn.data.msg) === 1) {
          localStorage.setItem('curUser',JSON.stringify(rtn.data))
          this.setCurUser(rtn.data)
          Toast('注册成功！')
          this.$router.push('./personal')
        } else {
          Toast('该用户已注册')
        }
      })
     }
   }
  }
}
</script>

<style lang="scss" scoped>
    #register{
    	padding-top:50px;
    	.input{
    		input{
    			font-size:12px;
    			border:none;
    			border-bottom: 1px solid #ccc;
    			background:#efeff4;
    			width:90%;
    			border-radius: 0;
    		}
    		.code_box{
    			position: relative;
    			.codebtn{
    					position: absolute;
		    			top:0;
		    			right:12px;
		    			font-size:12px;
    			}
    		}
    		.pswInput{
    				position: relative;
					.showPsw{
		    			position: absolute;
		    			top:0;
		    			right:12px;
    				}
    			}
    		.btn{
    			font-size:13px;
    			width: 90%;
    			margin:0 auto;
    			background:#FF5722;
          border-radius: 20px;
    		}
    }
}

.bg-red{
	color:#f56869;
}
</style>
