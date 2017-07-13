<template>
	<div id="nav">
		<mt-header :title="goods_name" class="top" fixed>
           <router-link to="" slot="left">
  	         <mt-button icon="back" @click.native="$router.go(-1)"></mt-button>
           </router-link>
           <mt-button icon="" slot="right">
           	<img src="../../assets/images/cate/share2.png" alt="" style="width:16px;text-align:right;">
           </mt-button>
        </mt-header>
	</div>
</template>

<script type="es6">
import Vue from 'vue'
export default {
	data(){
		return{

		}
	},
	props:['goods_name']
}
</script>

<style lang='scss' scoped>
#nav{
	.top{
		background: rgb(255,255,255);
		color:#888;
		font-size:16px;
		border-bottom: 1px solid #e2e2e2;
	}
}
</style>
