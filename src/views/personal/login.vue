<template>
<div id="login">
	<topHead headTitle="登陆纳米账号"></topHead>
	<form action="" class="input">
		<input type="text" placeholder="纳米账号/手机号/电子邮箱" v-model="username">
		<div class="pswInput">
			<input type="password" placeholder="密码" v-model="password" v-if="!isShow">
			<input type="text" placeholder="密码" v-model="password" v-if="isShow">
	      	<mt-switch v-model="isShow" class="showPsw"></mt-switch>
		</div>   
	    <mt-button type="primary" size="large" class="btn" @click="dologin()">登录</mt-button>
	</form>
	<div class="register">
		<router-link to="/register">注册账户</router-link>
		<a href="">忘记密码</a>
	</div>
</div>
	
		
</template>

<script type="es6">
import {mapMutations} from 'vuex'
import topHead from '../../components/Head'
import {Toast} from 'mint-ui'
import Vue from 'vue'
import {baseUrl} from '../../service/config'
export default {
  name: 'login',
  components: {
    topHead
  },
  data() {
  	return {
      username:null,
      password:null,
      isShow:false
  	}
  },
  created() {

  },
  methods:{
    ...mapMutations(['setCurUser']), //映射方法
    dologin() {
    	var userInfo = {'username': this.username,'password': this.password}
      Vue.http.jsonp(baseUrl+'user/read', {params: userInfo}).then(rtn => {
        if (Number(rtn.data.msg) === 1) {
          localStorage.setItem('curUser',JSON.stringify(rtn.data))
          this.setCurUser(rtn.data)
          Toast('登录成功！')
          this.$router.push('./personal')
        } else {
          Toast('用户名或密码错误')
        }
      })
    }
  }
}
</script>

<style lang="scss" scoped>
    #login{
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
    .register{
    	width: 90%;
    	margin:10px auto;
    }
    .register a:first-child{
    	color:#333;
    	float:left;
    }
    .register a:last-child{
    	color:#333;
		float: right;
    }
}
</style>
