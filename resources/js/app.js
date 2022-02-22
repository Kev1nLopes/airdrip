import Vue from 'vue';
import Router from 'vue-router';
import routes from './routes';
import dashRoutes from './dash';
import Login from './view/Login.vue';



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
    components:{ Login },
    router: new Router(routes)
});

let dashApp = new Vue({
    el: '#dash',
    router: new Router(dashRoutes)
})
