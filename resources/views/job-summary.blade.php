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
    @include('layouts.header')
    <section class="job-summary-main-section d-flex flex-column">
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
            <hr class="mt-5 mb-5" />
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
                    <button type="button" class="btn subscribe-btn px-4 py-2" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4">

                <div class="modal-body">
                    <div class="form-section">
                        <div class="container">
                            <h2 class="title-form">Apply</h2>
                            <form class="mt-3">
                                <div class="mb-3">
                                    <label for="clientname" class="form-label">Your Name</label>
                                    <input type="text" class="form-control w-100" id="clientname"
                                        placeholder="Enter Your Email" />
                                </div>
                                <label for="phone" class="number">Enter your number</label>
                                <input id="phone" type="tel" name="phone" />

                                <div class="mt-4">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control w-100" id="age"
                                        placeholder="Enter Your Age" />
                                </div>

                                <div class="mt-4">
                                    <h4 class="form-label not-important">Are You in /////?</h4>
                                    <div class="form-check m-0">
                                        <input class="form-check-input me-3" type="radio" name="radioDefault"
                                            id="radioYes" />
                                        <label class="form-check-label" for="radioYes">Yes</label>
                                    </div>
                                    <div class="form-check m-0">
                                        <input class="form-check-input me-3" type="radio" name="radioDefault"
                                            id="radioNo" />
                                        <label class="form-check-label" for="radioNo">No</label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <label for="notes" class="form-label not-important">Notes</label>
                                    <input type="text" class="form-control w-100" id="notes"
                                        placeholder="Any notes" />
                                </div>

                                <div class="buttons mt-5 d-flex gap-3 flex-wrap">
                                    <a href="#" class="btn subscribe-btn px-4 py-2 w-100">Send</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Start Footer Section -->
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
                    "{{ asset('imgs/logo (1).png') }}" :
                    "{{ asset('imgs/logo.png') }}";
            }

            window.addEventListener("scroll", updateNavbar);
            window.addEventListener("resize", updateNavbar);
            updateNavbar();
        });
    </script>
</body>

</html>
