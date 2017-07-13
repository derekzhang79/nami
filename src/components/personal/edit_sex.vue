<template>
	<div class="editor">
		<ul class="input">
			<li class="male" @click="selectSex(1)"><span v-if="sex=='male'"></span>男</li>
			<li class="female" @click="selectSex(0)"><span v-if="sex=='female'"></span>女</li>
		</ul>
		<mt-button type="primary" size="large" class="btn" @click="doUpdate(id)">确定</mt-button>
	</div>
</template>

<script type="es6">
import Vue from 'vue'
import {Toast} from 'mint-ui'
	export default {
	data() {
		return {
           sex: ''
		}
	},
	props: ['sex','id'],
	methods: {
		doUpdate(id) {
            let Uinfo = {'sex': this.sex, 'id': id, 'type': 'sex'}
            Vue.http.jsonp('/api/mobile/user/updateInfo', {params: Uinfo}).then(rtn=>{
             
                 if(rtn.data==1){
		    		Toast("修改成功")
                 }
                
              })
           },
		selectSex(value) {
			if(value==1){
				this.sex = 'male'
			}else{
				this.sex = 'female'
			}
          
		}
	}	
}

</script>

<style scoped lang="scss">
	.editor{
	.input{
		li{
			position: relative;
			background: #fff;
			padding:10px 30px;
			text-align: left;
			font-size:13px;
			span{
				position: absolute;
				left:10px;
				top:50%;
			    width: 9px;
			    height: 9px;
			    border-left: 2px solid #FF5722;
			    border-top: 2px solid #FF5722;
			    transform: translate3d(0,-50%,0) rotateZ(135deg);
			    -webkit-transform: translate3d(0,-50%,0) rotateZ(135deg);
			}
		}
		.male{
			border-bottom: 1px solid #e0e0e0;
		}

	}
	.btn{
		font-size:16px;
		width: 90%;
		margin:auto;
		background:#FF5722;
		margin-top:15px;
	}
}	
</style>
