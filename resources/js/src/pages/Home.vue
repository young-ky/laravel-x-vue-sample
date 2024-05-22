<template>
    <div class="home-wrapper">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../images/tree_1.png" class="d-inline-block w-100" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="../../../images/tree_2.png" class="d-inline-block w-100" alt="2">
                </div>
                <div class="carousel-item">
                    <img src="../../../images/tree_3.png" class="d-inline-block w-100" alt="3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card m-5">
            <div class="card-body">
                <h3 class="card-title">Why We Should Plant a Tree?</h3>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia alias qui nulla quod iste minus sunt perferendis, 
                    eos expedita itaque provident quibusdam perspiciatis dolores doloribus repudiandae ipsa impedit temporibus optio 
                    ipsam aperiam labore earum, vero sed? In maiores dolores, quod itaque tempore, omnis rem pariatur debitis delectus, 
                    nesciunt libero harum a? Animi harum ducimus reprehenderit facere necessitatibus dolor doloribus saepe, eos quis 
                    aspernatur adipisci molestiae quos soluta exercitationem eum assumenda, accusantium excepturi odit quidem non, magni 
                    error. Accusantium, id. Ea fugiat quidem mollitia ad vitae sed iste modi cumque eaque, eos illo voluptatum aliquid 
                    facilis iure maiores cupiditate quisquam ipsa nihil fuga eum magnam? Vitae, quaerat nobis eligendi laborum perferendis 
                    illo excepturi quos eaque fuga modi, dolorem rerum, sit earum aperiam fugit ea quisquam rem. Odio hic doloribus 
                    incidunt vitae illum suscipit quam natus fuga quod aspernatur, omnis voluptas quos quas a minus accusamus tenetur 
                    accusantium labore? Voluptate quis laudantium labore, deserunt a aperiam repellat explicabo maiores aliquid at, 
                    eos voluptatem assumenda aspernatur libero laboriosam corrupti fuga minus possimus tempore id ratione esse commodi 
                    similique. Suscipit quibusdam alias corporis tenetur quae, repellat exercitationem reiciendis aut doloremque culpa 
                    cum provident possimus quo distinctio necessitatibus quia ea autem illum voluptas vel saepe laudantium maxime maiores 
                    praesentium. Id quo placeat inventore in neque, ea quod provident fugiat dignissimos tempora deleniti cumque, 
                    reprehenderit quibusdam doloribus earum, ullam similique nihil illum rem quaerat. Impedit obcaecati porro, ut ad 
                    nemo culpa. Reprehenderit fuga inventore eum itaque optio iusto veritatis eos praesentium similique? Quisquam 
                    autem aliquid ipsa blanditiis tenetur explicabo quo minima minus temporibus voluptate distinctio iusto quasi harum, 
                    exercitationem amet facilis obcaecati ut perferendis eius, quidem hic delectus! Amet repellat dolore officiis a 
                    dolores velit totam ad soluta nisi sapiente sint, deserunt quibusdam. Aut ipsa amet distinctio voluptatibus illo 
                    pariatur voluptatum, iure molestiae nisi quasi consequatur?
                </p>
                <a href="" class="card-link">Learn More</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'home'
}
</script>

<style scoped>
    .carousel-item {
        height: 43rem;
    }
    .card {
        padding: 1%;
    }
    .card-text {
        font-size: 21px;
        text-align: justify;
    }
    .card-link {
        font-size: 21px;
    }
</style>