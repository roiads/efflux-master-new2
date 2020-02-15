let routes = [{
    path: '/dashboard',
    component: require('./pages/dashboard').default
  },{
    path: '/users*',
    component: require('./pages/users').default
  },{
    path: '/accounts*',
    component: require('./pages/accounts').default
  },{
    path: '/domains*',
    component: require('./pages/domains').default
  },{
    path: '/payments*',
    component: require('./pages/paymentMethods').default
  },{
    path: '/campaigns*',
    component: require('./pages/campaigns').default
  },{
    path: '/reports*',
    component: require('./pages/reports').default
  },{
    path: '/pages*',
    component: require('./pages/pages').default
  }
];
import VueRouter from 'vue-router';
export default new VueRouter({
  base: '/admin/',
  mode: 'history',
  routes, 
  linkActiveClass: 'active'
});
