<?php include('../head.php')?>

<section class="vh-xxl-100">
    <div class="container h-100 d-flex px-0 px-sm-4">
        <div class="row justify-content-center align-items-center m-auto">
            <div class="col-12">
                <div class="bg-mode shadow rounded-3 overflow-hidden">
                    <div class="row g-0">
                        <!-- Vector Image -->
                        <div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
                            <div class="p-3 p-lg-5">
                                <img src="../assets/images/image-mini/signin.svg" alt="">
                            </div>
                            <!-- Divider -->
                            <div class="vr opacity-1 d-none d-lg-block"></div>
                        </div>

                        <!-- Information -->
                        <div class="col-lg-6 order-1">
                            <div class="p-4 p-sm-6">
                                <!-- Logo -->
                                <a href="index.html">
                                    <img class="h-50px mb-4" src="../assets/images/image-mini/logo-icon.svg" alt="logo">
                                </a>
                                <!-- Title -->
                                <h1 class="mb-2 h3">Create new account</h1>
                                <p class="mb-0">Already a member?<a href="sign-in.php"> Log in</a></p>

                                <!-- Form START -->
                                <form class="mt-4 text-start" method="POST" role="form" action="register_submit.php">
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label class="form-label" for="">Enter Your Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Input field"
                                            name="name">

                                    </div>
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label class="form-label" for="">Enter email id</label>
                                        <input type="text" class="form-control" id="" placeholder="Input field"
                                            name="email">

                                    </div>
                                    <!-- Password -->
                                    <div class="mb-3 position-relative">
                                        <label class="form-label" for="">Enter password</label>
                                        <input class="form-control fakepassword" type="password" id="password"
                                            placeholder="Input field" name="password">
                                        <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3"
                                            id="showPasswordContainer" onclick="togglePasswordVisibility()">
                                            <i class="fakepasswordicon fas fa-eye cursor-pointer p-2"
                                                id="showPasswordIcon"></i>
                                        </span>

                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label class="form-label" for="">Confirm Password</label>
                                        <input type="password " class="form-control  fakepassword" id="password"
                                            placeholder="Input field" name="confirm_password">
                                    </div>
                                    <!-- Remember me -->
                                    <div class="mb-3">
                                        <input type="checkbox" class="form-check-input" id="rememberCheck">
                                        <label class="form-check-label" for="rememberCheck">Keep me signed in</label>
                                    </div>
                                    <!-- Button -->
                                    <div><button type="submit" name="submit" class="btn btn-primary w-100 mb-0">Sign
                                            up</button></div>

                                    <!-- Divider -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p
                                            class="small position-absolute top-50 start-50 translate-middle bg-mode px-1 px-sm-2">
                                            Or sign in with</p>
                                    </div>

                                    <!-- Google and facebook button -->
                                    <div class="vstack gap-3">
                                        <a href="#" class="btn btn-light mb-0"><i
                                                class="fab fa-fw fa-google text-google-icon me-2"></i>Sign in with
                                            Google</a>
                                        <a href="#" class="btn btn-light mb-0"><i
                                                class="fab fa-fw fa-facebook-f text-facebook me-2"></i>Sign in with
                                            Facebook</a>
                                    </div>

                                    <!-- Copyright -->
                                    <div class="text-primary-hover text-body mt-3 text-center"> Copyrights ©2023
                                        Booking. Build by <a href="https://www.webestica.com/" class="text-body">Cao
                                            Thanh Danh</a>. </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function togglePasswordVisibility() {
    var passwordField = document.getElementById('password');
    var showPasswordIcon = document.getElementById('showPasswordIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        showPasswordIcon.classList.remove('fa-eye');
        showPasswordIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        showPasswordIcon.classList.remove('fa-eye-slash');
        showPasswordIcon.classList.add('fa-eye');
    }
}
</script>