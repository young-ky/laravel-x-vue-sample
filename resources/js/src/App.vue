<template>
    <div class="app">
        <navbar />
        <router-view />
        <myFooter />
    </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
import myFooter from './components/Footer.vue'

export default {
    components: { 
        Navbar,
        myFooter
    },
    name: 'app'
}
</script>
