export default {
  setHeadTitle (state, title) {
    state.headTitle = title
  },
  setCurUser (state, curUser) {
    state.curUser = curUser
  },
  getCurUser (state) {
    let curUser = JSON.parse(localStorage.getItem('curUser'))
    if (curUser) {
      state.curUser = curUser
    }
  },
  setSelected (state, selected) {
    state.selected = selected
  },
  setUserInfo (state, userInfo) {
    state.userInfo = userInfo
  },
  setbuyList (state, info) {
    state.buyList = info
  },
  setCartList (state, info) {
    state.cartList = info
  },
  setAddressInfo (state, info) {
    state.addressInfo = info
  },
  setSteps (state, steps) {
    state.steps = steps
  },
  setCar (state, goods) {
    state.cartList.push(goods)
  }
}

