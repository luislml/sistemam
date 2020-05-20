


require('./bootstrap');

require('admin-lte');

window.Vue = require('vue');

Vue.component('profile', require('./components/ProfileComponent.vue').default);

const app = new Vue({
    el: '#app',
});







