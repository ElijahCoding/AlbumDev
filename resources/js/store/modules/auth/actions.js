export const login = ({ commit }, credentials) => {
    axios.post('/api/login', {
        'email': credentials.email,
        'password': credentials.password
    }).then(response => {
        // localStorage.setItem('token', response.data.access_token)
        // window.axios.defaults.headers.common.Authorization = `Bearer ${response.data.access_token}`
        console.log(response.data);
        // commit('loginUser', response.data.access_token)
    }).catch(err => {
        console.log(err);
    })
}

export const logout = ({ commit }) => {
    commit('logout')
}
