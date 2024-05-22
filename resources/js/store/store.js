import Vue from 'vue'
import Vuex from 'vuex'

import buttonStore from './button-store'
import productTabStore from './product-tab-store'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        buttonStore,
        productTabStore
    },
    state: {},
    mutations: {},
    actions: {}
})
