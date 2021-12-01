import Home from '../pages/home/Home.vue'
import Product from './product/Product.vue'
import ProductCreate from './product/Create.vue'
import ProductEdit from './product/Update.vue'

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'product',
        path: '/product',
        component: Product
    },
    {
        name: 'product/create',
        path: '/product/create',
        component: ProductCreate
    },
    {
        name: 'editProduct',
        path: '/product/:id/edit',
        component: ProductEdit
    },
]