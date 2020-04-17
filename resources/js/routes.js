let routes = [{
    path: '/',
    component: require('../views/pages/home').default,
    props: true
  },
  {
    path: '/home/',
    redirect: '/'
  },
  {
    path: '/dashboard',
    redirect: '/'
  },
  {
    path: '/users',
    component: require('../views/pages/users').default,
    props: true
  },
  {
    path: '/entourage',
    component: require('../views/pages/entourage').default,
    props: true
  },
  {
    path: '/entourage/:type',
    component: require('../views/pages/entourage').default,
    props: true
  },
  {
    path: '/site-manager',
    component: require('../views/pages/site-manager').default,
    props: true
  },
  {
    path: '/sites/posts',
    component: require('../views/pages/site/posts').default,
    props: true
  }
];
import VueRouter from 'vue-router';
export default new VueRouter({
  base: '/',
  mode: 'history',
  routes,
  linkActiveClass: 'active'
});