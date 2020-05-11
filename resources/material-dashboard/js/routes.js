import VueRouter from 'vue-router'

let routes = [
	{
      path: '/',
      component: () => import('./components/Pages/Index'),
      children: [
        {
          name: 'Login',
          path: 'login',
          component: () => import('./components/Auth/Login'),
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