require('./bootstrap')
import Vue from 'vue';
window.Vue = Vue;
import Vuex from 'vuex';
window.Vuex = Vuex;
import VueRouter from "vue-router";
window.VueRouter = VueRouter;
import router from './routes';
window.router = router;
import store from './store';
window.store = store;


Vue.use(VueRouter);

const files = require.context('../views/', true, /\.vue$/i)
files.keys().map(function (key) {
  var name = files(key).default.name || key.replace(/.*\/([a-zA-Z0-9\-]+)\.(vue)$/, '$1');
  Vue.component(name, files(key).default)
})


import grapesjs from 'grapesjs'
window.grapesjs = grapesjs
import Form from './utilities/Form'
window.Form = Form


const app = new Vue({
  el: '#app',
  router
});