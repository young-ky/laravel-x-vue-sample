import Home from '../src/pages/Home.vue'
import About from '../src/pages/About.vue'
import Leaderboard from '../src/pages/Leaderboard.vue'
import Product from '../src/pages/Product.vue'
import AddTree from '../src/forms/Add-Tree.vue'
import RemoveTree from '../src/forms/Remove-Tree.vue'

const routes = [
    {
        path: '/',
        component: Home,
        name: 'home'
    },
    {
        path: '/about',
        component: About,
        name: 'about'
    },
    {
        path: '/leaderboard',
        component: Leaderboard,
        name: 'leaderboard'
    },
    {
        path: '/product',
        component: Product,
        name: 'product',
        children: [
            {
                path: 'add-tree',
                component: AddTree,
                name: 'add-tree'
            },
            {
                path: 'remove-tree',
                component: RemoveTree,
                name: 'remove-tree'
            }
        ]
    }
]

export default routes
