let routes = [
  {path: '/dashboard',component: require('./pages/dashboard').default},
  {path: '/users*',component: require('./pages/users').default},
  {path: '/profiles*',component: require('./pages/profiles').default},
  {path: '/accounttypes*',component: require('./pages/accounts').default},
  {path: '/accounts*',component: require('./pages/accounts').default},
  {path: '/payments*',component: require('./pages/payments').default},
  {path: '/domains*',component: require('./pages/domains').default},
  {path: '/campaigns*',component: require('./pages/campaigns').default},
  {path: '/reports*',component: require('./pages/reports').default},
  {path: '/pages*',component: require('./pages/pages').default},
  {path: '/waffles*',component: require('./pages/waffles').default},
  {path: '/posts*',component: require('./pages/posts').default}
];
import VueRouter from 'vue-router';
export default new VueRouter({
  base: '/admin/',
  mode: 'history',
  routes, 
  linkActiveClass: 'active'
});
