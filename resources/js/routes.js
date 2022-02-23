//Components
import Entrada from './dash/Entrada.vue';
import Feedbacks from './dash/Feedbacks.vue';
import Produtos from './dash/Produtos.vue';
import Users from './dash/Users.vue';
import Vendas from './dash/Vendas.vue';
import NotFound from './view/NotFound.vue';
import Home from './view/Home.vue';
import About from './view/About.vue';
import Login from './view/Login.vue';
import Register from './view/Register.vue';
import RegisterProduct from './view/RegisterProduct.vue';



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
            path: '/register_product',
            component: RegisterProduct,
            name: 'RegisterProduct'
        },
        {
            path: '/dashboard',
            component: Vendas,
            name: 'Vendas'
        },
        {
            path: '/dashboard/entrada',
            component: Entrada,
            name: 'Entrada'
        },
        {
            path: '/dashboard/feedbacks',
            component: Feedbacks,
            name: 'Feedbacks'
        },
        {
            path: '/dashboard/produtos',
            component: Produtos,
            name: 'Produtos'
        },
        {
            path: '/dashboard/users',
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