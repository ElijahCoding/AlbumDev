import Vue from 'vue'
import VueRouter from 'vue-router'
import App from '@/components/programming/layouts/app'
import Libraries from '@/components/programming/cdn/Libraries'

export const routes = [
    {
        path: '/programming',
        component: App,
        children: [
            {
                path: 'cdn',
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
