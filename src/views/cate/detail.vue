<template>
	<div>
		<div class="page-product-view" data-log="商品详情">
		 		<nav_list :goods_name="goodsDetail.goods_name" v-if="isNav"></nav_list>
		 		<div class="top_nav" v-if="!isNav">
		 			<div @click="$router.go(-1)" class="back">
		 				<img src="../../assets/images/cate/back.png" alt="">
		 			</div>
		 			<div class="share">
		 				<img src="../../assets/images/cate/share.png" alt="">
		 			</div>
		 		</div>
		 	<div class="product-view"  >
		 		
				<mt-swipe :auto="4000">
  				<mt-swipe-item><img :src="'/api/'+goodsDetail.pic_1"></mt-swipe-item>
  				<mt-swipe-item><img :src="'/api/'+goodsDetail.pic_2"></mt-swipe-item>
  				<mt-swipe-item><img :src="'/api/'+goodsDetail.pic_3"></mt-swipe-item>
				</mt-swipe>
			
				<div class="goods-format" ref="detail">
					<h3 class="title">{{ goodsDetail.goods_name }}</h3>
					<p class="description"><span>【下单立减300元，还享分期免息】</span>{{goodsDetail.goods_deta}}</p>
					<p class="price">￥{{price}}</p>
				</div>
				<div class="goods-format" @click="showPopup()">
					<p class="format-name">已选</p>
					<p>{{goodsDetail.goods_name}} {{version}} {{color}}</p>
					<span class="format-arrow">></span>
				</div>
				<div class="goods-format">
					<p class="format-name">促销</p>
					<div class="sub"><span>满减</span></div>
					<p>米mix 128GB版本下单立减300元</p>
					<span class="format-arrow">></span>
				</div>
				<div class="goods-format">
					<img src="../../../static/images/detail_addres.png"></img>
					<span>北京北京市东城区永定门外街道</span>
					<p>有现货</p>
					<span class="format-arrow">></span>					
				</div>
				<div class="goods-format">
					<p class="format-name">选购配件</p>
					<p>耳机、移动电源</p>
					<span class="format-arrow">></span>
				</div>


				<!-- 详细参数 -->
				
				<div class="attr" id="attr" ref="nav2">
						<mt-navbar v-model="selected" :class="{'nav2_fixed':nav2_fixed}">
					  	<mt-tab-item id="1">概述</mt-tab-item>
					  	<mt-tab-item id="2">参数</mt-tab-item>
					 	<mt-tab-item id="3">意外险</mt-tab-item>
					    </mt-navbar>
					
					<!-- tab-container -->
					<mt-tab-container v-model="selected">
					  <mt-tab-container-item id="1">
					    <li><img :src="'/api/'+goodsDetail.pic_1" alt=""></li>
					    <li><img :src="'/api/'+goodsDetail.pic_2" alt=""></li>
					    <li><img src="../../../static/images/detail-banner-3.png"></li>
					    <li><img src="../../../static/images/detail-banner-3.png"></li>
					  </mt-tab-container-item>

					  <mt-tab-container-item id="2">
					    <li><img src="../../../static/images/recom-2.png"></li>
					    <li><img src="../../../static/images/recom-2.png"></li>
					    <li><img src="../../../static/images/recom-3.png"></li>
					    <li><img src="../../../static/images/recom-3.png"></li>
					  </mt-tab-container-item>

					  <mt-tab-container-item id="3">
					    <li><img src="../../../static/images/save.png"></li>
					  </mt-tab-container-item>
					</mt-tab-container>
				</div>
				
				 <div class="mui-content">
				 	<p class="recom">为你推荐</p>
				    <div class="mui-row">
				        <div class="mui-col-xs-6">
				            <li class="mui-table-view-cell">
				                <a class="mui-navigate-right">
				                    <img src="../../../static/images/recom.png">
				                    <p>小米NOte</p>  
				                    <p><span>￥</span>3399</p> 
				                </a>
				            </li>
				        </div>
				        <div class="mui-col-xs-6">
				            <li class="mui-table-view-cell">
				                <a class="mui-navigate-right">
				                    <img src="../../../static/images/recom-1.png"> 
				                    <p>小米NOte</p>  
				                    <p><span>￥</span>3399</p> 
				                </a>
				            </li>
				        </div>
				        <div class="mui-col-xs-6">
				            <li class="mui-table-view-cell">
				                <a class="mui-navigate-right">
				                    <img src="../../../static/images/recom-1.png">
				                    <p>小米NOte</p>  
				                    <p><span>￥</span>3399</p> 
				                </a>
				            </li>
				        </div>
				        <div class="mui-col-xs-6">
				            <li class="mui-table-view-cell">
				                <a class="mui-navigate-right">
				                    <img src="../../../static/images/recom.png">
				                    <p>小米NOte</p>  
				                    <p><span>￥</span>3399</p> 
				                </a>
				            </li>
				        </div>
				    </div>
				</div>			

				<!-- 底部 -->
				<div class="detail-foot">
					<router-link to="/"><img src="../../../static/images/home.png"></router-link>
					<router-link to="/buycar"><img src="../../../static/images/buycar.png">{{ cartList.length }}</router-link>
					<div class="detal-addCat" @click="addCar()"><span>加入购物车</span></div>
				</div>


				<!-- 购物弹出框 -->

                <mt-popup
                 v-model="popupVisible"
                  position="bottom" style="width:100%;">
                  <div class="buy-tip">
					<div class="info">
						<div class="info-img"><img :src="'/api/'+goodsDetail.goods_image"></div>
						<div class="info-detail">
							<span>￥{{price}}</span>
							<p>{{goodsDetail.goods_name}} {{version}} {{color}}</p>
						</div>
					</div>
					<div class="version main-specs">
						<p class="specTitle">版本</p>
						<div class="specs">
							<button v-for="(goods_info,index) in goodsDetail.goods_info" @click="cho_ver(index,'version')" :class="{active:ver_active==index}">{{goods_info.goods_ver}}</button>
						</div>
					</div>
					<div class="color main-specs">
						<p class="specTitle">颜色</p>
						<div class="specs">
							<button v-for="(color_info,index) in choVer.goods_color" @click="cho_ver(index,'color')" :class="{active:color_active==index}" :disabled="color_info.store==0">{{color_info.goods_color}}</button>
						</div>
					</div>
					<div class="modal-foot">
					  <div class="detal-addCat" @click="addCar()"><span>加入购物车</span></div>
				    </div>
				</div>
                   </mt-popup>

		 	</div>
		</div>
	</div>

</template>

<!-- <script src="../../assets/font_o8quapjvdeha1yvi/iconfossssnt.js"></script> -->
<script type="es6">
import Vue from 'vue'
import nav_list from '../../components/cate/nav'
import { mapMutations,mapState } from 'vuex'
import { Navbar, TabItem ,Toast,selected, Popup} from 'mint-ui';
import { Axios } from '../../service/config'

Vue.component(Navbar.name, Navbar);
Vue.component(TabItem.name, TabItem);
Vue.component(Popup.name, Popup);

		


export default {
	data () {
		return{
			selected:'2',
			scroll:'',
			goodsDetail:'',
			isNav:false,
			detailT:'',
			nav2_fixed:false,
			nav2T:'',
			popupVisible:false,
			version: '',
			color: '',
			price: '',
			ver_active: '0',
			color_active: '0',
			choVer:''
		}
	},
	computed:{
		...mapState(['cartList'])
	},
	mounted() {
      window.addEventListener('scroll', this.navTop)
    },
	created(){
		Axios.get('/api/goods/'+this.$route.query.id).then(rtnData=>{
			this.goodsDetail = rtnData.data;
			this.choVer = this.goodsDetail.goods_info[0];
			this.version = this.choVer.goods_ver;
			this.color = this.choVer.goods_color[0].goods_color;
			this.price = this.choVer.goods_price;
            this.detailT = this.$refs.detail.offsetTop;
            this.nav2T = this.$refs.nav2.offsetTop;
            this.navTop();
		})
	},
	
	components:{
		nav_list
	},
	methods: {
		...mapMutations(['setCar']),

		addCar(){
			let goodsInfo = {'goods_id': this.goodsDetail.id, 'goods_image': this.goodsDetail.goods_image, 'goods_name': this.goodsDetail.goods_name, 'goods_price': this.price, 'goods_ver': this.version, 'goods_color': this.color}
			let has = false
			//判断carList 是否存在数据  如果存在添加的商品不能与已存在商品一样
			if (this.cartList.length > 0) {
				this.cartList.forEach( item => {
					if(item.goods_id==goodsInfo.goods_id && item.goods_ver==goodsInfo.goods_ver && item.goods_color==goodsInfo.goods_color){
						Toast('购物车已存在该商品')
						has = true
					}	
				})
			}
			if (!has) {
				
				this.$set(goodsInfo, 'num', 1)
				this.setCar(goodsInfo)
				Toast('成功加入购物车')
			}
			this.popupVisible = false
			//当属性是后来新增加的时候，使用$set设置数据响应  
			//在一开始添加数据的地方为期添加get 和set 属性
			
		},
		navTop() {
        this.scroll = document.body.scrollTop;
        if (this.scroll < this.detailT-40) {
        	this.isNav=false
        }else {
        	this.isNav=true
        }
        if(this.scroll > this.nav2T-40) {
        	this.nav2_fixed = true
        }else {
        	this.nav2_fixed = false
        }
      },
      showPopup(){
         this.popupVisible = true
      },
      cho_ver(index,data){
      	if(data=='version'){
      		this.ver_active = index;
      		this.choVer = this.goodsDetail.goods_info[index];
            this.version = this.choVer.goods_ver;
            this.price = this.choVer.goods_price;
            this.color_active = 0;
            this.color = this.choVer.goods_color[0].goods_color;          
      	}else{
            this.color_active = index;
            this.color = this.choVer.goods_color[index].goods_color;
          }  		
      	}
   		
	}

}
</script>

<style lang='scss' scoped>
span, p, h1,h2,h3, h4, h5,ul{ margin: 0;padding:0; }
li{list-style: none;}
.mint-tabbar.is-fixed{ display: none;}

.fixd{
        position:fixed;
        top:0px;
    }

    .nav2_fixed{
    	position: fixed;
    	width: 100%;
    	top:40px;
    	left:0;
    	z-index:999;
    }

	.page-product-view {
    background:#ffffff;
    margin: 0 auto;
    text-align: left;
        .top_nav{
        	position: fixed;
        	top:0;
        	left:0;
        	z-index:999;
        	width: 100%;
        	overflow: hidden;
            div{
            	width: 20px;
            	height: 20px;
            	text-align: center;
            	margin:10px 10px;
            	img{
            		width: 100%;
            		vertical-align: middle;
            	}
            }
            .back{
            	float:left;
            }
            .share{
            	float:right;
            }
            
        }
		.product-view {
			position: relative;
    		width:100%;
    		padding-bottom: 40px;
			.mint-swipe {
				max-height: 800px;
				height: 110vw;
		  		width: 100%; 
		  		.mint-swipe-indicator{
		  			width: 15px;
		  			height: 15px;
		  			background: white;
		  			opacity: 0.3;
		  			display: inline-block;
		  		}
		  		.mint-swipe-indicators{
		  			bottom:12px;
		  		}
		  		
		  		.mint-swipe-item{
		  			height: 100%;
		  			img{width: 100%; }
		  		}
		  		.mint-swipe-indicator.is-active{
		  			opacity: 0.7;
		  		}		  		
		  	
			}

			/* 商品规格 */
			.goods-format{
				padding:16px;
				border-bottom: 1px solid #efeff0;
				overflow: hidden;
				.title{
					color:#212121;
					font-size: 17px;
					font-weight: normal;
				}
				.description{
					font-size: 12px;
					line-height: 20px;
					color: #9c9c9c;
					span{
						color: #f56702;
					}
				}
				.price{
					color: #f56702;
					font-size: 20px;
					margin-top: 12px;
				}
				+.goods-format{
					padding: 14px;
					border-bottom: 10px solid #efeff0;
					position: relative;
					.format-name{
						font-size: 14px;
						color: #9c9c9c;
					}
					p{
						font-size: 14px;
						color: #212121;
					}
					.sub{												
						
						span{font-size: 14px;border: 1px solid #f56702;
						color: #f56702;
                        padding:2px;
					    }
					}
					.format-arrow{
						position: absolute;
						top: 50%;
						right: 15px;
						font-size: 20px;
						color: #ddd;
						margin-top:-10px;
					}
					img{
						width: 15px; 
						height:15px;
						+span{
							font-size: 14px;
							+p{
								margin-left: 19px;
								font-size: 15px;
								color: #f56702;
							}
						}
						
					}
				}
				
			}

			/* 产品概述，属性 */

			.attr{
				width: 100%;
				padding-bottom: 20px;
				border-bottom: 15px solid #efeff0;				
				.mint-navbar {
					border-bottom: 0;
					color: #26a2ff;
					.mint-tab-item{
						color: #333;
						text-decoration: none;
						.mint-tab-item-label{
							font-size: 22px;
							text-decoration: none;
						}
						+a div{border-left: 1px solid #e5e5e5;}
					}					
					.mint-tab-item.is-selected{
						color: #f56702;
						border-bottom:0;
					}
				}
				div.mint-tab-container-item {
					li {
						margin-top: -1px;
						img{ width: 100%}}
				}
			}

			/* 推荐产品 */
			.mui-content{
				background: #fff;
				margin-bottom: 30px;
				.recom{ font-size: 15px;color:#333;padding:10px 15px;}
				.mui-table-view-cell{padding:0;}
				.mui-navigate-right {
					margin-bottom: 10px;
					img{width: 100%;}
					p{
						margin-left:15px;
						font-size: 14px;
						color: #212121;
			            
						+p{
							color: #ff6000;
							span{
								font-size: 15px;
							}
						}
					}
				}
				.mui-navigate-right:after{
					content:'';
				}
			}

			/* foot */
			.detail-foot{
				position: fixed;
				bottom:0;
				left: 0;
				right: 0;
				background: #fff;
				display: flex;
				flex-flow: row wrap;

				a{
					padding:8px 0;
					text-align: center;
					width:80px;
					/*height: 100%;*/
					img{width: 25px;
					}
					
				}
				a:first-child{
					border-right: 1px solid #e8e8e8;
				}
				div{
					box-flex: 1;
    				flex: 1;
    				height: 48px;
    				background-color: #FF5722;
    				color: #fff;
    				text-align: center; 
    				font-size: 14px;   
    				line-height:48px;				
     				
    			}

			}

			/* 选择购买数量  提示框  */
			.buy-tip{
				width: 100%;
				padding:12px;
				padding-bottom: 48px;
				.info{
					border-bottom:1px solid #f4f4f4;
					display: -webkit-flex;
					display: flex;
					align-items:center;
					flex-direction: row;
					/*padding:10px 0;*/
					min-height: 70px;
		          .info-img{
		          	flex:1;
		          	margin-top:-40px;
		          	border:1px solid #f4f4f4;
		          	border-radius: 2px;
		          	background: #fff;
		          	img{
		          		width: 100%;
		          		height: 80px;
		          	}
		          }
		          .info-detail{
		          		margin-left:5px;
		          		flex:2;
		          		display: -webkit-flex;
					    display: flex;
					    flex-direction: column;
		          		span{
		          			color:#f56600;
		          		}
		          		p{
		          			color:#333;
		          			font-size:12px;
		          		}
		          	}
				}
				.main-specs{
					border-bottom: 1px solid #f4f4f4;
					padding:8px 0;
					.specTitle{
						font-size:12px;
						color:#333;
					}
					.specs{
                        button{
                        	border: 1px solid #f4f4f4;
                        	font-size:13px;
                        	color:#333;
                        	padding:5px 12px;
                        	border-radius: 2px;
                        }
                        button:first-child{
                            margin:0;
                        }
                        button.active{
                        	border: 1px solid #f56600;
                        	color:#f56600;
                        }
                        button:active{
                        	background: none;
                        }
					}
				}
				.version{
					.specs{
					button{  
						display: block;
						margin-top:15px;
					}
					button:first-child{
                            margin:0;
                        }
                    }
				}
				.color{
					button{
						display: inline-block;
                        margin-left:10px;
					}
					button:first-child{
                            margin:0;
                        }
				}
				.modal-foot{
				position: absolute;
				bottom:0;
				left: 0;
				right: 0;
				background: #fff;
				display: flex;
				flex-flow: row wrap;
				.detal-addCat{
					box-flex: 1;
    				flex: 1;
    				height: 48px;
    				background-color: #FF5722;
    				color: #fff;
    				text-align: center; 
    				font-size: 14px;   
    				line-height:48px;				
     				
    			}

			}
			}
		}		
	}
	
	
</style>
