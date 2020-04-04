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
import {BootstrapVue, BootstrapVueIcons} from 'bootstrap-vue';

// Grapes JS - Wysiwyg Editor
import grapesjs from 'grapesjs';
window.grapesjs = grapesjs;

// Forms Utility for simple validation and redirects
import Form from "./utilities/Form";
window.Form = Form;

Vue.use(VueRouter);
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)

Vue.component('vue-pagination', require('./components/pagination.vue').default);
Vue.component('crumbs', require('./components/crumbs.vue').default);
Vue.component('tbar', require('./components/tbar.vue').default);
Vue.component('modal', require('./components/modal.vue').default);
Vue.component('stat-box', require('./components/stat-box.vue').default);


const app = new Vue({
  el: '#app',
  router,
  store
});