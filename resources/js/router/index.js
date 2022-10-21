import {
    createRouter,
    createWebHistory
} from "vue-router";

import Dashboard from '../components/admin/Dashboard.vue';
import Categories from '../components/admin/categories/Categories.vue';
import CreateCategories from '../components/admin/categories/CreateCategories.vue';
import Login from '../components/auth/Login.vue';

const routes = [
    {
        path: "/admin",
        name: "admin.dashboard",
        component: Dashboard,
        props: true,
    },
    {
        path:'/admin/login',
        name: "admin.login",
        component: Login,
        props: true,
    },
    {
        path: "/admin/categories",
        name: "admin.categories",
        component: Categories,
        props: true,
    },
    {
        path: "/admin/categories/create",
        name: "admin.categories/create",
        component: CreateCategories,
        props: true,
    },




];

export default createRouter({
    history: createWebHistory(),
    routes,
})
