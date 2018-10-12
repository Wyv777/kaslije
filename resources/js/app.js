
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navigation', require('./components/navigation.vue'));
Vue.component('home', require('./components/home.vue'));
Vue.component('location', require('./components/location.vue'));
Vue.component('copyright', require('./components/copyright.vue'));
Vue.component('catalog', require('./components/catalog.vue'));

const app = new Vue({
    el: '#app'
});
