<template>
<div id="search">
	<form class="mui-row">
		<div class="mui-col-xs-2"><router-link to="/" ><img src="../../../static/images/logo.png"></router-link></div>
		<div class="mui-col-xs-8 form-box">
		<input type="text" v-model="keyword" @keyup="Up()">
		</div>

		<div class="mui-col-xs-2 form-btn"><a href="javascript:;">搜索</a></div>
	</form>
	<section class="hot">
		<h3>热门搜索</h3>
		<div>
			<img src="../../../static/images/search-banner.jpg">
		</div>
	</section>
	<ul  class="search-list">
			
			<li class="mui-row" v-for="goods in goods_data" :class="{block:block}">
			  <router-link :to="'/detail?id='+goods.id" class="link">
				<div class="mui-col-xs-4"><img :src="'/api/' + goods.goods_image"></div>
				<div class="mui-col-xs-8">
					<h4>{{ goods.goods_name }}</h4>
					<p><span>{{goods.activity}}</span>{{ goods.pro_gitf }}</p>
					<h3>￥{{ goods.goods_price }}</h3>
				</div>
              </router-link>
			</li>
			
		</ul>
</div>
</template>
<script type="es6">
import Vue from 'vue'
import {Axios} from '../../service/config'
export default {
	name:'search',
	data(){
		return{
				goods_data:'',
				keyword:'',
				block:false,
			}
		},

	created(){
  	
  },
  methods: {
		Up:function(){
			
			if(this.keyword.length != 0){
				Axios.get('/api/search',{params:{keyword:this.keyword}}).then( rtnD => {
  		
  		 this.goods_data = rtnD.data;
  		 /*console.log(this.goods_data);*/
  		})
  		}else {
  			
  			 this.goods_data='';
  		}
  		 

  	
		},
		
	},
	

}
</script>
<style lang="scss" scoped>
*{margin:0;padding:0;}
body{background: #fff;}
form{
	position: fixed;
	z-index: 3333;
	background: #f37d0f;width: 100%;
	div:nth-child(1){
		   
		line-height: 30px;
		    margin-top: 5px;
		img{width:24px;}
	}
	.form-box{
		 input{
	line-height: 10px;
    width: 100%;
    height: 30px;
	margin: 5px;
	overflow-y:auto;
	border-radius: 5px;
		}
	}
	.form-btn{
		margin-top: 10px;
		a{color: #fff;padding: 5px; text-decoration: none;}
	}
}
.hot{
	width: 100%;
	overflow: hidden;
	background: #fff;
	padding-top: 40px;
	h3{
		text-align: left;
		background: #fff;
		margin:auto;
		width: 95%;
		font-size: 14px;
		padding: 5px 0;
	}
	div{
		img{
			width: 100%;
		}
	}
}
.search-list{
	width: 100%;
	overflow: hidden;
	background: #fff;
	font-style: none;
	li{
		.link{
			display:block;
		div:nth-child(2){
			
			    float:left;
			     margin-left: 10px;
			     width: 60%;
			     *{
			     	margin-top: 5px;
			     }
		}
		div{
			float:left;
			text-align: left;
			margin-top:0;
			 
			img{
				width: 100%;
			}
			h4{
				font-size: 14px;
				color:#060606;
				margin:0; 
				font-weight: normal;
			}
			p{
				font-size: 10px;
				color: #b3b3b3;
				rows:2;
				
				
				overflow : hidden; 
				text-overflow: ellipsis;
    
    			display: -webkit-box;
                -webkit-line-clamp: 2;
               -webkit-box-orient: vertical;
                word-break: break-all;
				
				span{color: #fb3600;}
			}
			h5{
				    font-size: 8px;
    				text-align: center;
    				line-height: 15px;    			
    				background: #6096b9;
    				color: #fff;
   					border-radius: 5px;
    				width: 25%;
			}
			h3{
				color: #fb3600;
			
    			margin-bottom: 10px;
    			font-size:10px;
			}
		}
	}
}
}
.ul_data{
	width: 100px;
	height: 100px;
	li{
		width: 100px;
		height: 10%;
	}
}

</style>
