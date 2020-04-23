require('./bootstrap')
import Vue from 'vue'
window.Vue = Vue

import {
  BootstrapVue,
  BootstrapVueIcons
} from 'bootstrap-vue'

import VueTableDynamic from 'vue-table-dynamic'

import VueRouter from "vue-router"
import router from './routes'

Vue.use(VueRouter);
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)
Vue.use(VueTableDynamic)
const files = require.context('../views/', true, /\.vue$/i)
files.keys().map(function (key) {
  var name = files(key).default.name || key.replace(/.*\/([a-zA-Z0-9\-]+)\.(vue)$/, '$1');
  Vue.component(name, files(key).default)
});

const app = new Vue({
  el: '#app',
  router
});