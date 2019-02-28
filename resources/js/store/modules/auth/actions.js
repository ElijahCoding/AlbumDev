export const login = ({ commit }, credentials) => {
    axios.post('/api/login', {
        'email': credentials.email,
        'password': credentials.password
    }).then(response => {
        commit('loginUser', response.data)
    }).catch(err => {
        console.log(err);
    })
}

export const logout = ({ commit }) => {
    commit('logoutUser')
}
