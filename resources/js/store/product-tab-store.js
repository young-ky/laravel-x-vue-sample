const productTabStore = {
    namespaced: true,
    state: {
        tab: 0
    },
    mutations: {
        changeTab(state, value) {
            state.tab = value
        }
    },
    actions: {
    // Actions here
    },
    getters: {
    // Getters here
    }

}
export default productTabStore
