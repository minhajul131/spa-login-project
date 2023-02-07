import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from '../pages/Home.vue';
import Login from '../pages/auth/Login.vue';

const routes = new VueRouter({

    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home,
            name: 'home',
        },
        {
            path: '/auth/login',
            component: Login,
            name: 'login',
        }
    ]
});

export default routes;