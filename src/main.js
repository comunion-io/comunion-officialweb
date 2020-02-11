// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'

import topnav from './components/topnav.vue'
import tabbar from './components/tabbar.vue'
import './style/global/global.css'
Vue.component('TopNav', topnav)
Vue.component('Tabbar', tabbar)
Vue.config.productionTip = false
Vue.use(ElementUI)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router: router,
  components: {
    App
  },
  template: '<App/>'
})
router.afterEach((to, from, next) => {
  window.scrollTo(0, 0)
})
