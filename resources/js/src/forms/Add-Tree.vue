<template>
    <form class="form-group" @submit.prevent="addTree" autocomplete="off">
        <h5 class="form-title">Add Tree</h5>

        <div class="form-group">
            <label for="username">Username</label>
            <input v-model="userData.name" type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
        </div>

        <div class="form-group">
            <label for="addType">Select Tree Type</label>
            <select v-model="userData.tree_id" class="form-control" id="addType" name="addType" required>
                <option value="0">Choose Tree Type</option>
                <option v-for="treeType in treeTypes" :key="treeType.id" :value="treeType.id">{{ treeType.tree_name }}</option>
            </select>
        </div>

        <div class="form-group">
            <label for="total">Select Tree Amount</label>
            <select v-model="userData.total" class="form-control" id="total" name="total" required>
                <option value="0">Tree Amount</option>
                <option value="1">1</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" v-show="!buttonLoadingState">Submit</button>
            <button type="button" class="btn btn-primary" disabled v-show="buttonLoadingState">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
            </button>
        </div>
    </form>
</template>

<script>
import axios from 'axios'

export default {
    name: 'add-tree',
    data () {
        return {
            treeTypes: [],
            'userData': {
                'name': '',
                'tree_id': 0,
                'total': 0
            }
        }
    },
    methods: {
        async getTreeType() {
            try {
                const {data} = await axios.get('/api/tree-type')
                this.treeTypes = data
            }
            catch (e) {
                console.log(e.message)
            }
        },
        async addTree() {
            this.$store.commit('buttonStore/isLoading')
            try {
                const {data} = await axios.post('/api/add-tree', this.userData)
                console.log(data)
            }
            catch (e) {
                console.log("log (addTree): " + e.message)
            }
            finally {
                this.$store.commit('buttonStore/finishLoading')
            }
        }
    },
    computed: {
        buttonLoadingState() {
            return this.$store.state.buttonStore.loading
        }
    },
    created() {
        this.getTreeType()
    }
}
</script>

<style scoped>
    .form-group {
        margin: 2%;
    }
    .form-title {
        margin-top: 3%;
    }
</style>