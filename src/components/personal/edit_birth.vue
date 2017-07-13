<template>
<div class="editor">
 <ul>
            <li @click="openPicker">选择时间</li>
        </ul>
  <mt-datetime-picker  ref="picker" v-model="pickerVisible" startDate="123" type="date" year-format="{value} 年" month-format="{value} 月" date-format="{value} 日" @confirm="handleConfirm">
  </mt-datetime-picker>

</div>
</template>

<script type="es6">
import { DatetimePicker } from 'mint-ui';
import Vue from 'vue';
Vue.component(DatetimePicker.name, DatetimePicker);

export default {
	data() {
		return {
           pickerVisible: '',
           date: "Date('1990')"
		}
	},
	methods: {
        handleConfirm() {
         
        },
        openPicker() {
        this.$refs.picker.open();
      }
	}	
}
</script>

<style scoped lang="scss">
	
</style>
