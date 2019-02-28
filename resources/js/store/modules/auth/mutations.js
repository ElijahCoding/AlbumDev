export const loginUser = (state, payload) => {
    state.isLoggedIn = true
    console.log(payload);
    // localStorage.setItem('token', response.data.access_token)
    // window.axios.defaults.headers.common.Authorization = `Bearer ${response.data.access_token}`

}

export const logoutUser = (state) => {
    state.isLoggedIn = false
}
