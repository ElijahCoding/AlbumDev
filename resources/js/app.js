require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

require('./plugins.js')
require('./components.js')

const app = new Vue({
    el: '#app'
});
