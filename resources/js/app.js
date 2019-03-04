import Lang from 'lang.js';

window.Vue = require('vue');


const default_locale = window.default_locale;
const fallback_locale = window.fallback_locale;
const messages = window.messages;

window.Vue.prototype.trans = new Lang( { messages, locale: default_locale, fallback: fallback_locale } );

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('sidebar-newsline-feed', require('./components/SidebarNewslineComponent.vue').default);

const app = new Vue({
    el: '#app'
});
