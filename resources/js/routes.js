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
    path: '/entourage/:resource?/:id?',
    component: require('../views/pages/entourage').default,
    props: true
  },
  {
    path: '/site-manager/:resource?/:id?',
    component: require('../views/pages/site-manager').default,
    props: true
  },
  {
    path: '/tracker/:resource?/:id?',
    component: require('../views/pages/tracker').default,
    props: true
  },
  {
    path: '/:uri',
    redirect: '/'
  }
];
import VueRouter from 'vue-router';
export default new VueRouter({
  base: '/',
  mode: 'history',
  routes
});