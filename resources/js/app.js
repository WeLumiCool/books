import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import App from './App.vue'

import Home from './components/Welcome.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
    ],
});

new Vue({
    el: '#app',
    components: {App},
    router,
});
