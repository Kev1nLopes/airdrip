import Vue from 'vue';
import Router from 'vue-router';
import routes from './routes';
import axios from 'axios';



import { library } from '@fortawesome/fontawesome-svg-core';
import { faHeart, faUser, faCartPlus } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faHeart);
library.add(faCartPlus);
Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.config.productionTip = false

Vue.use(Router);

(async()=>{
    await axios.get('/sanctum/csrf-cookie').then(response => {
        console.log('csrf-coockie', response);
    });
    await axios.get('/login').then((response)=>{
        console.log('login', response);
    });
    await axios.get('/users').then((response)=>{
        console.log('users', response);
    });
    
})


let app = new Vue({
    el: '#app',
    router: new Router(routes)
})