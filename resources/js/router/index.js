import {
    createRouter,
    createWebHistory
} from "vue-router";

import Dashboard from '../components/admin/Dashboard.vue';
import Pages from '../components/admin/pages/Pages.vue';
import CreatePages from '../components/admin/pages/CreatePages.vue';
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
        path: "/admin/pages",
        name: "admin.pages",
        component: Pages,
        props: true,
    },
    {
        path: "/admin/pages/create",
        name: "admin.pages/create",
        component: CreatePages,
        props: true,
    },




];

export default createRouter({
    history: createWebHistory(),
    routes,
})
