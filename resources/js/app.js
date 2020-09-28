import Vue from 'vue'
import VueRouter from 'vue-router'
import VueSession from 'vue-session'

Vue.component('pagination', require('laravel-vue-pagination'));

var  options  =  {
    persist : true
}
Vue.use(VueRouter);
Vue.use(VueSession, options);

import App from './App.vue'

import Home from './components/Welcome.vue'
import Basket from './components/Basket.vue'
import Show_book from './components/Show.vue'

const router = new VueRouter({
    // mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/book/:id',
            name: 'show',
            component: Show_book
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
