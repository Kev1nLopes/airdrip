//Components
import Entrada from './dash/Entrada.vue';
import Feedbacks from './dash/Feedbacks.vue';
import Produtos from './dash/Produtos.vue';
import Receita from './dash/Receita.vue';
import Users from './dash/Users.vue';
import Vendas from './dash/Vendas.vue';



//Export
export default{
    mode: 'history',
    base: '/dashboard',
    routes: [
        {
            path: '/',
            component: Vendas,
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
            path: '/receita',
            component: Receita,
            name: 'Receita'
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
        }
    ]
    
}