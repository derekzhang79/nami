<template>
	<div id="setting">
		<topHead headTitle="设置"></topHead>
		<div class="items">
      <label>账号管理</label>
      <ul>
        <li class="i-info">
          <router-link to="/personal/info" class="item">
            <span>个人资料</span>
          </router-link>
        </li>
        <li class="i-address">
          <router-link to="/personal/address" class="item">
            <span>收货地址</span>
          </router-link>
        </li>
      </ul>
      <label>关于</label>
      <ul>
        <li class="i-about">
          <router-link to="/personal/setting" class="item">
            <span>关于商城</span>
          </router-link>
        </li>
      </ul>
    </div>
      <mt-button type="danger" size="large" class="btn" @click="dologout()">退出账号</mt-button>  
	</div>
</template>

<script type="es6">
import {mapMutations} from 'vuex'
import topHead from '../../components/Head'
import {Toast} from 'mint-ui'

export default {
  name: 'setting',
  components: {
    topHead
  },
  data() {
  	return {
      
  	}
  },
  created() {
    
  },
  methods: {
    ...mapMutations(['setCurUser']), //映射方法
    dologout() {
      localStorage.removeItem('curUser')
      this.setCurUser('')
      Toast('退出成功！')
      this.$router.push('/personal')
    }
  }
}	
</script>

<style scoped lang="scss">
	#setting{
    padding-top:50px;
    .btn{
          font-size:13px;
          width: 90%;
          margin:20px auto;
          border-radius: 20px;
          border: 1px solid #e0e0e0;
    }
    .items{
      margin-top:6px;
      text-align: left;
      label{
        font-size:13px;
        margin-left:12px;
      }
      ul{
        background: #fff;
        margin: 0 0 6px 0;
        padding: 0;
        border-top: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        li{
            position: relative;
            color: rgba(0,0,0,.54);
            vertical-align: middle;
            padding-left: 12px;
            .item{
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
          }
          li:after{
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
          li:last-child .item{
              border-bottom:none;
            }
      }
    }
  }
</style>
