<template>
<div id="list">
	<section class="page05" v-for="newadd in newadd_data">
			<img :src="'/api/' + newadd.newadd_img">
		</section>
		
		
</div>
</template>
<script type="es6">
import Vue from 'vue'
import {Axios} from '../../service/config'
export default {
	name:'list',
	data(){
		return{
			newadd_data:'',
		}
	},
	created(){
		Axios.get('/api/newadd').then( rtnD => {
			
  		 this.newadd_data = rtnD.data
  		 
  	})
	}
}
</script>
<style lang="scss" scoped>
	.page05{
			width: 100%;
			margin:5px 0px; 
			overflow: hidden;
			img{
		width: 100%;
			}
	}
	.page06{
	width: 100%;
	
	overflow: hidden;
		img{
		width: 100%;
		}
	}
</style>
