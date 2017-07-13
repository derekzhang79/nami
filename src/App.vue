<template>
  <div id="app">
  <transition name="slide-fade">
    <router-view></router-view>
  </transition>
    <foot v-if="$route.path=='/'||$route.path=='/cate'||$route.path=='/buycar'||$route.path=='/personal'"></foot>
  </div>
</template>

<script type="es6">
import foot from './components/foot'
export default {
  name: 'app',
  components: {
    foot
  }
}

</script>

<style scoped lang="scss">
@import 'assets/css/mixin.scss';
#app {
  font-family: '微软雅黑', 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

</style>
