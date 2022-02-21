//Components
import Home from './view/Home.vue';
import About from './view/About.vue';
import NotFound from './view/NotFound.vue';
import Login from './view/Login.vue';

//Export
export default{
    mode: 'history',
    routes: [
        {
            path: '*',
            component: NotFound,
        },
       
        {
            path: '/',
            component: Home,
            name: 'Home'
        },
        {
            path: '/about',
            component: About,
            name: 'About'
        },
        {
            path: '/login',
            component: Login,
            name: 'Login'
        }
    ]
}