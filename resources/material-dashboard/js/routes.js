import Login from './components/Auth/Login'
import VueRouter from 'vue-router'

let routes = [
	{
		path: '/',
		component: Login
	}
];

const router = new VueRouter({
    base: '/',
    mode: 'history',
    routes,
});

export default router;