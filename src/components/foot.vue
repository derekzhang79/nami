<template>
    <mt-tabbar fixed class="footer" v-model="selected">
      <mt-tab-item id="tab1">
         <router-link to="/">
         <div class="ih ispr"></div>
         <span>首页</span>
         </router-link>
         </mt-tab-item>
      <mt-tab-item id="tab2">
       <router-link to="/cate">
       <div class="ic ispr"></div>
       <span>分类</span>
       </router-link>
       </mt-tab-item>
       <mt-tab-item id="tab3">
       <router-link to="/buycar">
       <div class="ib ispr"></div>
       <span>购物车</span>
       </router-link>
       </mt-tab-item>
      <mt-tab-item id="tab4">
        <router-link to="/personal">
        <div class="ip ispr"></div>
        <span>我的</span>
        </router-link>
        </mt-tab-item>
      
    </mt-tabbar>

     
</template>

<script type="es6">
import {mapState} from 'vuex'
export default {
  data () {
    return {
      
    }
  },
  computed: {
      ...mapState(['selected'])
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.footer{
  background: #fff;
  border-top: 1px solid #e0e0e0;
  width: 100%;
  margin: 0;
  padding: 0;
  box-shadow: 0 -1px 2px #e0e0e0;
}
.footer a{
  display: block;
  font-size:12px;
  color: #999;
}
.footer .ispr {
    width: 17px;
    height: 17px;
    background: url(../assets/images/personal/spr1_5b2e09c.png);
    background-size: 100%;
    overflow: hidden;
    margin: 0px auto 4px;
}
.footer .ispr.ih {
    background-position-y: -118px;
}
.footer .ispr.ic {
    background-position-y: -17px;
}
.footer .ispr.ib {
    background-position-y: -51px;
}
.footer .ispr.ip {
    background-position-y: -85px;
}

.mint-tabbar > .mint-tab-item.is-selected{
  background: transparent;
}
.mint-tabbar > .mint-tab-item.is-selected span{
    color:#FF5722;
}
.mint-tabbar > .mint-tab-item.is-selected .ih{
    background-position-y: -102px;
}
.mint-tabbar > .mint-tab-item.is-selected .ic{
    background-position-y: 0px;
}
.mint-tabbar > .mint-tab-item.is-selected .ib{
    background-position-y: -34px;
}
.mint-tabbar > .mint-tab-item.is-selected .ip{
    background-position-y: -68px;
}
</style>
