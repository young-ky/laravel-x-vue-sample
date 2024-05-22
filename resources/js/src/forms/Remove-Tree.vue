<template>
    <form class="form-group" @submit.prevent="removeTree" autocomplete="off">
        <h5 class="form-title">Remove Tree</h5>

        <div class="form-group">
            <div class="position-relative">
                <label for="username">Username</label>
                <input v-model="name" @input="findUser" type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                <ul class="autocomplete-results" v-show="isOpen">
                    <li class="autocomplete-result" v-for="(result, i) in results" :key="i" @click="setResult(result)">{{ result.name }}</li>
                </ul>
            </div>
        </div>

        <div class="form-group">
            <label for="removeType">Select Tree Type</label>
            <div class="d-flex" style="gap: .5em;">
                <div class="flex-grow-1">
                    <select v-model="treeType" class="form-control" id="removeType" name="removeType" required>
                        <option value="0">Choose Tree to Remove</option>
                        <option v-for="treeType in treeTypes" :key="treeType.id" :value="treeType">{{ treeType.tree_name }}</option>
                    </select>
                </div>
                <div>
                    <input class="form-control" v-model="treeType.totalOwned" placeholder="Owned: " disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="treeAmount">Tree Amount</label>
            <input v-model="userData.total" autocomplete="false" type="number" class="form-control" id="treeAmount" name="treeAmount" placeholder="Enter Tree Amount">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-danger" v-show="!buttonLoadingState">Remove</button>
            <button type="button" class="btn btn-danger" disabled v-show="buttonLoadingState">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
            </button>
        </div>

        <h1>{{ this.name }}</h1>
        <h1>{{ this.userData.uid }}</h1>

    </form>
</template>

<script>
import axios from 'axios'

export default {
    name: 'remove-tree',
    data() {
        return {
            name: '',
            isOpen: false,
            users: [],
            results: [],
            treeTypes: [],
            treeType: {},
            userData: {
                uid: 0,
                treeId: 0,
                total: 0,
                owned: 0
            }
        }
    },
    methods: {
        async getData() {
            try {
                const {data} = await axios.get('/api/find-user')
                this.users = data
            }
            catch (e) {
                console.log("log (getData): " + e.message)
            }
        },

        findUser() {
            this.filterResult()
            if (this.name != '' && this.results.length != 0) {
                this.isOpen = true
            }
            else {
                this.isOpen = false
            }
        },

        filterResult() {
            this.results = this.users.filter(user=>user.name.toLowerCase().indexOf(this.name.toLowerCase()) > -1)
        },

        async setResult(result) {
            this.name = result.name
            this.userData.uid = result.id
            this.isOpen = false
            try {
                const {data} = await axios.get('/api/user-tree/' + result.id)
                this.treeTypes = data
            }
            catch (e) {
                console.log("log (setResult): " + e.message)
            }
        },

        handleClickOutside(event) {
            if (!this.$el.contains(event.target)) {
                this.isOpen = false;
            }
        },

        async removeTree() {
            try {
                this.userData = {
                    uid: this.treeType.uid,
                    treeId: this.treeType.tree_id,
                    owned: parseInt(this.treeType.totalOwned),
                    total: parseInt(this.userData.total)
                }
                const {data} = await axios.post('/api/remove-tree', this.userData)
                console.log(data)
            }
            catch (e) {
                console.log("log (removeTree): " + e.message)
            }
        }
    },
    computed: {
        buttonLoadingState() {
            return this.$store.state.buttonStore.loading
        },

        productTabState() {
            return this.$store.state.productTabStore.tab
        }
    },
    created() {
        this.getData()
    },
    mounted() {
        document.addEventListener('click', this.handleClickOutside)
    },
    destroyed() {
        document.removeEventListener('click', this.handleClickOutside)
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
    .autocomplete-results {
        padding: 0;
        margin: 0;
        border: 1px solid;
        height: auto;
        max-height: 6em;
        overflow: auto;
        position: absolute;
        width: 100%;
        background: lightcyan;
    }
    .autocomplete-result {
        list-style: none;
        text-align: left;
        padding: 4px 2px;
        cursor: pointer;
    }
    .autocomplete-result:hover {
        background-color: cyan;
        color: white;
    }
</style>