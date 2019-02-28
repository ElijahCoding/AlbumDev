import router from './routes'
import store from './store'

router.beforeEach((to, from, next) => {
    if (to.matched.some(route => route.meta.requiresAuth) && !store.state.isLoggedIn) {
        if (!localStorage.getItem('token')) {
            next({ name: 'login' })
        }
    }
    if (to.path === '/login' && store.state.isLoggedIn) {
        next({ name: 'cdn' })
        return
    }
    next()
})
