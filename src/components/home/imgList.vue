<template>
<div>
	<ul class="page09" id="imglist">
		<li class="mui-row">
			<div class="mui-col-xs-6" v-for="theme in theme_data">
				<img :src="'/api/' + theme.theme_img" alt="">
			</div>
			<!-- <div class="mui-col-xs-6">
				<img src="../../../static/images/pubicity02.png">
				</div>
		
			<div class="mui-col-xs-6 ">
				<img src="../../../static/images/pubicity02.png">
				</div>
			
			<div class="mui-col-xs-6">
				<img src="../../../static/images/pubicity02.png">
			</div>
		
			<div class="mui-col-xs-6">
				<img src="../../../static/images/pubicity02.png">
			</div>
			<div class="mui-col-xs-6">
				<img src="../../../static/images/pubicity02.png">
			</div> -->
		</li>
	</ul>
	<div class="mui-col-xs-12 footer"><img src="../../assets/images/add-title01.jpg"></div>
</div>
</template>
<script type="es6">
import Vue from 'vue'
import {Axios} from '../../service/config'
export default {
	name:'imglist',
	data(){
		return{
			theme_data:'',
		}
	},
	created(){
		Axios.get('/api/theme').then( rtnD => {
			
  		 this.theme_data = rtnD.data
  		 
  	})
	},
	
}
</script>
<style lang="scss" scoped>
	.page09{
		width: 100%;overflow: hidden;background: #fff;margin-bottom: 0px;
		li{
			img{
				width: 99%;
			}
		}
	}

	.footer img{ width: 100%; }
</style>
