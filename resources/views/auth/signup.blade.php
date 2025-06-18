<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/css/intlTelInput.css" />
</head>

<body>
    @include('layouts.header')
    <section class="login-section d-flex flex-column justify-content-center align-items-center section-white">
        <h2 class="fw-bold whit-text">Sign up</h2>
        <div class="form-signup mt-4">
            <h3 class="mb-3">Join Us Now</h3>
            <p>Already have an account ? <a href="{{ route('login') }}" class="sign">Login</a></p>
            <form>
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mt-5">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 col-md-6 mb-3 mt-5">
                        <label for="phone" class="form-label">Your Phone</label>
                        <input type="tel" class="form-control" id="phone"
                            placeholder="Enter Your Phone Number" />
                    </div>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" />

                    <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()"
                        style="cursor: pointer;">
                        <i class="fa-solid fa-eye" id="toggleIcon"></i>
                    </span>
                </div>
                <div class="mb-3 position-relative">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password"
                        placeholder="Enter Your Password" />

                    <span class="position-absolute top-50 end-0 translate-middle-y me-3"
                        onclick="toggleConfirmPassword()" style="cursor: pointer;">
                        <i class="fa-solid fa-eye" id="toggleConfirmIcon"></i>
                    </span>
                </div>
                <div class="mb-3 mt-5">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email" />
                </div>

                <div class="mb-3 col-12 col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select custom-select-style" id="gender" name="gender">
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mt-5">
                        <label for="height" class="form-label">Height</label>
                        <input type="number" class="form-control" id="height" placeholder="Enter Your Height" />
                    </div>
                    <div class="col-12 col-md-6 mb-3 mt-5">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" class="form-control" id="weight" placeholder="Enter Your Weight" />
                    </div>
                </div>

                <div class="buttons mt-5 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn subscribe-btn px-4 py-2 w-100">Sign up</a>
                </div>
            </form>
        </div>


    </section>
    <!--Start Footer Section -->
    @include('layouts.footer')
    <!--End Footer Section -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");

            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";
            toggleIcon.classList.toggle("fa-eye");
            toggleIcon.classList.toggle("fa-eye-slash");
        }
    </script>

    <script>
        function toggleConfirmPassword() {
            const confirmInput = document.getElementById("confirm-password");
            const toggleIcon = document.getElementById("toggleConfirmIcon");

            const isPassword = confirmInput.type === "password";
            confirmInput.type = isPassword ? "text" : "password";
            toggleIcon.classList.toggle("fa-eye");
            toggleIcon.classList.toggle("fa-eye-slash");
        }
    </script>


</body>

</html>
