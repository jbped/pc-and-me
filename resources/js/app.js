require("./bootstrap");
window.Vue = require("vue");

import Vue from "vue";
import VueRouter from "vue-router";
import vuetify from "./vuetify";
import axios from "axios";
import VueAxios from "vue-axios";

import router from "./vue/Router/index";
// import store from "./vue/Store/index";
import App from "./vue/app.vue";

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const app = new Vue({
    el: "#app",
    vuetify,
    router,
    // store,
    components: { App },
});
