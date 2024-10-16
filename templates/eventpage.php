<div class="container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper" style="height: auto">
            <div class="swiper-slide">
                <div class="card border rounded-3 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <!-- Image -->
                        <div class="col-sm-6">
                            <img src="./assets/images/image-body/01.jpg" class="card-img rounded-0" alt="">
                        </div>
                        <!-- Title and content -->
                        <div class="col-sm-6">
                            <div class="card-body px-3">
                                <h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Daily 50 Lucky
                                        Winners get a Free Stay</a></h6>
                                <p class="mb-0">Valid till: 15 Nov</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card border rounded-3 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <!-- Image -->
                        <div class="col-sm-6">
                            <img src="./assets/images/image-body/04.jpg" class="card-img rounded-0" alt="">
                        </div>

                        <!-- Title and content -->
                        <div class="col-sm-6">
                            <div class="card-body px-3">
                                <h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Up to 60%
                                        OFF</a></h6>
                                <p class="mb-0">On Hotel Bookings Online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card border rounded-3 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <!-- Image -->
                        <div class="col-sm-6">
                            <img src="./assets/images/image-body/03.jpg" class="card-img rounded-0" alt="">
                        </div>

                        <!-- Title and content -->
                        <div class="col-sm-6">
                            <div class="card-body px-3">
                                <h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Book &amp;
                                        Enjoy</a></h6>
                                <p class="mb-0">20% Off on the best available room rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card border rounded-3 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <!-- Image -->
                        <div class="col-sm-6">
                            <img src="./assets/images/image-body/02.jpg" class="card-img rounded-0" alt="">
                        </div>

                        <!-- Title and content -->
                        <div class="col-sm-6">
                            <div class="card-body px-3">
                                <h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Hot Summer
                                        Nights</a></h6>
                                <p class="mb-0">Up to 3 nights free!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,

    keyboard: {
        enabled: true,
    },
    loop: {
        enabled: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
</script>