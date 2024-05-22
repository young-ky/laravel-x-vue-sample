<template>
<nav class="navbar navbar-expand-lg navbar-light bg-primary bg-opacity-25">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="inv-logo" src="../../../images/investree_logo.png">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link fw-bold " href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="/leaderboard">Leaderboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="/product/add-tree">Start Planting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="/about">About Us</a>
                </li>
            </ul>
        </div>
        <div class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0 fw-bold">Login</button>
            <button class="btn btn-outline-primary my-2 my-sm-0 fw-bold">Register</button>
        </div>
    </div>
</nav>
</template>

<script>
export default {
    name: 'navbar'
}
</script>

<style scoped>
    .nav-link:hover {
        color: limegreen;
    }
    .inv-logo {
        width: 110px;
        height: 32px;
        padding-bottom: 2%;
    }
</style>