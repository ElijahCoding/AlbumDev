require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

require('./components.js')

const app = new Vue({
    el: '#app'
});
