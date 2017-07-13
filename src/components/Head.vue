<template>
<div id="Head">
	<mt-header fixed title="">
  <!-- <router-link to="" slot="left">
    <mt-button icon="back">{{ headTitle }}</mt-button>
  </router-link> -->
  <router-link to="" slot="left">
  	<mt-button icon="back" @click.native="$router.go(-1)">{{ headTitle }}</mt-button>
  </router-link>
</mt-header>
</div>
</template>

<script type="es6">
// import { mapState} from 'vuex'

export default {
	name: 'Head',
	data() {
		return {
           
		}
	},
    props: ['headTitle']
}
</script>

<style scoped lang="scss">
#Head{
	overflow: hidden;
	header{
		// background:#efeff4;
		background:#fff;
		border-bottom: 1px solid #e0e0e0;
		box-shadow: 0 1px 2px #e0e0e0;
		a{
			color:#000;
			font-size:14px;
		}
		
	}
}
</style>
