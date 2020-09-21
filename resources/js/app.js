import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import App from './App.vue'

import Home from './components/Welcome.vue'
import Basket from './components/Basket.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/basket',
            name: 'basket',
            component: Basket
        },
    ],
});

new Vue({
    el: '#app',
    components: {App},
    router,
});
