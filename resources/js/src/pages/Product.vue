<template>
    <div>
        <ul class="nav nav-tabs justify-content-center pt-3">
            <li class="nav-item">
                <router-link class="nav-link px-5" :class="{'active': productTabState == 0}" @click.native="changeTab(0)" :to="{ name: 'add-tree' }">Add Tree</router-link>
            </li>
            <li class="nav-item">
                <router-link class="nav-link px-5" :class="{'active': productTabState == 1}" @click.native="changeTab(1)" :to="{ name: 'remove-tree' }">Remove Tree</router-link>
            </li>
        </ul>
        <router-view />
    </div>
</template>

<script>
export default {
    name: 'product',
    data () {
        return {

        }
    },
    methods: {
        changeTab(value) {
            this.$store.commit('productTabStore/changeTab', value)
        },
    },
    computed: {
        productTabState() {
            return this.$store.state.productTabStore.tab
        }
    },
    created() {
        
    }
}
</script>

<style scoped>

</style>