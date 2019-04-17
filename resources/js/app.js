
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";
import Vue from "vue";
import VueRouter from "vue-router";
import VueAxios from "vue-axios"


Vue.use(VueRouter,VueAxios);

import App from "./components/Component/app";
import menu from "./components/Pages/menu";
import mobile from "./components/Error/mobile";
import food from "./components/Pages/food";
import detail from "./components/Pages/detail";

const router = new VueRouter({
    mode:"history",
    routes:[
        {
            path:"/",
            name:"menu",
            component:menu
        },
        {
            path:"/useMobile",
            name:"mobile",
            component:mobile
        },
        {
            path:"/food/:category",
            name:"food",
            component:food
        },
        {
            path:"/food/detail/:id",
            name:"detail",
            component:detail
        }
    ]
});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
