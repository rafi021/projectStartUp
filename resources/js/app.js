import Vue from 'vue';
import routes from './router/index';
require('./bootstrap');


const app = new Vue({
    el: '#app',
    router: routes,
});
