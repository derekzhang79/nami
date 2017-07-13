<template>
	<div id="newaddress">
		<topHead headTitle="新建地址"></topHead>
		<edit_address type="new"></edit_address>
	</div>
</template>

<script type="es6">
import topHead from '../../components/Head'
import edit_address from '../../components/personal/edit_address'

export default {
  name: 'newaddress',
  components: {
    topHead,
    edit_address
  },
  data() {
  	return {
      
  	}
  },
  created() {
    
  },
  methods: {
    
  }
  
}	
</script>

<style lang="scss" scoped>
	
</style>
