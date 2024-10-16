<?php include('../head.php')?>
<?php include_once('../header-style.php')?>
<section class="pt-3">
    <div class="container">
        <div class="row">

            <?php include_once('./tab-info.php')?>
            <!-- Sidebar END -->

            <!-- Main content START -->
            <div class="col-lg-8 col-xl-9">

                <!-- Offcanvas menu button -->
                <div class="d-grid mb-0 d-lg-none w-100">
                    <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                        <i class="fas fa-sliders-h"></i> Menu
                    </button>
                </div>

                <!-- Wishlist START -->
                <div class="card border bg-transparent">
                    <!-- Card header -->
                    <div class="card-header bg-transparent border-bottom">
                        <h4 class="card-header-title">My Wishlist</h4>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body vstack gap-4">
                        <!-- Select and button -->
                        <form class="d-flex justify-content-between">
                            <div class="col-6 col-xl-3">
                                <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select
                                            class="form-select form-select-sm js-choice border-0 choices__input"
                                            hidden="" tabindex="-1" data-choice="active">
                                            <option value="" data-custom-properties="[object Object]">Sort by</option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                data-item="" data-id="1" data-value=""
                                                data-custom-properties="[object Object]" aria-selected="true">Sort by
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--hi3d-item-choice-1"
                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="1" data-value=""
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">Sort by</div>
                                            <div id="choices--hi3d-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2" data-value="Recently search"
                                                data-select-text="Press to select" data-choice-selectable="">Recently
                                                search</div>
                                            <div id="choices--hi3d-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3" data-value="Most popular"
                                                data-select-text="Press to select" data-choice-selectable="">Most
                                                popular</div>
                                            <div id="choices--hi3d-item-choice-4"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="4" data-value="Top rated"
                                                data-select-text="Press to select" data-choice-selectable="">Top rated
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <button class="btn btn-danger-soft mb-0"><i class="fas fa-trash me-2"></i>Remove
                                all</button>
                        </form>

                        <!-- Wishlist item START -->
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Card img -->
                                <div class="col-md-3">
                                    <img src="../assets/images/image-body/10.jpg" class="card-img rounded-2"
                                        alt="Card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-9">
                                    <div class="card-body py-md-2 d-flex flex-column h-100">

                                        <!-- Rating and buttons -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-inline small mb-0">
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-alt text-warning"></i></li>
                                            </ul>

                                            <ul class="list-inline mb-0">
                                                <!-- Heart icon -->
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-round btn-danger mb-0"><i
                                                            class="fa-solid fa-fw fa-heart"></i></a>
                                                </li>
                                                <!-- Share icon -->
                                                <li class="list-inline-item dropdown">
                                                    <!-- Share button -->
                                                    <a href="#" class="btn btn-sm btn-round btn-light mb-0"
                                                        role="button" id="dropdownShare2" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                        aria-labelledby="dropdownShare2">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="fab fa-twitter-square me-2"></i>Twitter</a>
                                                        </li>
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
                                        <h5 class="card-title mb-1"><a href="hotel-detail.html">Pride moon Village
                                                Resort &amp; Spa</a></h5>
                                        <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California -
                                            24578</small>

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
                                                <a href="hotel-detail.html" class="btn btn-sm btn-dark w-100 mb-0">View
                                                    hotel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Wishlist item END -->

                        <!-- Wishlist item START -->
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Card img -->
                                <div class="col-md-3">
                                    <img src="../assets/images/image-body/11.jpg" class="card-img rounded-2"
                                        alt="Card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-9">
                                    <div class="card-body d-flex flex-column h-100 py-md-2">

                                        <!-- Rating and buttons -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-inline small mb-0">
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0"><i
                                                        class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-alt text-warning"></i></li>
                                            </ul>

                                            <ul class="list-inline mb-0">
                                                <!-- Heart icon -->
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-round btn-danger mb-0"><i
                                                            class="fa-solid fa-fw fa-heart"></i></a>
                                                </li>
                                                <!-- Share icon -->
                                                <li class="list-inline-item dropdown">
                                                    <a href="#" class="btn btn-sm btn-round btn-light mb-0"
                                                        role="button" id="dropdownShare3" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                        aria-labelledby="dropdownShare3">
                                                        <li><a class="dropdown-item" href="#"><i
                                                                    class="fab fa-twitter-square me-2"></i>Twitter</a>
                                                        </li>
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
                                        <h5 class="card-title mb-1"><a href="hotel-detail.html">Royal Beach Resort</a>
                                        </h5>
                                        <small><i class="bi bi-geo-alt me-2"></i>Manhattan street, London -
                                            24578</small>

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
                                                <a href="hotel-detail.html" class="btn btn-sm btn-dark w-100 mb-0">View
                                                    hotel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Wishlist item END -->

                    </div>
                    <!-- Card body END -->
                </div>
                <!-- Wishlist END -->

            </div>
            <!-- Main content END -->
        </div>
    </div>
</section>

<section class="bg-dark pt-5">
    <?php include('../footer-private.php')?>
</section>
<div class="modal fade" id="inquiryForm" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title" id="inquiryFormlabel">Add New Traveler</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-3">
                <form>
                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="First name">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <small>Enter this person's name exactly as it's written on their official travel
                            document</small>
                    </div>
                    <!-- Date of Birth -->
                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="text" class="form-control flatpickr flatpickr-input" data-date-format="d M y"
                            readonly="readonly">
                        <small>It's important to enter a correct date of birth because these details can be used for
                            booking or ticketing purposes</small>
                    </div>

                    <!-- Buttons -->
                    <div class="text-end">
                        <button class="btn btn-sm btn-dark mb-0" type="button">Add Traveler</button>
                    </div>
                </form> <!-- Form END -->
            </div>
        </div>
    </div>
</div>
<div class="back-top "></div>
</body>

</html>