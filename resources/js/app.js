/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import router from './routes';
import MyHeader from './components/frontend/header';
import MyFooter from './components/frontend/footer';

const app = new Vue({
    router,
    components :{
        'my-header':MyHeader,
        'my-footer':MyFooter
    }
}).$mount('#app')

