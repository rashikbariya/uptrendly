/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// window.notification = require('vue-notification');
// import Notifications from ''

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('be-profession', require('./components/backend/Profession.vue'));
// Vue.component('feProfession', require('./components/frontend/Profession.vue'));

Vue.component('be-faqs', require('./components/backend/faqs.vue'));
// Vue.component('fe-faqs', require('./components/frontend/Profession.vue'));


Vue.component('be-testimonial', require('./components/backend/testimonial.vue'));

Vue.component('be-staffinfo', require('./components/backend/staffInfo.vue'));

Vue.component('be-career', require('./components/backend/career.vue'));
Vue.component('be-brand-info', require('./components/backend/BrandInformation.vue'));
Vue.component('be-brand-single', require('./components/backend/BrandSingle.vue'));

// brand
Vue.component('be-brand-nav', require('./components/users/nav.vue'));


//for staff dash
//Vue.component('be-st-dr', require('./components/staff/dailyReport.vue'));
const app = new Vue({
    el: '#app'
});
