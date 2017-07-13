<template>
	<div id="editaddress">
		<topHead headTitle="编辑地址信息"></topHead>
		<edit_address type="edit"></edit_address>
	</div>
</template>

<script type="es6">
import topHead from '../../components/Head'
import edit_address from '../../components/personal/edit_address'

export default {
  name: 'editaddress',
  components: {
    topHead,
    edit_address
  },
  data() {
  	return {
      
  	}
  },
  created() {
    
  }
  
}	
</script>

<style lang="scss" scoped>
	
</style>
