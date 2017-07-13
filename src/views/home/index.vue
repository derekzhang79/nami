<template>
	<div id="index" class="page">
		<section class="nav mui-row" :class="{bgcolor:bgcolor,scroll}">
			<div class="nav-logo mui-col-xs-2"><img src="../../assets/images/nami.png"></div>
			<div class="nav-search mui-col-xs-8">
				<router-link to="/search" >
				<div class="nav-one" >
				<img src="../../assets/images/search.png"><p>纳米卡</p></div>
					</router-link>
			
			</div>
			<div class="mui-col-xs-2 nav-login" v-if="!islogin">
				<router-link to="/login">登录</router-link>
			</div>
			<div class="mui-col-xs-2 nav-login" v-if="islogin">
				<router-link to="/personal">
                   <img src="../../assets/images/user_0319ba0.png" alt="">
				</router-link>
			</div>
		</section>
		<mt-swipe :auto="3000" >
  			<mt-swipe-item v-for="advert in advert_list"><router-link to="/search" ><img :src="'/api/' + advert.banner_img" alt=""></router-link></mt-swipe-item>
		</mt-swipe>
		<section class="page03">
			<ul class="mui-row page03-content">
				<li class="mui-col-xs-3 page03-left">商城早报</li>
				<li class="mui-col-xs-1 page03-center">|</li>
				<li class="mui-col-xs-8 page03-right">
					
					<mt-swipe :auto="2000" :show-indicators="false">
  						<mt-swipe-item v-for="daily in daily_data">{{daily.daily_title}}</mt-swipe-item>
  						
  					</mt-swipe>
				</li>
			</ul>
		</section>
		<section class="page04">
			<ul class="mui-row">
				<li class="mui-col-xs-6">
					<img src="../../assets/images/ad01.png">
				</li>
				<li class="mui-col-xs-6">
					<div class="mui-col-xs-12">
						<img src="../../assets/images/ad02.png">
					</div>
					<div class="mui-col-xs-12">
						<img src="../../assets/images/ad03.png">
					</div>
				</li>
			</ul>
		</section>
		<list></list>
		<cell></cell>
		<list></list>
		<cell></cell>

		<lines></lines>
		<imglist></imglist>
		<cell></cell>
		<titleBlock></titleBlock>
		
		<Ectopic></Ectopic>
		<list></list>
</div>
		 
</template>

<script type="es6">
import list from '../../components/home/list'
import cell from '../../components/home/cell'
import lines from '../../components/home/lines'
import imglist from '../../components/home/imglist'
import titleBlock from '../../components/home/titleBlock'
import minCell from '../../components/home/minCell'
import Ectopic from '../../components/home/Ectopic'
import { Swipe, SwipeItem } from 'mint-ui'
import {Axios} from '../../service/config'
import {mapMutations} from 'vuex'
export default {
  name: 'index',
  components: {
   list,cell,lines,imglist,titleBlock,minCell,Ectopic
  },
  data(){
  	return{
  		bgcolor:true,
  		scroll: '',
  		advert_list:[],
  		cell_data:'',
  		daily_data:[],
  		goods_data:'',
        islogin: false
  	}
  },
  methods: {
  	    ...mapMutations(['setSelected']),
  		menu() {
        this.scroll = document.body.scrollTop;
        if (this.scroll < 200) {
        	this.bgcolor=false
        }else {
        	this.bgcolor=true
        }
      }
  },
  created(){
  	if(localStorage.getItem('curUser')){
  		this.islogin = true;
  	}
  	this.setSelected('tab1');
  	Axios.get('/api/advert').then( rtn => {
  		 this.advert_list = rtn.data
  	})
  
  	Axios.get('/api/daily').then( rtn => {
  		 this.daily_data = rtn.data
  	})
  	
  },
   mounted() {
      window.addEventListener('scroll', this.menu)
    },
    

}
</script>

<style lang="scss" scoped>
#index{
	padding-bottom:50px;
}

body{
	background: #f5f5f5;
}


ul li{list-style: none}

.nav{
	width: 100%;
	overflow: hidden;
	
	color: #fff;
	position: fixed;
		top:0;
		z-index: 333;
	.nav-logo{
		margin:5px 0px; 
		line-height: 30px;
		img{width:24px;}
	}
	.nav-one{
			img{
				position: absolute;
				    left: 10px;
    				width: 25px;
   					 top: 8px;
			}
			p{
			    padding: 4px;
    			margin: 5px;
    			text-align: center;
    			border-radius: 5px;
    			font-size: 8px;
    			background: #fff;
			}
	}
	.nav-login{
		     padding: 9px;
		     a{
		     	color: #fff;
		     	img{
		     		width: 15px;
		     		vertical-align: middle;
		     	}
		     }

	}

}

.page03{
	width: 100%;
	overflow: hidden;
	background: #fff;
	.page03-content{
		width: 100%;
		margin: 5px 0;
	}
		.page03-left{
			color:#e58335;
			font-weight: bold;
            font-size:15px;
		}
		.page03-right{
			color: #888;
			.mint-swipe{
					height: 20px;
				    text-align:left;
    				margin-top: 0;
    				font-size:13px;
    			}

		}
	
}
.page04{
	width: 100%;
	overflow: hidden;
	background: #f5f5f5;
	ul{
		width: 100%;
		overflow:hidden;
		margin-bottom:5px;
		
		li{
			height: 220px;
			div:nth-child(2){
				
				img{
					width:99%;
				}
			}
			img{
				width: 99%;
			}
		}

	}
}
.mint-swipe{height: 220px;overflow: hidden;}
.mint-swipe img{
	width:100%;
}
.bgcolor{background: #e58335;}
</style>
