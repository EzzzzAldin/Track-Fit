<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
        <h2 class="fw-bold whit-text">Login</h2>
        <div class="form-login mt-4">
            <h3 class="mb-3">Welcome Back!</h3>
            <p>Don’t have an account ?
                <a href="{{ route('signup') }}" class="sign">sign up</a>
            </p>
            <form>
                <div class="mb-3 mt-5">
                    <label for="phone" class="form-label">Your Phone</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Enter Your Phone Number" />
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" />

                    <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()"
                        style="cursor: pointer;">
                        <i class="fa-solid fa-eye" id="toggleIcon"></i>
                    </span>
                </div>
                <div class="buttons mt-5 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn subscribe-btn px-4 py-2 w-100">Login</a>
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

</body>

</html>
