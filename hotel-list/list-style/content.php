<section class="pt-0">
    <div class="container">
        <!-- Tabs and alert START -->
        <div class="row mb-4">
            <div class="col-12">
                <!-- Alert box START -->
                <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center rounded-3 fade show mb-4 mb-0 pe-2"
                    role="alert">
                    <div class="d-flex">
                        <span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
                        <span><strong class="alert-heading me-2">Covid Policy:</strong>You may require to present an
                            RT-PCR negative test report at the hotel</span>
                    </div>
                    <button type="button" class="btn btn-link pb-0 text-end" data-bs-dismiss="alert"
                        aria-label="Close"><i class="fa-solid fa-xmark text-dark"></i></i></button>
                </div>
                <!-- Alert box END -->

                <!-- Buttons -->
                <div class="hstack gap-3 justify-content-between justify-content-md-end">
                    <!-- Filter offcanvas button -->
                    <button class="btn btn-primary-soft btn-primary-check mb-0 d-xl-none" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                        <i class="fa-solid fa-sliders-h me-1"></i> Show filters
                    </button>
                    <!-- tabs -->
                    <ul class="nav nav-pills nav-pills-dark" id="tour-pills-tab" role="tablist">
                        <!-- Tab item -->
                        <li class="nav-item">
                            <a class="nav-link rounded-start rounded-0 mb-0 active" href="hotel-list.html"><i
                                    class="fa-solid fa-list-ul"></i></a>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item">
                            <a class="nav-link rounded-end rounded-0 mb-0" href="hotel-grid.html"><i
                                    class="fa-solid fa-grip-vertical"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Tabs and alert END -->

        <div class="row">
            <!-- Left sidebar START -->
            <aside class="col-xl-4 col-xxl-3">
                <!-- Responsive offcanvas body START -->
                <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar"
                    aria-labelledby="offcanvasSidebarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Advance Filters</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body flex-column p-3 p-xl-0">
                        <form class="rounded-3 shadow">
                            <!-- Hotel type START -->
                            <div class="card card-body rounded-0 rounded-top p-4">
                                <!-- Title -->
                                <h6 class="mb-2">Hotel Type</h6>
                                <!-- Hotel Type group -->
                                <div class="col-12">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hotelType1">
                                        <label class="form-check-label" for="hotelType1">All</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hotelType2">
                                        <label class="form-check-label" for="hotelType2">Hotel</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hotelType3">
                                        <label class="form-check-label" for="hotelType3">Apartment</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hotelType4">
                                        <label class="form-check-label" for="hotelType4">Resort</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hotelType5">
                                        <label class="form-check-label" for="hotelType5">Villa</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hotelType6">
                                        <label class="form-check-label" for="hotelType6">Lodge</label>
                                    </div>

                                    <!-- Collapse body -->
                                    <div class="multi-collapse collapse" id="hotelType">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hotelType7">
                                            <label class="form-check-label" for="hotelType7">Guest House</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hotelType10">
                                            <label class="form-check-label" for="hotelType10">Cottage</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hotelType8">
                                            <label class="form-check-label" for="hotelType8">Beach Hut</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hotelType9">
                                            <label class="form-check-label" for="hotelType9">Farm house</label>
                                        </div>
                                    </div>
                                    <!-- Collapse button -->
                                    <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center collapsed"
                                        data-bs-toggle="collapse" href="#hotelType" role="button" aria-expanded="false"
                                        aria-controls="hotelType">
                                        See <span class="see-more ms-1">more</span><span
                                            class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Hotel type END -->

                            <hr class="my-0"> <!-- Divider -->

                            <!-- Price range START -->
                            <div class="card card-body rounded-0 p-4">
                                <!-- Title -->
                                <h6 class="mb-2">Price range</h6>
                                <!-- Price range group -->
                                <div class="col-12">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="priceRange1">
                                        <label class="form-check-label" for="priceRange1">Up to $500</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="priceRange2">
                                        <label class="form-check-label" for="priceRange2">$500 - $1000</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="priceRange3">
                                        <label class="form-check-label" for="priceRange3">$1000 - $1500</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="priceRange4">
                                        <label class="form-check-label" for="priceRange4">$1500 - $2000</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="priceRange5">
                                        <label class="form-check-label" for="priceRange5">$2000+</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Price range END -->

                            <hr class="my-0"> <!-- Divider -->

                            <!-- Popular type START -->
                            <div class="card card-body rounded-0 p-4">
                                <!-- Title -->
                                <h6 class="mb-2">Popular Type</h6>
                                <!-- Popular Type group -->
                                <div class="col-12">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="popolarType1">
                                        <label class="form-check-label" for="popolarType1">Free Breakfast
                                            Included</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="popolarType2">
                                        <label class="form-check-label" for="popolarType2">Pay At Hotel
                                            Available</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="popolarType3">
                                        <label class="form-check-label" for="popolarType3">Free Cancellation
                                            Available</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Popular type END -->

                            <hr class="my-0"> <!-- Divider -->

                            <!-- Customer Rating START -->
                            <div class="card card-body rounded-0 p-4">
                                <!-- Title -->
                                <h6 class="mb-2">Customer Rating</h6>
                                <!-- Customer Rating group -->
                                <ul class="list-inline mb-0 g-3">
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-c1">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check"
                                            for="btn-check-c1">3+</label>
                                    </li>
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-c2">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check"
                                            for="btn-check-c2">3.5+</label>
                                    </li>
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-c3">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check"
                                            for="btn-check-c3">4+</label>
                                    </li>
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-c4">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check"
                                            for="btn-check-c4">4.5+</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Customer Rating END -->

                            <hr class="my-0"> <!-- Divider -->

                            <!-- Rating Star START -->
                            <div class="card card-body rounded-0 p-4">
                                <!-- Title -->
                                <h6 class="mb-2">Rating Star</h6>
                                <!-- Rating Star group -->
                                <ul class="list-inline mb-0 g-3">
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-6">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-6">1<i
                                                class="fa-solid fa-star"></i></label>
                                    </li>
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-7">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-7">2<i
                                                class="fa-solid fa-star"></i></label>
                                    </li>
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-8">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-8">3<i
                                                class="fa-solid fa-star"></i></label>
                                    </li>
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-15">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check"
                                            for="btn-check-15">4<i class="fa-solid fa-star"></i></i></label>
                                    </li>
                                    <!-- Item -->
                                    <li class="list-inline-item mb-0">
                                        <input type="checkbox" class="btn-check" id="btn-check-16">
                                        <label class="btn btn-sm btn-light btn-primary-soft-check"
                                            for="btn-check-16">5<i class="fa-solid fa-star"></i></i></label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Rating Star END -->

                            <hr class="my-0"> <!-- Divider -->

                            <!-- Amenities START -->
                            <div class="card card-body rounded-0 rounded-bottom p-4">
                                <!-- Title -->
                                <h6 class="mb-2">Amenities</h6>
                                <!-- Amenities group -->
                                <div class="col-12">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="amenitiesType1">
                                        <label class="form-check-label" for="amenitiesType1">All</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="amenitiesType2">
                                        <label class="form-check-label" for="amenitiesType2">Air Conditioning</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="amenitiesType3">
                                        <label class="form-check-label" for="amenitiesType3">Bar</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="amenitiesType4">
                                        <label class="form-check-label" for="amenitiesType4">Bonfire</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="amenitiesType5">
                                        <label class="form-check-label" for="amenitiesType5">Business Services</label>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="amenitiesType6">
                                        <label class="form-check-label" for="amenitiesType6">Caretaker</label>
                                    </div>

                                    <!-- Collapse body -->
                                    <div class="multi-collapse collapse" id="amenitiesCollapes">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="amenitiesType7">
                                            <label class="form-check-label" for="amenitiesType7">Dining</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="amenitiesType8">
                                            <label class="form-check-label" for="amenitiesType8">Free Internet</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="amenitiesType9">
                                            <label class="form-check-label" for="amenitiesType9">Hair nets</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="amenitiesType10">
                                            <label class="form-check-label" for="amenitiesType10">Masks</label>
                                        </div>
                                    </div>
                                    <!-- Collapse button -->
                                    <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center collapsed"
                                        data-bs-toggle="collapse" href="#amenitiesCollapes" role="button"
                                        aria-expanded="false" aria-controls="amenitiesCollapes">
                                        See <span class="see-more ms-1">more</span><span
                                            class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Amenities END -->
                        </form><!-- Form End -->
                    </div>
                    <!-- Buttons -->
                    <div class="d-flex justify-content-between p-2 p-xl-0 mt-xl-4">
                        <button class="btn btn-link p-0 mb-0">Clear all</button>
                        <button class="btn btn-primary mb-0">Filter Result</button>
                    </div>
                </div>
                <!-- Responsive offcanvas body END -->
            </aside>
            <!-- Left sidebar END -->

            <!-- Main content START -->
            <div class="col-xl-8 col-xxl-9">
                <div class="vstack gap-4">

                    <!-- Card item START -->
                    <div class="card shadow p-2">
                        <div class="row g-0">
                            <!-- Card img -->
                            <div class="col-md-5 position-relative">

                                <!-- Overlay item -->
                                <div class="position-absolute top-0 start-0 z-index-1 m-2">
                                    <div class="badge text-bg-danger">30% Off</div>
                                </div>

                                <!-- Slider START -->
                                <div class="swiper mYSwiper arrow-round arrow-xs arrow-dark overflow-hidden rounded-2 "
                                    style="z-index: 0">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/01.jpg" alt="Card image">
                                        </div>
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/02.jpg" alt="Card image">
                                        </div>
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/03.jpg" alt="Card image">
                                        </div>
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/04.jpg" alt="Card image">
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider END -->
                            </div>

                            <!-- Card body -->
                            <div class="col-md-7">
                                <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                    <!-- Rating and buttons -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>

                                        <ul class="list-inline mb-0 z-index-2">
                                            <!-- Heart icon -->
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm btn-round btn-light"><i
                                                        class="fa-solid fa-fw fa-heart"></i></a>
                                            </li>
                                            <!-- Share icon -->
                                            <li class="list-inline-item dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                                    id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-1"><a href="hotel-detail.html">Courtyard by Marriott New
                                            York </a></h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>5855 W Century Blvd, Los Angeles -
                                        90045</small>
                                    <!-- Amenities -->
                                    <ul class="nav nav-divider mt-3">
                                        <li class="nav-item">Air Conditioning</li>
                                        <li class="nav-item">Wifi</li>
                                        <li class="nav-item">Kitchen</li>
                                        <li class="nav-item"><a href="#" class="mb-0 text-primary">More+</a></li>
                                    </ul>

                                    <!-- List -->
                                    <ul class="list-group list-group-borderless small mb-0 mt-2">
                                        <li class="list-group-item d-flex text-success p-0">
                                            <i class="bi bi-patch-check-fill me-2"></i>Free Cancellation till 7 Jan 2022
                                        </li>
                                        <li class="list-group-item d-flex text-success p-0">
                                            <i class="bi bi-patch-check-fill me-2"></i>Free Breakfast
                                        </li>
                                    </ul>

                                    <!-- Price and Button -->
                                    <div
                                        class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$750</h5>
                                            <span class="mb-0 me-2">/day</span>
                                            <span class="text-decoration-line-through mb-0">$1000</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="mt-3 mt-sm-0">
                                            <a href="#" class="btn btn-sm btn-dark mb-0 w-100">Select Room</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="card shadow p-2">
                        <div class="row g-0">
                            <!-- Card img -->
                            <div class="col-md-5">
                                <img src="https://booking.webestica.com/assets/images/category/hotel/4by3/10.jpg"
                                    class="card-img rounded-2" alt="Card image">
                            </div>

                            <!-- Card body -->
                            <div class="col-md-7">
                                <div class="card-body py-md-2 d-flex flex-column h-100">

                                    <!-- Rating and buttons -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>

                                        <ul class="list-inline mb-0 z-index-2">
                                            <!-- Heart icon -->
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm btn-round btn-light"><i
                                                        class="fa-solid fa-fw fa-heart"></i></a>
                                            </li>
                                            <!-- Share icon -->
                                            <li class="list-inline-item dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                                    id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare2">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-1"><a href="hotel-detail.html">Pride moon Village Resort
                                            &amp; Spa</a></h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California -
                                        24578</small>
                                    <!-- Amenities -->
                                    <ul class="nav nav-divider mt-3">
                                        <li class="nav-item">Air Conditioning</li>
                                        <li class="nav-item">Wifi</li>
                                        <li class="nav-item">Kitchen</li>
                                        <li class="nav-item">Pool</li>
                                    </ul>

                                    <!-- List -->
                                    <ul class="list-group list-group-borderless small mb-0 mt-2">
                                        <li class="list-group-item d-flex text-danger p-0">
                                            <i class="bi bi-patch-check-fill me-2"></i>Non Refundable
                                        </li>
                                    </ul>

                                    <!-- Price and Button -->
                                    <div
                                        class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$980</h5>
                                            <span class="mb-0 me-2">/day</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="mt-3 mt-sm-0">
                                            <a href="hotel-detail.html" class="btn btn-sm btn-dark mb-0 w-100">Select
                                                Room</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="card shadow p-2">
                        <div class="row g-0">
                            <!-- Card img -->
                            <div class="col-md-5">
                                <img src="https://booking.webestica.com/assets/images/category/hotel/4by3/11.jpg"
                                    class="card-img rounded-2" alt="Card image">
                            </div>

                            <!-- Card body -->
                            <div class="col-md-7">
                                <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                    <!-- Rating and buttons -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>

                                        <ul class="list-inline mb-0 z-index-2">
                                            <!-- Heart icon -->
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm btn-round btn-light"><i
                                                        class="fa-solid fa-fw fa-heart"></i></a>
                                            </li>
                                            <!-- Share icon -->
                                            <li class="list-inline-item dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                                    id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare3">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-1"><a href="hotel-detail.html">Royal Beach Resort</a></h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>Manhattan street, London - 24578</small>
                                    <!-- Amenities -->
                                    <ul class="nav nav-divider mt-3">
                                        <li class="nav-item">Air Conditioning</li>
                                        <li class="nav-item">Wifi</li>
                                        <li class="nav-item">Kitchen</li>
                                        <li class="nav-item">Pool</li>
                                        <li class="nav-item"><a href="#" class="mb-0 text-primary">More+</a></li>
                                    </ul>

                                    <!-- List -->
                                    <ul class="list-group list-group-borderless small mb-0 mt-2">
                                        <li class="list-group-item d-flex text-success p-0">
                                            <i class="bi bi-patch-check-fill me-2"></i>Free Cancellation till 7 Jan 2022
                                        </li>
                                    </ul>

                                    <!-- Price and Button -->
                                    <div
                                        class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$540</h5>
                                            <span class="mb-0 me-2">/day</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="mt-3 mt-sm-0">
                                            <a href="hotel-detail.html" class="btn btn-sm btn-dark mb-0 w-100">Select
                                                Room</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="card shadow p-2">
                        <div class="row g-0">
                            <!-- Card img -->
                            <div class="col-md-5 position-relative">

                                <!-- Slider START -->
                                <div class="swiper MySwiper arrow-round arrow-xs arrow-dark overflow-hidden rounded-2 "
                                    style="z-index: 0">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/01.jpg" alt="Card image">
                                        </div>
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/02.jpg" alt="Card image">
                                        </div>
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/03.jpg" alt="Card image">
                                        </div>
                                        <div class="swiper-slide rounded-2"><img
                                                src="../assets/images/image-product/04.jpg" alt="Card image">
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider END -->
                            </div>

                            <!-- Card body -->
                            <div class="col-md-7">
                                <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                    <!-- Rating and buttons -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>

                                        <ul class="list-inline mb-0 z-index-2">
                                            <!-- Heart icon -->
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm btn-round btn-light"><i
                                                        class="fa-solid fa-fw fa-heart"></i></a>
                                            </li>
                                            <!-- Share icon -->
                                            <li class="list-inline-item dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                                    id="dropdownShare4" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare4">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-1"><a href="hotel-detail.html">Park Plaza Lodge Hotel</a>
                                    </h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>5855 W Century Blvd, Los Angeles -
                                        90045</small>
                                    <!-- Amenities -->
                                    <ul class="nav nav-divider mt-3">
                                        <li class="nav-item">Air Conditioning</li>
                                        <li class="nav-item">Wifi</li>
                                        <li class="nav-item">Kitchen</li>
                                        <li class="nav-item">Pool</li>
                                    </ul>

                                    <!-- List -->
                                    <ul class="list-group list-group-borderless small mb-0 mt-2">
                                        <li class="list-group-item d-flex text-success p-0">
                                            <i class="bi bi-patch-check-fill me-2"></i>Free Cancellation till 7 Jan 2022
                                        </li>
                                        <li class="list-group-item d-flex text-success p-0">
                                            <i class="bi bi-patch-check-fill me-2"></i>Free Breakfast
                                        </li>
                                    </ul>

                                    <!-- Price and Button -->
                                    <div
                                        class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$845</h5>
                                            <span class="mb-0 me-2">/day</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="mt-3 mt-sm-0">
                                            <a href="hotel-detail.html" class="btn btn-sm btn-dark mb-0 w-100">Select
                                                Room</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item START -->
                    <div class="card shadow p-2">
                        <div class="row g-0">
                            <!-- Card img -->
                            <div class="col-md-5">
                                <img src="https://booking.webestica.com/assets/images/category/hotel/4by3/10.jpg"
                                    class="card-img rounded-2" alt="Card image">
                            </div>

                            <!-- Card body -->
                            <div class="col-md-7">
                                <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                    <!-- Rating and buttons -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>

                                        <ul class="list-inline mb-0 z-index-2">
                                            <!-- Heart icon -->
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm btn-round btn-light"><i
                                                        class="fa-solid fa-fw fa-heart"></i></a>
                                            </li>
                                            <!-- Share icon -->
                                            <li class="list-inline-item dropdown">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                                    id="dropdownShare5" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare5">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-1"><a href="hotel-detail.html">Beverly Hills Marriott</a>
                                    </h5>
                                    <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California -
                                        24578</small>
                                    <!-- Amenities -->
                                    <ul class="nav nav-divider mt-3">
                                        <li class="nav-item">Air Conditioning</li>
                                        <li class="nav-item">Wifi</li>
                                        <li class="nav-item">Kitchen</li>
                                        <li class="nav-item">Pool</li>
                                    </ul>

                                    <!-- List -->
                                    <ul class="list-group list-group-borderless small mb-0 mt-2">
                                        <li class="list-group-item d-flex text-danger p-0">
                                            <i class="bi bi-patch-check-fill me-2"></i>Non Refundable
                                        </li>
                                    </ul>

                                    <!-- Price and Button -->
                                    <div
                                        class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">$645</h5>
                                            <span class="mb-0 me-2">/day</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="mt-3 mt-sm-0">
                                            <a href="#" class="btn btn-sm btn-dark mb-0 w-100">Select Room</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center" aria-label="navigation">
                        <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                        class="fa-solid fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i
                                        class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </nav>

                </div>
            </div>
            <!-- Main content END -->
        </div> <!-- Row END -->
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".mYSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    keyboard: {
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