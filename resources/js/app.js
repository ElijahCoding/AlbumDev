
require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

Vue.component('albums', require('./components/album/albums.vue').default);

const app = new Vue({
    el: '#app'
});
