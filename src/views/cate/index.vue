<template>

	<div class="menu" id="cate">
        <div class="menu-wrap">
            <div class="menu-header">
             <mt-header title="商品分类" fixed class="header_top">
               <router-link to="" slot="left">
                  <mt-button icon="back" @click.native="$router.go(-1)"></mt-button>
               </router-link>
                  <mt-button icon="search" slot="right" @click="search"></mt-button>
            </mt-header>
            </div>
           
            <div>
                <ul class="menu-two" ref="menuTwo" v-for="main in cateList">
                   <div class="section d_jump">
                          <img :src="'/api/' +main.cate_thumb" v-show="main.cate_thumb" style="width:100%">
                      </div>
                  <li v-for="menu in cate_list" v-if="menu.parent_id==main.id">
                  
                      <div class="section ">                              
                          <div name="m1" class="category_title">
                          <span>{{ menu.cate_name  }}</span>
                          </div>                
                      </div>
                  
                      
                        <div class="category_group">
                            <div class="box">
                                <div class="product" v-for="goods in menu.goods_list">
                                     <router-link :to="'/detail?id='+goods.id">
                                        <div class="img">
                                            <img :src="'/api/' + goods.goods_image">
                                        </div>
                                        <div class="name">
                                            {{ goods.goods_name }}
                                        </div>
                                    </router-link>
                                </div>                    
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        


        <div class="menu-one">
          <ul class="menu-list">
            <li v-for="(cate,index) in cateList" id="index">
              <a @click="jump(index)" :class="{active:steps.active==index}">{{ cate.cate_name }} </a>
            </li>        
          </ul>       
        </div>

    </div>



</template>

<script type="es6">
import { mapMutations,mapState } from 'vuex'
import { Axios } from '../../service/config'
import Vue from 'vue'
export default{
    name: 'cate',
    components:{
       
    },
    data(){
        return{
            cate_list: null,
            cateList: [],
             steps:{
                active:0
             },
        }       
    },

    /*  获取更新后的DOM的Vue方法    
        Vue.nextTick()回调函数中的执行的应该是会对DOM进行操作的 js代码
    */
     mounted: function () {
        // this.init();
        this.$nextTick(()=>{
          // this.$refs.two.style.height = window.screen.height + 'px'
         
          window.addEventListener('scroll', this.onScroll)
        })
    },

    computed:{
        // ...mapState(['cateList','cateTList'])
    },
    watch: {
      // '$route' : 'fetchData'
    },
    created(){
        this.setSelected('tab2');
        Axios.get('/api/cate').then( rtnData=> {
            this.cateList = rtnData.data
        }),
        this.fetchData();
        

    },
    methods:{
        ...mapMutations(['setSelected']),
        search(){
          this.$router.push('/search')
        },
        fetchData( ){
        // 获取ID
        // this.$route.params.id
        // 请求API，
        Axios.get('/api/mobile/cate/getCate').then( rtnData=>{
         
          this.cate_list = rtnData.data
          for(var i=0;i<this.$refs.menuTwo.length;i++){
              this.$refs.menuTwo[i].style.minHeight = window.screen.height-88 + 'px';           
            }
        })
        
      },
        onScroll () {
            let scrolled = document.body.scrollTop

            let oUl = document.querySelectorAll('.menu-two')
      
            for(var i=oUl.length-1;i>=0;i--){
              
              if(scrolled>=oUl[i].offsetTop-40){
                this.steps.active = i
                break;
              }
            }

        },   
        jump (index) {
            // 用 class="d_jump" 添加锚点
            let jump = document.querySelectorAll('.d_jump')
            let total = jump[index].offsetTop-40
            let distance = document.body.scrollTop
            // 平滑滚动，时长500ms，每10ms一跳，共50跳
            let step = total / 50
            if (total > distance) {
              smoothDown()
            } else {
              let newTotal = distance - total
              step = newTotal / 50
              smoothUp()
            }
            function smoothDown () {
              if (distance < total) {
                distance += step
　　　　        document.body.scrollTop = distance
                // document.documentElement.scrollTop = distance
                // window.pageYOffset = distance
                setTimeout(smoothDown, 10)
              } else {
                 document.body.scrollTop = total
                 // document.documentElement.scrollTop = total
                 // window.pageYOffset = total
              }
            }
            function smoothUp () {
                if (distance > total) {
                    distance -= step
　　　　        　　document.body.scrollTop = distance
                    // document.documentElement.scrollTop = distance
                    // window.pageYOffset = distance
                    setTimeout(smoothUp, 10)
                } else {
                    document.body.scrollTop = total
                    // document.documentElement.scrollTop = total
                    // window.pageYOffset = total
                }
            }
        }


    },
    ready(){

    }
   
}
    



</script>

<style scoped>
   .menu { width: 100%; background: #fff;}
   .menu-wrap{ width:100%;  overflow-y: auto;padding-bottom: 40px; }
   .menu-header { height: 40px; background: #f2f2f2; text-align: center; }
   .menu-header .header_top{
    background: #fff;
    color:#888;
    box-shadow: 0 1px 3px #e2e2e2;
   }
   .menu-one { position:fixed; top:40px;width: 20%; border-bottom: 0px; height:100%;  border-right: 1px solid #d9d9d9; }
   .menu-list { width: 100%;border-right: 2px solid red; margin: 0px; padding-bottom: 90px; border:0px;background-color: #ffffff;height: 100%; overflow-y: auto;  }
   .menu-list li { display:flex;list-style: none;text-align: center; }
  .menu-list li a{ text-decoration: none;font-size: 13px;color: #414141; width: 70px; padding:10px 0; display: block;width: 100%; }
  .menu-list li a.active { color: #ff6b00; font-size: 16px; }
   .menu-list::-webkit-scrollbar {display:none}


  .menu-two { width:80%;float: right;overflow: hidden; margin-left: 18%; padding: 0px 4.5%; }
   .category_title{background: #fff; font-size: 16px; text-align: center; font-weight: 600; margin: 10px 0;overflow: hidden; } 
   .category_title span{
    position: relative;
   }
   .category_title span:before{
    display:block;
    position: absolute;
    content:'';
    height: 1px;
    width: 20px;
    background: #d9d9d9;
    top:50%;
    left:-40px;
   }
   .category_title span:after{
    display:block;
    position: absolute;
    content:'';
    height: 1px;
    width: 20px;
    background: #d9d9d9;
    top:50%;
    right:-40px;
   }
   .category_group{ overflow: hidden;}
        .product {width: 33.33%; float: left; box-sizing: border-box;margin-bottom:10px; margin-top:10px; }
        .product a{display: block; color: #337ab7; text-decoration: none; text-align: center;}
        .product a .img{width:100%;text-align: center; }
        .product a .img img { transform-origin: 0px 0px 0px;vertical-align: middle; opacity: 1; transform: scale(1, 1);width: 100%; }
        .product a:hover{ text-decoration: none; }
        .product a .name{  white-space: nowrap; font-size: 14px; color:#555; margin-top: 10px; }

</style>
<!-- .col-md-8 { border: 1px solid grey; }
   .menu-list li { -moz-box-flex:1;display:flex;list-style: none;height: auto; border: 1px solid grey; text-align: center; }
   .menu-list li a { display: block; width: 70px; height: 50px; line-height: 50px;font-size: 10px; color: #414141; text-decoration:none; } -->
