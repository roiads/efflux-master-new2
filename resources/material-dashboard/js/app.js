//require('./bootstrap');

import Vue from 'vue'
window.Vue = Vue;

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import App from './components/App'
import router from './routes'
import store from './store'
import './plugins/base'
import './plugins/chartist'
import './plugins/vee-validate'
import './plugins/vue-world-map'
import vuetify from './plugins/vuetify'
import i18n from './i18n'


const app = new Vue({
  router,
  store,
  vuetify,
  i18n,
  render: h => h(App),
}).$mount('#app')
