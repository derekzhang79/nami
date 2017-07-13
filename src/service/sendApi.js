import Vue from 'vue'
import {Toast} from 'mint-ui'
export const dologin = userInfo => {
  console.log('登录成功')
}

export const sendReg = userInfo => {
  Vue.http.jsonp('http://localhost/nami/src/api/public/user/create', {params: userInfo}).then(rtn => {
    if (Number(rtn.data) === 1) {
      Toast('注册成功！')
      this.$router.push('/')
    } else {
      Toast('该用户已注册')
    }
  })
}
