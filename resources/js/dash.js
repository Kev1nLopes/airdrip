//Components
import Entrada from './dash/Entrada.vue';
import Feedbacks from './dash/Feedbacks.vue';
import Produtos from './dash/Produtos.vue';
import Users from './dash/Users.vue';
import Vendas from './dash/Vendas.vue';
import NotFound from './view/NotFound.vue';



//Export
export default{
    mode: 'history',
    base: '/dashboard',
    routes: [
        {
            path: '/',
            component: Vendas,
            name: 'Vendas'
        },
       
        {
            path: '/entrada',
            component: Entrada,
            name: 'Entrada'
        },
        {
            path: '/feedbacks',
            component: Feedbacks,
            name: 'Feedbacks'
        },
        {
            path: '/produtos',
            component: Produtos,
            name: 'Produtos'
        },
        {
            path: '/users',
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