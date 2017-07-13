<template>
<div id="titleBlock">
	<section class="page10" v-for="(goods,index) in goods_data" v-if="index == 0">
		<h3>品质生活</h3>
		<img :src="'/api/' + goods.goods_image">
		<ul class="mui-row">
			<li class="mui-col-xs-9">
				<h4>{{goods.goods_name}}</h4>
				<p>{{ goods.goods_deta }}</p>
			</li>
			<li class="mui-col-xs-3">
				<span>￥{{ goods.goods_price }}起</span>
			</li>

		</ul>
		<!-- <ul class="mui-row">
			<li class="mui-col-xs-10">
				<h4>红米4X</h4>
				<p>超长续航，5*舒适单手握感，骁龙8核处理器</p>
			</li>
			<li class="mui-col-xs-2">
				<span>￥699起</span>
			</li>

		</ul> -->
	</section>
	
		
</div>
</template>
<script type="es6">
import Vue from 'vue'
import {Axios} from '../../service/config'
export default {
	name:'titleBlock',
	data(){
			return{
				goods_data:''
			}
	},
	created(){
		Axios.get('/api/search').then( rtnD => {
			
  		 this.goods_data = rtnD.data
  		 
  	})
	}

}
</script>
<style lang="scss" scoped>

.page10{
	width: 100%;overflow: hidden;background: #fff;margin:5px 0;
	h3{color: #464646;background: #fff;padding: 5px;text-align: left;font-size:16px;}
	img{width: 100%;}
	ul{
		li{
			span{color: #ff6000;font-size: 10px;margin-top: 10px;display: block;margin-right: 10px;}
			p{color: #757575;
				
				
				
				overflow : hidden; 
				text-overflow: ellipsis;
    
    			display: -webkit-box;
                -webkit-line-clamp: 1;
               -webkit-box-orient: vertical;
                word-break: break-all;}
			h4,p{font-size: 12px;text-align: left;width: 90%;margin: auto;}
			h4{color: #272727;margin-top: 10px;}
		}
	}
}
</style>
