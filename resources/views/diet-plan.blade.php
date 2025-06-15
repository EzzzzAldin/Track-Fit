<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diet Plan</title>
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
    <!-- Start Main Section -->
    <section class="diet-plan-section">
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}#about">Exercise</a></li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Diet Plan</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>

                    <img src="{{ asset('imgs/image 792.png') }}" class="img-fluid" style="max-height: 60px" />
                </div>
            </div>
        </nav>
        <div class="diet-plan-info mt-5 py-5 d-flex flex-column align-items-center justify-content-center">
            <h2>Plan</h2>
            <div class="pdf-name mt-4">Name PDF</div>
            <p class="mt-3 fs-5 fw-light text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                deleniti fugit soluta .</p>
            <div class="buttons mt-2 d-flex gap-3 flex-wrap">
                <a href="#" class="btn subscribe-btn px-4 py-2 w-100">Download PDF</a>
            </div>
        </div>
    </section>
    <!-- End Main Section -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js"></script>

    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "auto",
            preferredCountries: ["sa", "eg", "ae", "jo", "kw"],
            separateDialCode: true,
            nationalMode: false,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js",
            geoIpLookup: function(callback) {
                // You can use a real IP lookup service here. For now, default to "sa".
                callback("sa");
            },
        });
    </script>
</body>

</html>
