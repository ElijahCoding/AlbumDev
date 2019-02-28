import Vue from 'vue'
import VueRouter from 'vue-router'

export const routes = [
    {
        path: '/login',
        name: 'login',
        component: require('@/components/auth/login').default
    },

    {
        path: '/',
        component: require('@/components/layouts/App').default,
        children: [
            {
                path: 'programming',
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
