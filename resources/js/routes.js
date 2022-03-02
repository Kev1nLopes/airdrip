//Components
import Profit from './dash/Profit.vue';
import Feedbacks from './dash/Feedbacks.vue';
import Products from './dash/Products.vue';
import Users from './dash/Users.vue';
import Sales from './dash/Sales.vue';
import Updates from './dash/Updates.vue';
import NotFound from './view/NotFound.vue';
import Home from './view/Home.vue';
import About from './view/About.vue';
import Login from './view/Login.vue';
import Register from './view/Register.vue';
import UpdateUser from './view/UpdateUser.vue';
import RegisterProduct from './view/RegisterProduct.vue';
import Middleware from '../services/middleware.js';




//Export
export default{
    mode: 'history',
    routes: [
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
        },
        {
            path: '/register',
            component: Register,
            name: 'Register'
        },
        {
            path: '/update_user/:id',
            component: UpdateUser,
            name: 'UpdateUser',
            props: true,
            beforeEnter: Middleware.auth
        },
        {
            path: '/registrar_produto',
            component: RegisterProduct,
            name: 'RegisterProduct'
        },
        {
            path: '/dashboard/sales',
            component: Sales,
            name: 'Sales'
        },
        {
            path: '/dashboard/profit',
            component: Profit,
            name: 'Profit'
        },
        {
            path: '/dashboard/feedbacks',
            component: Feedbacks,
            name: 'Feedbacks'
        },
        {
            path: '/dashboard/products',
            component: Products,
            name: 'Products'
        },
        {
            path: '/dashboard/updates',
            component: Updates,
            name: 'Updates'
        },
        {
            path: '/dashboard',
            component: Users,
            name: 'Users'
        },
        {
            path: '*',
            component: NotFound,
            name: 'NotFound'
        }
    ]
    
}