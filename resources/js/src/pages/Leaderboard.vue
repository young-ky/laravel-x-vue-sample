<template>
    <table class="table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>User Name</th>
                <th>Total Tree Planted</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>1</td>
                <td>{{ user.name }}</td>
                <td>{{ user.total }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import axios from 'axios';
export default {
    name: 'leaderboard',
    data() {
        return {
            users: []
        }
    },
    methods: {
        async getData() {
            try {
                const {data} = await axios.get('/api/user-data')
                this.users = data
            }
            catch (e) {
                console.log(e.message)
            }
        }
    },
    created() {
        this.getData()
    }
}
</script>

<style scoped>
    .table {
        margin-top: 10%;
        margin-bottom: 10%;
    }
</style>