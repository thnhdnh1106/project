<section class="pt-0">
    <div class="container">
        <!-- Background image -->
        <div class="rounded-3 p-3 p-sm-5"
            style="background-image: url(https://booking.webestica.com/assets/images/bg/05.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
            <!-- Banner title -->
            <div class="row my-2 my-xl-5">
                <div class="col-md-8 mx-auto">
                    <h1 class="text-center text-white">150 Hotels in New York</h1>
                </div>
            </div>

            <!-- Booking from START -->
            <form class="card shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4">
                <div class="row g-4 align-items-center">
                    <!-- Location -->
                    <div class="col-lg-4">
                        <div class="form-control-border form-control-transparent form-fs-md d-flex">
                            <!-- Icon -->
                            <i class="fa-solid fa-location-dot fs-3 me-2 mt-2"></i>
                            <!-- Select input -->
                            <div class="flex-grow-1">
                                <label class="form-label">Location</label>
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select class="form-select js-choice choices__input"
                                            data-search-enabled="true" hidden="" tabindex="-1" data-choice="active">
                                            <option value="" data-custom-properties="[object Object]">Select location
                                            </option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                data-item="" data-id="1" data-value=""
                                                data-custom-properties="[object Object]" aria-selected="true">Select
                                                location</div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                            type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="Select location" placeholder="">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--o3tc-item-choice-1"
                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="1" data-value=""
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">Select location</div>
                                            <div id="choices--o3tc-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2" data-value="San Jacinto, USA"
                                                data-select-text="Press to select" data-choice-selectable="">San
                                                Jacinto, USA</div>
                                            <div id="choices--o3tc-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3"
                                                data-value="North Dakota, Canada" data-select-text="Press to select"
                                                data-choice-selectable="">North Dakota, Canada</div>
                                            <div id="choices--o3tc-item-choice-4"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="4"
                                                data-value="West Virginia, Paris" data-select-text="Press to select"
                                                data-choice-selectable="">West Virginia, Paris</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Check in -->
                    <div class="col-lg-4">
                        <div class="d-flex">
                            <!-- Icon -->
                            <i class="fa-regular fa-calendar-days fs-3 me-2 mt-2"></i>
                            <!-- Date input -->
                            <div class="form-control-border form-control-transparent form-fs-md">
                                <label class="form-label">Check in - out</label>
                                <input type="text" class="form-control flatpickr js-flatpickr-datetime flatpickr-input"
                                    data-mode="range" placeholder="Select Date.." value="19 Sep to 28 Sep"
                                    readonly="readonly">
                            </div>
                        </div>
                    </div>

                    <!-- Guest -->
                    <div class="col-lg-4">
                        <div class="form-control-border form-control-transparent form-fs-md d-flex">
                            <!-- Icon -->
                            <i class="fa-regular fa-calendar-days fs-3 me-2 mt-2"></i>
                            <!-- Dropdown input -->
                            <div class="w-100">
                                <label class="form-label">Guests &amp; rooms</label>
                                <div class="dropdown guest-selector me-2">
                                    <input type="text" class="form-guest-selector form-control selection-result"
                                        value="2 Guests 1 Room" data-bs-auto-close="outside" data-bs-toggle="dropdown">

                                    <!-- dropdown items -->
                                    <ul class="dropdown-menu guest-selector-dropdown">
                                        <!-- Adult -->
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0">Adults</h6>
                                                <small>Ages 13 or above</small>
                                            </div>

                                            <div class="hstack gap-1 align-items-center">
                                                <button type="button" class="btn btn-link adult-remove p-0 mb-0"><i
                                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                <h6 class="guest-selector-count mb-0 adults">2</h6>
                                                <button type="button" class="btn btn-link adult-add p-0 mb-0"><i
                                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                            </div>
                                        </li>

                                        <!-- Divider -->
                                        <li class="dropdown-divider"></li>

                                        <!-- Child -->
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0">Child</h6>
                                                <small>Ages 13 below</small>
                                            </div>

                                            <div class="hstack gap-1 align-items-center">
                                                <button type="button" class="btn btn-link child-remove p-0 mb-0"><i
                                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                <h6 class="guest-selector-count mb-0 child">0</h6>
                                                <button type="button" class="btn btn-link child-add p-0 mb-0"><i
                                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                            </div>
                                        </li>

                                        <!-- Divider -->
                                        <li class="dropdown-divider"></li>

                                        <!-- Rooms -->
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0">Rooms</h6>
                                                <small>Max room 8</small>
                                            </div>

                                            <div class="hstack gap-1 align-items-center">
                                                <button type="button" class="btn btn-link room-remove p-0 mb-0"><i
                                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                <h6 class="guest-selector-count mb-0 rooms">1</h6>
                                                <button type="button" class="btn btn-link room-add p-0 mb-0"><i
                                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="btn-position-md-middle">
                    <a class="icon-lg btn btn-round btn-primary mb-0" href="#"><i
                            class="fa-solid fa-magnifying-glass fa-fw"></i></a>
                </div>
            </form>
            <!-- Booking from END -->
        </div>
    </div>
</section>