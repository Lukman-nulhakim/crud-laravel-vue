import Login from "../layouts/login/Login.vue";
import Home from "../pages/home/Home.vue";
import Product from "./product/Product.vue";
import ProductCreate from "./product/Create.vue";
import ProductEdit from "./product/Update.vue";
import Profile from "./profile/Profile.vue";

export const routes = [
    {
        name: "login",
        path: "/auth/login",
        component: Login,
    },
    {
        name: "home",
        path: "/",
        component: Home,
    },
    // Product
    {
        name: "product",
        path: "/product",
        component: Product,
        meta: { requireAuth: true },
    },
    {
        name: "product/create",
        path: "/product/create",
        component: ProductCreate,
        meta: { requireAuth: true },
    },
    {
        name: "editProduct",
        path: "/product/:id/edit",
        component: ProductEdit,
        meta: { requireAuth: true },
    },
    // Profile
    {
        name: "profile",
        path: "/auth/profile",
        component: Profile,
        meta: { requireAuth: true },
    },
];
