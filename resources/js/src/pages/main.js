window.Vue = require("vue");
import Vue from "vue";

import App from "./App.vue";
import VueRouter from "vue-router";
import { routes } from "./router.js";
import Cookies from "js-cookie";

// component
import Navbar from "../layouts/navbar/Navbar.vue";

Vue.use(VueRouter);
Vue.component("Navbar", Navbar);

const router = new VueRouter({
    mode: "history",
    routes: routes,
});

// Middleware Auth login
router.beforeEach((to, from, next) => {
    if (to.meta.requireAuth) {
        if (!Cookies.get("access_token")) {
            next({ name: "login" });
        } else {
            next();
        }
    } else {
        next();
    }
});

new Vue({
    el: "#app",
    router: router,
    render: (h) => h(App),
});
