import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

import index from '../components/frontend/index'
import category from '../components/frontend/category'
import blogDetails from '../components/frontend/category-details'


export default new Router({
    mode: 'history',
    routes: [
        {path: '/', component: index, name: 'index',},
        {path: '/category', component: category, name: 'category',},
        {path: '/blog/details/:slug', component: blogDetails, name: 'blogDetails',},

    ],
});
