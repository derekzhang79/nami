<template>
	<div id="cell">
        <section class="page07">
        	<ul class="page07-list mui-row">
        		<li class="mui-col-xs-6" v-for="(cell,index) in cell_data" v-if="index >= 0 && index < 6 ">
        			<img :src="'/api/' + cell.goods_image">
        			<h3>{{cell.goods_name}}</h3>
        			<h4>{{cell.pro_gitf}}</h4>
        			<p>￥{{cell.goods_price}}<span>{{cell.start}}</span></p>
        		</li>
        		
        		
        	</ul>
        </section>
	</div>
</template>
<script type="es6">
import Vue from 'vue'
import {Axios} from '../../service/config'
export default {
	name:'cell',
	data(){
		return{
		cell_data:''	

			
		}
	},
	created(){
		Axios.get('/api/search').then( rtnD => {
			
  		 this.cell_data = rtnD.data
  		 
  	})
	}

}
</script>
<style type="scss" scoped>
*{margin: 0;padding: 0}
	.page07{
		width: 100%;
		overflow: hidden;
		background: #fff;
		margin: 5px 0;
	}
	.page07 .page07-list{
		width: 100%;
		overflow: hidden;
		background: #fff;	
		}
	.page07 .page07-list li > h3,h4,p{
		font-size: 12px;
		background: #fff;
		text-align: left;

	}
	.page07 .page07-list li h3{margin-top:10px;text-overflow : ellipsis;
				white-space : nowrap;
				overflow : hidden; 
				width: 80%;
				rows:2;}
	.page07 .page07-list li h3,h4{
		font-size: 12px;margin-left:10px; 
	}
	.page07 .page07-list li p{color: #e58335;    margin-left: 10px;}
	.page07 .page07-list li p span{
		color:#ccc;
		text-decoration:line-through;
				margin-left: 10px;
	}
	.page07 .page07-list li h4{color: #757575;
							    width: 80%;
							white-space : nowrap;
							overflow : hidden;
							font-size: 12px;
							
				text-overflow: ellipsis;
    
    			display: -webkit-box;
                -webkit-line-clamp: 2;
               -webkit-box-orient: vertical;
                word-break: break-all;
				
								}
	.page07 .page07-list li img{
				width: 99%;
		} 
</style>
