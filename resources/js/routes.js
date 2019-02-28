import Vue from 'vue'
import VueRouter from 'vue-router'

export const routes = [
    {
        path: '/login',
        name: 'login',
        component: require('@/components/auth/login').default
    },

    {
        path: '/programming',
        component: require('@/components/layouts/App').default,
        meta: { requiresAuth: true },
        children: [
            {
                path: 'cdn',
                name: 'cdn',
                component: require('@/components/programming/cdn/Libraries').default
            }
        ]
    },
    // {
    //     path: '/test',
    //     name: 'test',
    //     component: Test
    // }
]

export default new VueRouter({
    mode: 'history',
    routes
});
