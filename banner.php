<style>
    #banner {
        margin-top: 8%;  
}

@media (min-width: 768px) and (max-width: 991.98px) {
    #banner {
        margin-top: 12%;

}
}
@media (max-width: 575.98px) {
    #banner {
        margin-top: 37%; 
    }
}

@media (max-width: 320px){
    #banner {
        margin-top: 66%; 
    }
}
@media (min-width: 375px) and (max-width: 425px) {
    #banner {
        margin-top: 55%;

}
}

</style>

<div class="mt-5">
<div id="carouselExampleCaptions" class="carousel slide bg-height-sm " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" id="banner">
        <div class="carousel-item active">
            <img src="assets/images/banner1.webp" class="d-block w-100 bg-height-sm" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/banner2.webp" class="d-block w-100 bg-height-sm" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item ">
            <img src="assets/images/banner3.webp" class="d-block w-100 bg-height-sm" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only ">Next</span>
    </button>
</div>
</div>