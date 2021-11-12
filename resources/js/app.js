require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";

import router from "./vue/Router/index";
// import store from "./vue/Store/index";
import App from "./vue/app.vue";

Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    router,
    // store,
    components: { App },
});
