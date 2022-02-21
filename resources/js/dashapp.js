import Vue from 'vue';
import Router from 'vue-router';
import routes from './dash';



import { library } from '@fortawesome/fontawesome-svg-core';
import { faHeart, faCartPlus } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faHeart);
library.add(faCartPlus);
Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.config.productionTip = false

Vue.use(Router);



let app = new Vue({
    el: '#app',
    router: new Router(routes)
})