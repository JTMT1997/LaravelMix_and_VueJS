/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }


import index from './components/index.vue';
import create from './components/create.vue';
import read from './components/read.vue';
import update from './components/update.vue';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const routes = [
    { path: '/', component: index },
    { path: '/create', component: create },
    { path: '/read/:id', component: read,name:'readPost' },
    { path: '/:id/edit',component:update,name:'editPost'}
  ]
  
const router = new VueRouter({
    routes // short for `routes: routes`
  })

  const app = new Vue({
    router
  }).$mount('#app')