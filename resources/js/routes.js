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
    path: '/assets/domains/:domain?',
    component: require('../views/pages/assets').default,
    props: true
  },
  {
    path: '/site-manager/:resource?/:id?',
    component: require('../views/pages/site-manager').default,
    props: true
  },
  {
    path: '/tracker/cloak/:id?',
    component: require('../views/pages/cloaker').default,
    props: true
  },
  {
    path: '/system1/:domain?',
    component: require('../views/pages/system1').default,
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