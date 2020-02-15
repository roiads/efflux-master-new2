import Vue from 'vue';
import router from './routes';
import grapesjs from 'grapesjs';
import ScrollReveal from 'scrollreveal';
import VueRouter from "vue-router";
import Form from "./utilities/Form";
import tooltip from 'tooltip';


require('./bootstrap');
window.grapesjs = grapesjs;
window.ScrollReveal = ScrollReveal;
window.Vue = Vue;
window.VueRouter = VueRouter;
window.Form = Form;
window.router = router;
window.tooltip = tooltip;
Vue.use(VueRouter);


Vue.component('modal', require('./components/modal.vue').default);
Vue.component('stat-box', require('./components/stat-box.vue').default);

// Vue.component('accounts-add', require('./pages/accounts/add.vue').default);
// Vue.component('accounts-overview', require('./pages/accounts/overview.vue').default);
// Vue.component('accounts-list', require('./pages/accounts/list.vue').default);
// Vue.component('accounts-table', require('./pages/accounts/table.vue').default);

// Vue.component('campaigns-add', require('./pages/campaigns/add.vue').default);
// Vue.component('campaigns-overview', require('./pages/campaigns/overview.vue').default);
// Vue.component('campaigns-list', require('./pages/campaigns/list.vue').default);
// Vue.component('campaigns-table', require('./pages/campaigns/table.vue').default);

// Vue.component('domains-add', require('./pages/domains/add.vue').default);
// Vue.component('domains-overview', require('./pages/domains/overview.vue').default);
// Vue.component('domains-list', require('./pages/domains/list.vue').default);
// Vue.component('domains-table', require('./pages/domains/table.vue').default);
// Vue.component('domains-subdomains', require('./pages/domains/subdomains.vue').default);

// Vue.component('pages-add', require('./pages/pages/add.vue').default);
// Vue.component('pages-overview', require('./pages/pages/overview.vue').default);
// Vue.component('pages-editor', require('./pages/pages/editor.vue').default);
// Vue.component('pages-table', require('./pages/pages/table.vue').default);
// Vue.component('pages-list', require('./pages/pages/list.vue').default);

// Vue.component('payments-add', require('./pages/payments/add.vue').default);
// Vue.component('payments-overview', require('./pages/payments/overview.vue').default);
// Vue.component('payments-list', require('./pages/payments/list.vue').default);
// Vue.component('payments-table', require('./pages/payments/table.vue').default);

// Vue.component('users-add', require('./pages/users/add.vue').default);
// Vue.component('users-overview', require('./pages/users/overview.vue').default);
// Vue.component('users-list', require('./pages/users/list.vue').default);
// Vue.component('users-table', require('./pages/users/table.vue').default);


const app = new Vue({
  el: '#app',
  router
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
$(document).on('click','a.social-auth',function(event){
  event.preventDefault();
  alert('Sorry!\nSocial Oauth Not yet enabled...');
});
