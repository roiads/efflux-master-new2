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
    path: '/site-manager/:domain?',
    component: require('../views/pages/site-manager').default,
    props: true
  },
  {
    path: '/addpost/:domain?',
    component: require('../views/pages/site-manager/post/create').default,
    props: true
  },
  {
    path: '/editpost/:id?',
    component: require('../views/pages/site-manager/post/edit').default,
    props: true
  },
  /*
  {
    path: '/site-manager/:id',
    component: require('../views/pages/site-manager/domain-view').default,
    props: true
  },
  {
    path: '/addpost/:domain',
    component: require('../views/pages/site-manager/post/create').default,
    props: true
  },
  {
    path: '/posts/edit/:id/:domain',
    component: require('../views/pages/site-manager/domain-view').default,
    props: true
  },
  {
    path: '/editor/:id',
    component: require('../views/pages/site-manager/post/editor2').default,
    props: true
  },
  */
  {
    path: '/tracker',
    component: require('../views/pages/tracker').default,
    props: true
  }
];
import VueRouter from 'vue-router';
export default new VueRouter({
  base: '/',
  mode: 'history',
  routes
});