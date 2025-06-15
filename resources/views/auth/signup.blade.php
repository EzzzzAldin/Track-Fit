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
    <section class="login-section d-flex flex-column justify-content-center align-items-center">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('imgs/logo (1).png') }}" class="img-fluid" style="max-height: 60px" />
                </a>

                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}#about">About</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Workout Programs</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Recipes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Store</a></li>
                    </ul>

                    <a href="#" class="btn subscribe-btn">Login</a>
                </div>
            </div>
        </nav>
        <h2 class="fw-bold whit-text">Sign up</h2>
        <div class="form-signup mt-4">
            <h3 class="mb-3">Join Us Now</h3>
            <p>Already have an account ? <span class="sign">Login</span></p>
            <form>
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mt-5">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 col-md-6 mb-3 mt-5">
                        <label for="phone" class="form-label">Your Phone</label>
                        <input type="number" class="form-control" id="phone"
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <a class="navbar-brand mb-5" href="#">
                        <img src="{{ asset('imgs/logo.png') }}" class="img-fluid" style="max-height: 80px" />
                    </a>
                    <p class="info mt-5">
                        Join thousands of individuals in the strongest sports planning and
                        physical and health rehabilitation program that will help you
                        reach the best version of yourself.
                    </p>
                    <div class="social mt-5">
                        <h3>Follow us</h3>
                        <div class="icons mt-3">
                            <a class="m-1" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="m-1" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a class="m-1" href="#"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 pages">
                    <h5 class="mb-3">Pages</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <h5>Contact Us</h5>
                    <div class="d-flex align-items-center mt-5 contact-info">
                        <i class="fa-solid fa-phone me-4"></i>
                        <span>+20 123 456 7890</span>
                    </div>

                    <!-- Email -->
                    <div class="d-flex align-items-center mt-5 contact-info">
                        <i class="fas fa-envelope me-4"></i>
                        <span>example@email.com</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
