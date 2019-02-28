import Vue from 'vue'
import router from './routes'

import 'vuetify/dist/vuetify.min.css'

require('./plugins')

require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');


const app = new Vue({
    el: '#app',
    router
});

export default app
