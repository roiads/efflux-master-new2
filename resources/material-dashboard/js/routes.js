import VueRouter from 'vue-router'

let routes = [
	{
      path: '/',
      component: () => import('./components/pages/Index'),
      children: [
        {
          name: 'DefaultLogin',
          path: 'login',
          component: () => import('./components/auth/Login'),
        },
        {
          name: 'Login',
          path: 'login',
          component: () => import('./components/auth/Login'),
        },
        {
          name: 'Register',
          path: 'register',
          component: () => import('./components/auth/Register'),
        },
        {
          name: 'Lock',
          path: 'lock',
          component: () => import('./components/auth/Lock'),
        },
        {
          name: 'Pricing',
          path: 'pricing',
          component: () => import('./components/pages/Pricing'),
        },
      ],
    },
    {
      path: '/dashboard',
      component: () => import('./components/dashboard/Index'),
      children: [
        // Dashboard
        {
          name: 'Dashboard',
          path: '',
          component: () => import('./components/dashboard/Dashboard'),
        },
        // Pages
        {
          name: 'RTL',
          path: 'pages/rtl',
          component: () => import('./components/dashboard/pages/Rtl'),
        },
        {
          name: 'User Profile',
          path: 'pages/user',
          component: () => import('./components/dashboard/pages/UserProfile'),
        },
        {
          name: 'Timeline',
          path: 'pages/timeline',
          component: () => import('./components/dashboard/pages/Timeline'),
        },
        // Components
        {
          name: 'Buttons',
          path: 'components/buttons',
          component: () => import('./components/dashboard/component/Buttons'),
        },
        {
          name: 'Grid System',
          path: 'components/grid-system',
          component: () => import('./components/dashboard/component/Grid'),
        },
        {
          name: 'Tabs',
          path: 'components/tabs',
          component: () => import('./components/dashboard/component/Tabs'),
        },
        {
          name: 'Notifications',
          path: 'components/notifications',
          component: () => import('./components/dashboard/component/Notifications'),
        },
        {
          name: 'Icons',
          path: 'components/icons',
          component: () => import('./components/dashboard/component/Icons'),
        },
        {
          name: 'Typography',
          path: 'components/typography',
          component: () => import('./components/dashboard/component/Typography'),
        },
        // Forms
        {
          name: 'Regular Forms',
          path: 'forms/regular',
          component: () => import('./components/dashboard/forms/RegularForms'),
        },
        {
          name: 'Extended Forms',
          path: 'forms/extended',
          component: () => import('./components/dashboard/forms/ExtendedForms'),
        },
        {
          name: 'Validation Forms',
          path: 'forms/validation',
          component: () => import('./components/dashboard/forms/ValidationForms'),
        },
        {
          name: 'Wizard',
          path: 'forms/wizard',
          component: () => import('./components/dashboard/forms/Wizard'),
        },
        // Tables
        {
          name: 'Regular Tables',
          path: 'tables/regular-tables',
          component: () => import('./components/dashboard/tables/RegularTables'),
        },
        {
          name: 'Extended Tables',
          path: 'tables/extended-tables',
          component: () => import('./components/dashboard/tables/ExtendedTables'),
        },
        {
          name: 'Data Tabels',
          path: 'tables/data-tables',
          component: () => import('./components/dashboard/tables/DataTables'),
        },
        // Maps
        {
          name: 'Google Maps',
          path: 'maps/google-maps',
          component: () => import('./components/dashboard/maps/GoogleMaps'),
        },
        {
          name: 'Full Screen Map',
          path: 'maps/full-screen-map',
          component: () => import('./components/dashboard/maps/FullScreenMap'),
        },
        // Root level
        {
          name: 'Widgets',
          path: 'widgets',
          component: () => import('./components/dashboard/Widgets'),
        },
        {
          name: 'Charts',
          path: 'charts',
          component: () => import('./components/dashboard/Charts'),
        },
        {
          name: 'Calendar',
          path: 'calendar',
          component: () => import('./components/dashboard/Calendar'),
        },
      ],
    },
    {
      path: '*',
      component: () => import('./components/pages/Index'),
      children: [
        {
          name: '404 Error',
          path: '',
          component: () => import('./components/pages/Error'),
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