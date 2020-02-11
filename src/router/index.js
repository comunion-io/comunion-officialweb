import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/views/Home'
import ComunionIntroduction from '@/views/Comunionintroduction'
import Members from '@/views/Members'
import Now from '@/views/Now'
Vue.use(Router)
let router = new Router({
  routes: [{
    path: '/home',
    name: 'Home',
    // eslint-disable-next-line no-undef
    component: Home
  }, {

    path: '/', // path 设置为 “/” ，默认显示该页面
    redirect: '/home'

  }, {
    path: '/comunionintroduction',
    name: 'Comunionintroduction',
    // eslint-disable-next-line no-undef
    component: ComunionIntroduction
  }, {
    path: '/members',
    name: 'Members',
    // eslint-disable-next-line no-undef
    component: Members
  }, {
    path: '/now',
    name: 'Now',
    // eslint-disable-next-line no-undef
    component: Now
  }]
})
export default router
