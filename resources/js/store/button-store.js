const buttonStore = {
    namespaced: true,
    state: {
        loading: false
    },
    mutations: {
        isLoading(state) {
            state.loading = true
        },
        finishLoading(state) {
            state.loading = false
        }
    },
    actions: {
    // Actions here
    },
    getters: {
    // Getters here
    }

}
export default buttonStore
