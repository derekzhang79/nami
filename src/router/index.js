import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

let router = new Router({
  routes: [
    {
      path: '/',
      component: require('../views/home/index')
    },
    {
      path: '/search',
      component: require('../views/home/search')
    },
    {
      path: '/cate',
      component: require('../views/cate/index')
    },
    {
      path: '/detail',
      component: require('../views/cate/detail')
    },
    {
      path: '/buycar',
      component: require('../views/buycar/index')
    },
    {
      path: '/bill',
      component: require('../views/buycar/bill'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/pay',
      component: require('../views/buycar/pay'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal',
      component: require('../views/personal/index')
    },
    {
      path: '/login',
      component: require('../views/personal/login')
    },
    {
      path: '/register',
      component: require('../views/personal/register')
    },
    {
      path: '/personal/setting',
      component: require('../views/personal/setting'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal/info',
      component: require('../views/personal/info'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal/info/editInfo',
      component: require('../views/personal/editInfo'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal/order',
      component: require('../views/personal/order'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal/order/order_detail',
      component: require('../views/personal/order_detail'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal/address',
      component: require('../views/personal/address'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal/address/newaddress',
      component: require('../views/personal/newaddress'),
      meta: {
        requireLogin: true
      }
    },
    {
      path: '/personal/address/editaddress',
      component: require('../views/personal/editaddress'),
      meta: {
        requireLogin: true
      }
    }
  ]
})

router.beforeEach((to, from, next) => {
  if (to.meta.requireLogin) {
    let curUser = localStorage.getItem('curUser')
    if (curUser) {
      next()
    } else {
      next({
        path: '/login'
      })
    }
  } else {
    next()
  }
})

export default router
