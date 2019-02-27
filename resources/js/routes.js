import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/components/Home'
import Test from '@/components/Test'

export const routes = [
    {
        path: '/home',
        name: 'home',
        component: Home
    },
    {
        path: '/test',
        name: 'test',
        component: Test
    }
]
