require('./bootstrap');

import Vue from 'vue';
window.Vue = Vue;

import Vuex from 'vuex'
window.Vuex = Vuex;

import router from './routes';
window.router = router;

import grapesjs from 'grapesjs';
window.grapesjs = grapesjs;

import ScrollReveal from 'scrollreveal';
window.ScrollReveal = ScrollReveal;

import VueRouter from "vue-router";
window.VueRouter = VueRouter;

import Form from "./utilities/Form";
window.Form = Form;

import tooltip from 'tooltip';
window.tooltip = tooltip;

import store from './store.js'
window.store = store;

Vue.use(VueRouter);
Vue.component('crumbs', require('./components/crumbs.vue').default);
Vue.component('tbar', require('./components/tbar.vue').default);

Vue.component('modal', require('./components/modal.vue').default);
Vue.component('stat-box', require('./components/stat-box.vue').default);

const app = new Vue({
  el: '#app',
  router,
  store
});




