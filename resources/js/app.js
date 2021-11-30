require('./bootstrap');

Window.Vue = require('vue');

Vue.component('create-component', require('./components/CreateComponent.vue').default);

const app = new Vue({
    el: '#app',
})