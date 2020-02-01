import VueRouter from 'vue-router';


let routes = [
    {
        path: '/dashboard',
        component: require('./views/dashboard').default
    },
    {
        path: '/users',
        component: require('./views/users').default
    },
    {
        path: '/accounts',
        component: require('./views/accounts').default
    },
    {
        path: '/ad_creator',
        component: require('./views/ad_creator').default
    },
    {
        path: '/campaigns',
        component: require('./views/campaigns').default
    },
    {
        path: '/reports/revenue',
        component: require('./views/reports_revenue').default
    }
];


export default new VueRouter({
    base: '/admin/',
    mode: 'history',
    routes,
    linkActiveClass: 'active'
});
