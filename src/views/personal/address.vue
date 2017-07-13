<template>
	<div id="address">
		<topHead headTitle="管理地址"></topHead>
		<ul>
			<li v-for="(addressInfo,index) in address_list">
				<div class="top" @click="setAddInfo(addressInfo)">
					<span class="consignee">{{addressInfo.consignee}}</span>
					<span class="phone_num">{{addressInfo.phone_num}}</span>
					<span class="ps">[{{addressInfo.ps}}]</span>
					<a href="javascript:;" class="del" @click="del(addressInfo.id,index)">
					<img src="../../../static/buycar-images/delete.png">
					</a>
				</div>
				<router-link :to="'/personal/address/editaddress?id='+addressInfo.id" class="item">
				<div class="bottom">
					<span class="address">{{addressInfo.address}}</span>
				</div>
				</router-link>
			</li>
		</ul>
		 <router-link :to="'/personal/address/newaddress?user_id='+curUser.id" class="btn">新建地址</router-link>
	</div>
</template>

<script type="es6">
import topHead from '../../components/Head'
import {Toast} from 'mint-ui'
import {mapState, mapMutations} from 'vuex'
import Vue from 'vue'

export default {
  name: 'address',
  components: {
    topHead
  },
  data() {
  	return {
      address_list: ''
  	}
  },
  created() {
  	let Uinfo = {'user_id': this.curUser.id}
    Vue.http.jsonp('/api/mobile/address/getAddressList', {params: Uinfo}).then(rtn=>{
        this.address_list = rtn.data;
    })
  },
  computed: {
    ...mapState(['curUser'])
  },
  methods: {
  	...mapMutations(['setAddressInfo']),
    del(id,index){
    	let Uinfo = {'id': id}
    	 Vue.http.jsonp('/api/mobile/address/delAddress', {params: Uinfo}).then(rtn=>{
             if(rtn.data==1){
             	Toast('删除成功')
             	this.address_list.splice(index,1)
             }
      })
    },
    setAddInfo(info){
        this.setAddressInfo(info)
        this.$router.go(-1)
    }
  }
}	
</script>

<style scoped lang="scss">
#address{
	padding:40px 0;
	a{
		color:#333;
	}
	ul{
		li{
			width: 95%;
			margin:8px auto 0;
			border:1px solid #e0e0e0;
			background:#fff;
			text-align: left;
			font-size:13px;				
				.top{
					padding:8px 6px;
					border-bottom:1px solid #e0e0e0;
					.consignee{
						color:#FF5722;
					}
					.phone_num{
						margin-left:10px;
					}
					.ps{
						margin-left:5px;
						color:#FF5722;
					}
					.del{
						float:right;
						img{
							width: 20px;
						}
					}
				}
				.item{
					font-size:13px;
					position: relative;
					display:block;
					.bottom{
						padding:8px 25px 8px 6px;
						.address{
							word-break:break-all;
						}
					}
					.bottom:after{
		                content: "";
					    position: absolute;
					    right: 10px;
					    top:50%;
					    width: 9px;
					    height: 9px;
					    border-left: 1px solid #333;
					    border-top: 1px solid #333;
					    transform: translate3d(0,-50%,0) rotateZ(135deg);
					    -webkit-transform: translate3d(0,-50%,0) rotateZ(135deg);
					}
			}
		}
	}
	.btn{
		display:block;
		position: fixed;
		bottom:0;
		z-index:999;
		width: 100%;
		height: 40px;
		line-height: 40px;
		background:#FF5722;
		color:#fff;
		font-size:15px;
	}
}
</style>
