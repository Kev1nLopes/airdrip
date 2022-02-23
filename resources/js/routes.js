//Components
import Home from './view/Home.vue';
import About from './view/About.vue';
import Man from './view/Man.vue';
import Woman from './view/Woman.vue';
import Kids from './view/Kids.vue';
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
            path: '/man',
            component: Man,
            name: 'Man'
        },
        {
            path: '/woman',
            component: Woman,
            name: 'Woman'
        },
        {
            path: '/kids',
            component: Kids,
            name: 'Kids'
        },
        {
            path: '/about',
            component: About,
            name: 'About'
        }
    ]
}