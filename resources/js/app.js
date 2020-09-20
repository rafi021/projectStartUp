require('./bootstrap');

window.Vue = require('vue');

Vue.component('index', require('./frontend/pages/index.vue').default);

const app = new Vue({
    el: '#app',
});
