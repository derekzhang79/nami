<template>
<div id="lines">

	<ul class="page08">
		<li class="mui-row" v-for="(line,index) in goods_data" v-if="index < 3">
			<div v-if="index % 2 ==0" class="mui-row">
				<div class="mui-col-xs-6">
					<img :src="'/api/' + line.goods_image">
				</div>
					<div class="mui-col-xs-6 page08-content">
				<div class="text">
					<h4>{{line.goods_name}}</h4>
				<p>{{line.pro_gitf}}</p>
				<span>￥{{line.goods_price}}</span>
				</div>
					</div>
				</div>
			<div v-if="index %2 != 0" class="mui-row">
				<div class="mui-col-xs-6 page08-content">
				<div class="text">
					<h4>{{line.goods_name}}</h4>
				<p>{{line.pro_gitf}}</p>
				<span>{{line.goods_price}}</span>
				</div>
				</div>
					<div class="mui-col-xs-6">
						<img :src="'/api/' + line.goods_image">
				</div>
			</div>
		</li>
		
	</ul>
	<div class="more"><a href="">更多米家智能产品></a></div>
</div>
</template>
<script type="es6">
import Vue from 'vue'
import {Axios} from '../../service/config'
export default {
	name:'lines',
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
	.page08{
		width: 100%;overflow: hidden;background: #fff;margin-bottom: 0px;
		li{
			div{
				div{
						.text{
				width: 80%;margin: auto;
				margin-top: 25px;
			}
			span{
				color: #e58335;font-size: 10px;
			}
			p{
				font-size: 12px;margin-bottom: 0px;
				text-overflow: ellipsis;
    				overflow : hidden; 
    			display: -webkit-box;
                -webkit-line-clamp: 2;
               -webkit-box-orient: vertical;
                word-break: break-all;
               
			}
			img{
				width: 100%; text-align:left;
			}
			h4{
				font-size: 12px;color: #212121;
			}
			.page08-content{
				text-align: left;margin-top:30px;
			}
				}
			}
		}
	}
	.more{
		background: #fff;width: 100%;color: #666666;text-align: center;overflow: hidden;
		a{color: #666666;font-size: 14px;}
	}
	/*.page08 li .text{width: 80%;margin: auto;}
	.page08 li span{color: #e58335;font-size: 10px;}
	.page08 li p{font-size: 12px;margin-bottom: 0px;}

	.page08 li img{width: 100%; text-align:left;}
	.page08 li h4{font-size: 12px;color: #212121;}
	.page08 .page08-content{text-align: left;margin-top:30px; }
	.page08-more{background: #fff;width: 100%;color: #666666;text-align: center;overflow: hidden;}
	.page08-more a{color: #666666;font-size: 14px;}*/
</style>
