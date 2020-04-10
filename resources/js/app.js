require('./bootstrap');

// Framework Stuff for Vue
import Vue from 'vue';
window.Vue = Vue;
import Vuex from 'vuex';
window.Vuex = Vuex;
import VueRouter from "vue-router";
window.VueRouter = VueRouter;
import router from './routes';
window.router = router;
import store from './store.js';
window.store = store;

// Bootstrap Vue Components
import {
  BootstrapVue,
  BootstrapVueIcons,
  BIconFileSpreadsheet
} from 'bootstrap-vue';

// Grapes JS - Wysiwyg Editor
import grapesjs from 'grapesjs';
window.grapesjs = grapesjs;

// Forms Utility for simple validation and redirects
import Form from "./utilities/Form";
window.Form = Form;

Vue.use(VueRouter);
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)

const files = require.context('./', true, /\.vue$/i)
files.keys().map(function (key) {
  var name = files(key).default.name || key.replace(/.*\/([a-zA-Z0-9\-]+)\.(vue|js)$/, '$1');
  Vue.component(name, files(key).default)
})

const app = new Vue({
  el: '#app',
  router
});