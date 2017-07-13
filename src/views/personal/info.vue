<template>
	<div id="info">
		<topHead headTitle="个人资料"></topHead>
		<div class="items">
      <ul>
        <li class="i-name">
          <router-link to="info/editInfo?e=name" class="item">
            <span>用户手机号</span>
          </router-link>
        </li>
        <li class="i-sex">
          <router-link to="info/editInfo?e=sex" class="item">
            <span>性别</span>
          </router-link>
        </li>
        <li class="i-birth" @click="openPicker">
          <router-link to="" class="item">
            <span>生日</span>
          </router-link>
        </li>
      </ul>
      <ul>
        <li class="i-psw">
          <router-link to="info/editInfo?e=psw" class="item">
            <span>修改密码</span>
          </router-link>
        </li>
      </ul>
    </div>
    <mt-datetime-picker  ref="picker" v-model="pickerVisible" :startDate="date" type="date" year-format="{value} 年" month-format="{value} 月" date-format="{value} 日" @confirm="handleConfirm">
  </mt-datetime-picker>
	</div>
</template>

<script type="es6">
import {mapMutations, mapState} from 'vuex'
import { DatetimePicker, Toast } from 'mint-ui'
import Vue from 'vue';
import topHead from '../../components/Head'
Vue.component(DatetimePicker.name, DatetimePicker);

export default {
  name: 'info',
  components: {
    topHead
  },
  data() {
  	return {
      pickerVisible: '',
      date: new Date("1970"),
      userInfo: '',
      id: ''
  	}
  },
  created() {
    
  },
  computed: {
        ...mapState(['curUser'])
  },
  methods: {
    // ...mapMutations(['setHeadTitle','setHeadUrl'])， //映射方法
    openPicker() {
      this.id = JSON.parse(localStorage.getItem('curUser')).id
      Vue.http.jsonp('/api/mobile/user/getInfo',{params:{'id':this.id}}).then(rtn=>{
          this.userInfo = rtn.data
          this.$refs.picker.open();
          this.pickerVisible = new Date(Number(this.userInfo.birth))
          console.log(this.userInfo.birth);
        })
        
      },
    handleConfirm(value) {
      let birthNum = new Date(value).getTime()
      console.log(birthNum)
      let Uinfo = {'birth': birthNum, 'id': this.id, 'type': 'birth'}
        Vue.http.jsonp('/api/mobile/user/updateInfo', {params: Uinfo}).then(rtn=>{       
          if(rtn.data==1){
            Toast("修改成功")            
          }
                
        })
    }
  }
}	
</script>

<style scoped lang="scss">
	#info{
    padding-top:50px;
    .items{
      margin-top:6px;
      text-align: left;
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
