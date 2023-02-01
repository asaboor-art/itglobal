import {
    createRouter,
    createWebHistory
} from "vue-router";

import Dashboard from '../components/admin/Dashboard.vue';
// Pages
import Pages from '../components/admin/pages/Pages.vue';
import CreatePages from '../components/admin/pages/CreatePages.vue';
import EditPage from '../components/admin/pages/EditPage.vue';
// Login
import Login from '../components/auth/Login.vue';
// Headers
import Headers from '../components/admin/headers/Headers.vue';
import CreateHeader from '../components/admin/headers/CreateHeader.vue';
import EditHeader from '../components/admin/headers/EditHeader.vue';
// Footers
import Footers from '../components/admin/footers/Footers.vue';
import CreateFooter from '../components/admin/footers/CreateFooter.vue';
import EditFooter from '../components/admin/footers/EditFooter.vue';
// Properties
import Properties from '../components/admin/properties/Properties.vue';
import CreateProperty from '../components/admin/properties/CreateProperty.vue';
import EditProperty from '../components/admin/properties/EditProperty.vue';

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
    {
        path: "/admin/pages/edit/:id",
        name: "admin.pages.edit",
        component: EditPage,
        props: true,
    },
    // Headers
    {
        path: "/admin/headers",
        name: "admin.headers",
        component: Headers,
        props: true,
    },
    {
        path: "/admin/headers/create",
        name: "admin.headers.create",
        component: CreateHeader,
        props: true,
    },
    {
        path: "/admin/headers/edit/:id",
        name: "admin.headers.edit",
        component: EditHeader,
        props: true,
    },
    // Footer
    {
        path: "/admin/footers",
        name: "admin.footers",
        component: Footers,
        props: true,
    },
    {
        path: "/admin/footers/create",
        name: "admin.footers.create",
        component: CreateFooter,
        props: true,
    },
    {
        path: "/admin/footers/edit/:id",
        name: "admin.footers.edit",
        component: EditFooter,
        props: true,
    },
    // Properties
    {
        path: "/admin/properties",
        name: "admin.properties",
        component: Properties,
        props: true,
    },
    {
        path: "/admin/properties/create",
        name: "admin.properties.create",
        component: CreateProperty,
        props: true,
    },
    {
        path: "/admin/properties/edit/:id",
        name: "admin.properties.edit",
        component: EditProperty,
        props: true,
    },



];

export default createRouter({
    history: createWebHistory(),
    routes,
})
