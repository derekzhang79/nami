<template>
	<div>
        <section class="page11">
        	<ul class="page11-list mui-row">
        	<!-- <li class="mui-col-xs-6" v-for="info in list">
        			<img src="../../assets/images/pic-01-01.png">
        			<h3>{{ info.n }}</h3>
        			<h4>{{ info.text }}</h4>
        			<p>￥2299起<span>￥2599</span></p>
        		</li> -->
        		<li class="mui-col-xs-6">
        			<img src="../../assets/images/pic-01-01.png">
        			<h3>小米电视4A 49英寸</h3>
        			<h4>全高清/HDR，64位处理器</h4>
        			<p>￥2299起<span>￥2599</span></p>
        		</li>
        		<li class="mui-col-xs-6">
        			<img src="../../assets/images/pic-01-01.png">
        			<h3>小米电视4A 49英寸</h3>
        			<h4>全高清/HDR，64位处理器</h4>
        			<p>￥2299<span>￥2599</span></p>
        		</li>	
        		<!-- <ul class="page07-list mui-row">
        		<li class="mui-col-xs-6" v-for="(cell,index) in cell_data" v-if="index > 0 && index < 5 ">
        			<img :src="'/api/' + cell.goods_img">
        			<h3>{{cell.goods_title}}</h3>
        			<h4>{{cell.pro_gitf}}</h4>
        			<p>￥{{cell.goods_money}}<span>{{cell.start}}</span></p>
        		</li>
        		</ul> -->
        	</ul>
        </section>
	</div>
</template>

<script type="es6">
export default {
	name:'minCell',
	date(){

	},
	props:['minCell']
}
</script>

<style lang="scss" scoped>
*{margin: 0;padding: 0}
	.page11{
		width: 100%;
		overflow: hidden;
		background: #fff;
		.page11-list{
		width: 100%;
		overflow: hidden;
		background: #fff;
			li{
				*{
					font-size: 12px;
					background: #fff;
				}
				h3{margin-top: 10px;text-align: left;}
				h3,h4{
						font-size: 14px;
				}
				h3,p{margin-left: 10px;}
				p{
					color: #e58335;
					span{
						color:#ccc;
						text-decoration:line-through;
					}	
				}
				h4{color: #757575;
							text-overflow:ellipsis;
							white-space : nowrap;
							overflow : hidden;
					}
				img{
				width: 99%;
					}
			}	
		}
	}
	/*.page11 .page11-list{
		width: 100%;
		overflow: hidden;
		background: #fff;	
		}
	.page11 .page11-list li > *{
		font-size: 12px;
		background: #fff;

	}
	.page11 .page11-list li h3{margin-top: 10px;text-align: left;}
	.page11 .page11-list li h3,h4{
		font-size: 14px;
	}
		.page11 .page11-list li h3,p{margin-left: 10px;}
	.page11 .page11-list li p{color: #e58335;}
	.page11 .page11-list li p span{
		color:#ccc;
		text-decoration:line-through;
	}
	.page11 .page11-list li h4{color: #757575;
							text-overflow:ellipsis;
							white-space : nowrap;
							overflow : hidden;}
	.page11 .page11-list li img{
				width: 99%;
		} */
</style>
