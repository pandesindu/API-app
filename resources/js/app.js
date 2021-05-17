

require('./bootstrap');

window.Vue = require('vue').default;
 
import VueNoty from 'vuejs-noty'
import {Errors, Form} from 'vform';
window.Form  = Form;
Vue.component(Errors.name, Errors);
import router from './router'


Vue.use(VueNoty)
import 'vuejs-noty/dist/vuejs-noty.css'


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
 


const app = new Vue({
    el: '#app',
    router
});


