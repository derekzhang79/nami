<template>
	<div id="editInfo">
		<topHead :headTitle="type"></topHead>
		<div class="component" v-if="edit=='name'">
			<edit_name :name="userInfo.username" :id="userInfo.id"></edit_name>
		</div>
		<div class="component" v-if="edit=='sex'">
			<edit_sex :sex="userInfo.sex" :id="userInfo.id"></edit_sex>
		</div>
		<div class="component" v-if="edit=='birth'">
			<edit_birth :id="userInfo.id"></edit_birth>
		</div>
		<div class="component" v-if="edit=='psw'">
			<edit_psw :id="userInfo.id"></edit_psw>
		</div>
	</div>
</template>

<script type="es6">
import Vue from 'vue'
import {mapMutations, mapState} from 'vuex'
import {baseUrl} from '../../service/config'
import topHead from '../../components/Head'
import edit_name from '../../components/personal/edit_name'
import edit_sex from '../../components/personal/edit_sex'
import edit_birth from '../../components/personal/edit_birth'
import edit_psw from '../../components/personal/edit_psw'

export default {
  name: 'editInfo',
  components: {
    topHead,
    edit_name,
    edit_sex,
    edit_birth,
    edit_psw
  },
  data() {
  	return {
      edit: '',
      type: '',
      userInfo: ''
  	}
  },
  created() {
    let id = JSON.parse(localStorage.getItem('curUser')).id
    Vue.http.jsonp('/api/mobile/user/getInfo',{params:{'id':id}}).then(rtn=>{
          this.userInfo = rtn.data
          this.setUserInfo(rtn.data)
        })
  },
  beforeRouteEnter  (to, from, next) {
     next(vm => {
       vm.edit=to.query.e
       if(vm.edit=='name') {
       	vm.type = '修改手机号'
       } else if(vm.edit=='sex') {
       	vm.type = '修改性别'
       } else if(vm.edit=='birth') {
       	vm.type = '修改生日'
       } else if(vm.edit=='psw') {
       	vm.type = '修改密码'
       }
    })
    
  },
  methods: {
     ...mapMutations(['setUserInfo']) //映射方法
  }
}	
</script>

<style scoped lang="scss">
#editInfo{
	padding-top:40px;
	.component{
		margin-top:8px;
	}
}
</style>
