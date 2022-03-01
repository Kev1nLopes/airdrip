import Vue from 'vue';
import Router from 'vue-router';
import routes from './routes';
import App from './view/App.vue';
import store from './store'



import { library } from '@fortawesome/fontawesome-svg-core';
import { faHeart, faCartPlus, faUserAstronaut } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faHeart, faCartPlus, faUserAstronaut);
Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.config.productionTip = false

Vue.use(Router);

let app = new Vue({
    el: '#app',
    components:{  App },
    router: new Router(routes),
    store
});

