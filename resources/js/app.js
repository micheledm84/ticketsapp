/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('remove-task', require('./components/RemoveTask.vue').default);
Vue.component('show-pm', require('./components/ShowPM.vue').default);
Vue.component('button-tickets', require('./components/ButtonTickets.vue').default);
Vue.component('allocate-task', require('./components/AllocateTask.vue').default);
Vue.component('validated-errors', require('./components/ValidatedErrors.vue').default);
Vue.component('success-alert', require('./components/SuccessAlert.vue').default);
Vue.component('title-form', require('./components/TitleForm.vue').default);
Vue.component('in-progress-table', require('./components/InProgressTable.vue').default);
Vue.component('cross-team-table', require('./components/CrossTeamTable.vue').default);
Vue.component('redirect-button', require('./components/RedirectButton.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
