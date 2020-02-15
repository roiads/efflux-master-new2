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
    path: '/spend*',
    component: require('./pages/spend').default
  },{
    path: '/campaigns*',
    component: require('./pages/campaigns').default
  },{
    path: '/reports*',
    component: require('./pages/reports').default
  }
];
import VueRouter from 'vue-router';
export default new VueRouter({
  base: '/admin/',
  mode: 'history',
  routes, 
  linkActiveClass: 'active'
});
