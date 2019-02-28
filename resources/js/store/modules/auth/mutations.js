import router from '@/routes'

export const loginUser = (state, payload) => {
    state.isLoggedIn = true
    localStorage.setItem('token', payload.access_token)
    window.axios.defaults.headers.common.Authorization = `Bearer ${payload.access_token}`
    router.push({ name: 'cdn' })
}

export const logoutUser = (state) => {
    state.isLoggedIn = false
    localStorage.clear()
}
