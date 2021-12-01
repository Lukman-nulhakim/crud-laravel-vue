window.Vue = require('vue');
import Vue from 'vue';

import App from './App.vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import {routes} from './router.js'

// component
import Navbar from "../layouts/navbar/Navbar.vue"

Vue.use(VueRouter);
Vue.use(axios);
Vue.component('Navbar', Navbar)

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

new Vue({
    el: '#app',
    router: router,
    render: h => h(App)
});