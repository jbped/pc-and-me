require("./bootstrap");
window.Vue = require("vue");

import Vue from "vue";
import vuetify from "./vuetify";
import VueRouter from "vue-router";

import router from "./vue/Router/index";
// import store from "./vue/Store/index";
import App from "./vue/app.vue";

Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    vuetify,
    router,
    // store,
    components: { App },
});
