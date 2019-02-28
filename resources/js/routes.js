import Vue from 'vue'
import VueRouter from 'vue-router'
import App from '@/components/layouts/App'
import Libraries from '@/components/programming/cdn/Libraries'

export const routes = [
    {
        path: '/',
        component: App,
        children: [
            {
                path: 'programming',
                component: Libraries
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
