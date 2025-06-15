<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Summary</title>
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
    <section class="job-summary-main-section d-flex flex-column">
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('imgs/logo.png') }}" class="img-fluid" style="max-height: 60px"
                        id="navbar-logo" />
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

                    <a href="#" class="btn subscribe-btn">Subscribe</a>
                </div>
            </div>
        </nav>
        <div class="container d-flex flex-column justify-content-center flex-grow-1">
            <div class="overlay-content">
                <h1 class="title">
                    <span class="line1">Customer Service</span>
                </h1>
                <div class="details d-flex mt-4">
                    <div class="d-flex align-items-center text-muted me-5">
                        <i class="fas fa-map-marker-alt me-3"></i>
                        <span>Cairo, egypt</span>
                    </div>

                    <div class="d-flex align-items-center text-muted">
                        <i class="fa-solid fa-business-time me-3"></i>
                        <span>Full Time</span>
                    </div>
                </div>
                <div class="buttons mt-4 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn subscribe-btn px-4 py-2">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Job Summary -->
    <section class="job-summary section-white">
        <div class="container">
            <h2>Job Summary</h2>
            <ul class="mb-0 ps-3 mt-4">
                <li>
                    Answering questions and inquiries that arrive through the website or
                    WhatsApp.
                </li>
                <li>
                    Explaining and clarifying the features of the service for users.
                </li>
            </ul>
            <hr class="w-50 mt-5 mb-5" />
            <div class="requirement">
                <ul class="mb-0 ps-3 mt-4">
                    <li>At least one year experience in the same position</li>
                    <li>excel sheet proficiency</li>
                    <li>The ability to communicate well and positively in dealing</li>
                    <li>Graduates only</li>
                    <li>Work from the company's headquarters, not online</li>
                    <li>Working hours from 10 am to 6 pm</li>
                </ul>
                <div class="buttons mt-5 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn subscribe-btn px-4 py-2">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Apply -->
    <div class="form-section">
        <div class="container">
            <h2 class="title-form">Apply</h2>
            <form class="mt-3">
                <div class="mb-3">
                    <label for="clientname" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="clientname" placeholder="Enter Your Email" />
                </div>
                <label for="phone" class="number">Enter your number</label>
                <input id="phone" type="tel" name="phone" />
                <div class="mt-4">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" aria-describedby="emailHelp"
                        placeholder="Enter Your Email" />
                </div>
                <div class="mt-4">
                    <h4 class="form-label not-important">Are You in /////?</h4>
                    <div class="form-check m-0">
                        <input class="form-check-input me-3" type="radio" name="radioDefault"
                            id="radioDefault1" />
                        <label class="form-check-label" for="radioDefault1"> Yes </label>
                    </div>
                    <div class="form-check m-0">
                        <input class="form-check-input me-3" type="radio" name="radioDefault"
                            id="radioDefault1" />
                        <label class="form-check-label" for="radioDefault1"> No </label>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="notes" class="form-label not-important">Notes</label>
                    <input type="text" class="form-control" id="notes" aria-describedby="emailHelp"
                        placeholder="Enter Your Email" />
                </div>
                <div class="buttons mt-5 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn subscribe-btn px-4 py-2 w-50">Send</a>
                </div>
            </form>
        </div>
    </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector(".navbar");
            const logo = document.getElementById("navbar-logo");

            console.log(logo);

            function isOverWhiteSection() {
                const whiteSections = document.querySelectorAll(".section-white");
                const navbarHeight = navbar.offsetHeight;

                for (const section of whiteSections) {
                    const rect = section.getBoundingClientRect();
                    if (rect.top <= navbarHeight && rect.bottom >= navbarHeight) {
                        return true;
                    }
                }
                return false;
            }

            function updateNavbar() {
                const isWhite = isOverWhiteSection();

                navbar.classList.toggle("navbar-light", isWhite);
                navbar.classList.toggle("navbar-custom", !isWhite);

                logo.src = isWhite ?
                    "{{asset('imgs/logo (1).png')}}" :
                    "{{asset('imgs/logo.png')}}";
            }

            window.addEventListener("scroll", updateNavbar);
            window.addEventListener("resize", updateNavbar);
            updateNavbar();
        });
    </script>
</body>

</html>
