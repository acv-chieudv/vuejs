
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import swal from 'sweetalert2'
window.swal = swal



import VueRouter from 'vue-router'
Vue.use(VueRouter)


const routes = [
    { name:'add',path: '/add',props: true, component: require('./components/AddComponent.vue') },
    { name:'edit',path: '/edit/:id',props: true, component: require('./components/EditComponent.vue') },
]



const router = new VueRouter({
    routes // short for `routes: routes`
  })
  
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('list-component', require('./components/ListComponent.vue'));
Vue.component('add-component', require('./components/AddComponent.vue'));
Vue.component('edit-component', require('./components/EditComponent.vue'));
Vue.component('form-component', require('./components/FormComponent.vue'));







// Vue.component('combo-component', require('./components/ComboboxComponent.vue'));
// Vue.component('login-api-component', require('./components/ApiLoginJWTComponent.vue'));
// Vue.component(
//     'passport-clients',
//     require('./components/passport/Clients.vue')
// );

// Vue.component(
//     'passport-authorized-clients',
//     require('./components/passport/AuthorizedClients.vue')
// );

// Vue.component(
//     'passport-personal-access-tokens',
//     require('./components/passport/PersonalAccessTokens.vue')
// );
// window.axios.defaults.headers.common = {
//     'X-Requested-With': 'XMLHttpRequest',
// };
const app = new Vue({
    el: '#app',
    state: {
        user: {
            userName:'',
            loggedInStatus: true,
            authToken: ''
        }
    },
    router

});
