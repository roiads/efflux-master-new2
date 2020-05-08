require('./bootstrap');
import Vue from 'vue';
window.Vue = Vue;
import {
  BootstrapVue,
  BootstrapVueIcons
} from 'bootstrap-vue';
const Highcharts = require('highcharts');
import Vuelidate from 'vuelidate';
import VueRouter from "vue-router";
import router from './routes';
import grapesjs from 'grapesjs';
import "grapesjs-preset-webpage";
import VeeValidate from 'vee-validate'
// import tinymce from 'tinymce';
Vue.use(VueRouter);
Vue.use(Vuelidate);
Vue.use(Highcharts);
Vue.use(BootstrapVue);
Vue.use(BootstrapVueIcons);
Vue.use(VeeValidate);
const files = require.context('../views/', true, /\.vue$/i)
files.keys().map(function (key) {
  var name = files(key).default.name || key.replace(/.*\/([a-zA-Z0-9\-]+)\.(vue)$/, '$1');
  Vue.component(name, files(key).default)
});

const app = new Vue({
  el: '#app',
  router
});