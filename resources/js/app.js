import Vue from 'vue'
import VueRouter from 'vue-router'

import router from './router/index'
import store from './store/store'
import App from './src/App.vue'

require('./bootstrap')

Vue.use(VueRouter)

const app = new Vue({
    el: '#app',
    router,
    store,
    components: { App }
})
