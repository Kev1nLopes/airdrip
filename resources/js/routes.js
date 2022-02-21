//Components
import Home from './view/Home.vue';
import About from './view/About.vue';
import NotFound from './view/NotFound.vue';

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
        }
    ]
}