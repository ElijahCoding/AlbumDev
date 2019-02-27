import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'

import { routes } from './routes'

Vue.use(VueRouter)

require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

// require('./plugins.js')
// require('./components.js')

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router
});

export default app
