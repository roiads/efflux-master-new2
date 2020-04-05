let routes = [{
    path: '/dashboard',
    component: require('./pages/dashboard').default
  },
  {
    path: '/users*',
    component: require('./pages/users').default
  },
  {
    path: '/accounts*',
    component: require('./pages/accounts').default
  },
  {
    path: '/content_domains*',
    component: require('./pages/content/domains').default
  },
  {
    path: '/content_pages*',
    component: require('./pages/content/pages').default
  },
  {
    path: '/content_posts*',
    component: require('./pages/content/posts').default
  },
  {
    path: '/campaigns*',
    component: require('./pages/campaigns').default
  },
  {
    path: '/reports*',
    component: require('./pages/reports').default
  },
  {
    path: '/waffles*',
    component: require('./pages/waffles').default
  },
];
import VueRouter from 'vue-router';
export default new VueRouter({
  base: '/admin/',
  mode: 'history',
  routes,
  linkActiveClass: 'active'
});