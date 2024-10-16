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

                <div class="vstack gap-4">
                    <!-- Notifications START -->
                    <div class="card border">
                        <!-- Card header -->
                        <div class="card-header border-bottom">
                            <h4 class="card-header-title">Notification Settings</h4>
                        </div>

                        <!-- Form START -->
                        <form class="card-body">
                            <!-- Radio -->
                            <div class="mb-4">
                                <label class="form-label">Newsletter<span class="text-danger">*</span></label>
                                <div class="d-flex gap-2 gap-sm-4 flex-wrap">
                                    <div class="form-check radio-bg-light">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" checked="">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Daily
                                        </label>
                                    </div>
                                    <div class="form-check radio-bg-light">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Twice a week
                                        </label>
                                    </div>
                                    <div class="form-check radio-bg-light">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Weekly
                                        </label>
                                    </div>
                                    <div class="form-check radio-bg-light">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            Never
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                <label class="form-check-label ps-0 pe-4" for="checkPrivacy1">Notify me via email when
                                    logging in</label>
                                <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy1"
                                    checked="">
                            </div>

                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                <label class="form-check-label ps-0 pe-4" for="checkPrivacy2">I would like to receive
                                    booking assist reminders</label>
                                <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy2"
                                    checked="">
                            </div>

                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                <label class="form-check-label ps-0 pe-4" for="checkPrivacy3">I would like to receive
                                    emails about Booking promotions</label>
                                <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy3"
                                    checked="">
                            </div>

                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                <label class="form-check-label ps-0 pe-4" for="checkPrivacy7">I would like to know about
                                    information and offers related to my upcoming trip</label>
                                <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy7"
                                    checked="">
                            </div>

                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                <label class="form-check-label ps-0 pe-4" for="checkPrivacy4">Show your profile
                                    publicly</label>
                                <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy4">
                            </div>

                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                <label class="form-check-label ps-0 pe-4" for="checkPrivacy6">Send SMS confirmation for
                                    all online payments</label>
                                <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy6">
                            </div>

                            <!-- Switch -->
                            <div class="form-check form-switch form-check-md d-flex justify-content-between mb-4">
                                <label class="form-check-label ps-0 pe-4" for="checkPrivacy5">Check which device(s)
                                    access your account</label>
                                <input class="form-check-input flex-shrink-0" type="checkbox" id="checkPrivacy5"
                                    checked="">
                            </div>

                            <!-- Button -->
                            <div class="d-sm-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-primary me-2 mb-0">Save changes</button>
                                <a href="#" class="btn btn-sm btn-outline-secondary mb-0">Cancel</a>
                            </div>
                        </form>
                        <!-- Form END -->
                    </div>
                    <!-- Notifications END -->

                    <!-- Security settings START -->
                    <div class="card border">
                        <!-- Card header -->
                        <div class="card-header border-bottom">
                            <h4 class="card-header-title">Security settings</h4>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Two factor -->
                            <form class="mb-3">
                                <h6>Two-factor authentication</h6>
                                <label class="form-label">Add a phone number to set up two-factor authentication</label>
                                <input type="text" class="form-control mb-2" placeholder="enter your mobile number">
                                <button class="btn btn-sm btn-primary">Send Code</button>
                            </form>

                            <!-- Active sessions -->
                            <form>
                                <h6>Active sessions</h6>
                                <p class="mb-2">Selecting "Sign out" will sign you out from all devices except this one.
                                    This can take up to 10 minutes.</p>
                                <button class="btn btn-sm btn-danger mb-0">Sign Out</button>
                            </form>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Security settings END -->
                </div>
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