import VueRouter from 'vue-router'

let routes = [
	{
      path: '/',
      component: () => import('./components/Pages/Index'),
      children: [
        {
          name: 'Login',
          path: '',
          component: () => import('./components/Auth/Login'),
        },
        {
          name: 'Login',
          path: 'login',
          component: () => import('./components/Auth/Login'),
        },
        {
          name: 'Register',
          path: 'register',
          component: () => import('./components/Auth/Register'),
        },
        {
          name: 'Lock',
          path: 'lock',
          component: () => import('./components/Auth/Lock'),
        },
        {
          name: 'Pricing',
          path: 'pricing',
          component: () => import('./components/Pages/Pricing'),
        },
      ],
    },
];

const router = new VueRouter({
    base: '/',
    mode: 'history',
    routes,
});

export default router;