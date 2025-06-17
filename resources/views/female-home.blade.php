<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Niconne&family=Sniglet:wght@400;800&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Niconne&family=Sniglet:wght@400;800&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Start Main Section -->
    @include('layouts.header-female')
    <section class="female-main-section d-flex flex-column">
        <div class="overlay-female"></div>
        <div class="container d-flex flex-column justify-content-center flex-grow-1">
            <div class="overlay-content">
                <h1 class="title text-center">
                    <span class="line1">Shape your body </span>
                </h1>
                <p class="description mt-3 text-center w-75">
                    Joining Fit Ladies not only improves your physical health and helps you get in shape, but it also
                    enhances your mental well-being and overall lifestyle.
                </p>
                <div class="buttons mt-4 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn female-subscribe-btn px-4 py-2">Get Started</a>
                    <a href="#" class="btn female-btn px-4 py-2">
                        Get your free diet plan
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Section -->
    <!-- Start transform Section -->
    <section class="transform section-white" id="transform">
        <div class="container my-5">
            <div class="row align-items-stretch" style="min-height: 400px">
                <!-- Left Content -->
                <div class="col-lg-6 d-flex flex-column justify-content-start mb-4 mb-lg-0">
                    <div class="w-100">
                        <h2 class="mb-5">Transform Your Fitness</h2>

                        <!-- Repeated Feature Blocks -->
                        <div class="mb-4">
                            <h5 class="fw-semibold">Nutrition programs tailored to you</h5>
                            <p class="text-dark fw-medium mt-4">
                                Our nutrition programs are customized to meet your individual needs, goals, preferences,
                                dietary requirements, and daily schedule, with expert guidance from our team of
                                professionals.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-semibold">Nutrition programs tailored to you</h5>
                            <p class="text-dark fw-medium mt-4">
                                Our nutrition programs are customized to meet your individual needs, goals, preferences,
                                dietary requirements, and daily schedule, with expert guidance from our team of
                                professionals.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-semibold">Nutrition programs tailored to you</h5>
                            <p class="text-dark fw-medium mt-4">
                                Our nutrition programs are customized to meet your individual needs, goals, preferences,
                                dietary requirements, and daily schedule, with expert guidance from our team of
                                professionals.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('imgs/24663451_6967501 1.png') }}" alt="Transform Fitness" class="img-fluid"
                        style="max-height: 100%; object-fit: contain; max-width: 100%" />
                </div>
            </div>

            <!-- Centered Button Under Row -->
            <div class="text-center mt-4">
                <a href="#get-started" class="btn female-subscribe-btn px-5 py-3">Get Started</a>
            </div>
        </div>
    </section>
    <!-- Start ladies-stories Section -->
    <section class="ladies-stories section-white py-5" id="ladies-stories">
        <div class="container">
            <h2 class="mb-5">Ladies Stories</h2>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border shadow-sm h-100">
                        <img src="{{ asset('imgs/image 791.png') }}" class="card-img-top" alt="...">
                        <div class="card-body border-pink text-center">
                            <small class="fw-semibold d-block mb-1">Rania Ashraf</small>
                            <h6 class="fw-medium mb-2">6-Fold Improvement in Running Distances!</h6>
                            <button class="btn female-subscribe-btn mt-3" data-bs-toggle="modal"
                                data-bs-target="#storyModal1">
                                Show Story
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border shadow-sm h-100">
                        <img src="{{ asset('imgs/image 791.png') }}" class="card-img-top" alt="...">
                        <div class="card-body border-pink text-center">
                            <small class="fw-semibold d-block mb-1">Rania Ashraf</small>
                            <h6 class="fw-medium mb-2">6-Fold Improvement in Running Distances!</h6>
                            <button class="btn female-subscribe-btn mt-3" data-bs-toggle="modal"
                                data-bs-target="#storyModal2">
                                Show Story
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border shadow-sm h-100">
                        <img src="{{ asset('imgs/image 791.png') }}" class="card-img-top" alt="...">
                        <div class="card-body border-pink text-center">
                            <small class="fw-semibold d-block mb-1">Rania Ashraf</small>
                            <h6 class="fw-medium mb-2">6-Fold Improvement in Running Distances!</h6>
                            <button class="btn female-subscribe-btn mt-3" data-bs-toggle="modal"
                                data-bs-target="#storyModal2">
                                Show Story
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Subscription Section -->
    <section class="subscription section-white mt-4 mb-5">
        <div class="overlay-female"></div>
        <div class="container d-flex flex-column align-items-center justify-content-center h-100 z-3">
            <h2 class="mt-5">Subscription Steps</h2>
            <div class="row mt-5 justify-content-center g-3">
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center text-center">
                    <div class="step step-pink">
                        <div class="outer-dots">
                            <span class="dot left-dot"></span>
                            <span class="dot right-dot"></span>
                        </div>
                        <div class="step-info">
                            <span class="step-num">01</span>
                            <span class="step-text">STEP</span>
                        </div>
                    </div>
                    <h4>Register your data through the website</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center text-center">
                    <div class="step step-yl">
                        <div class="outer-dots">
                            <span class="dot left-dot"></span>
                            <span class="dot right-dot"></span>
                        </div>
                        <div class="step-info">
                            <span class="step-num">02</span>
                            <span class="step-text">STEP</span>
                        </div>
                    </div>
                    <h4>We will contact you on WhatsApp</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center text-center">
                    <div class="step step-gr">
                        <div class="outer-dots">
                            <span class="dot left-dot"></span>
                            <span class="dot right-dot"></span>
                        </div>
                        <div class="step-info">
                            <span class="step-num">03</span>
                            <span class="step-text">STEP</span>
                        </div>
                    </div>
                    <h4>You will send us your tests and measurements</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center text-center">
                    <div class="step step-sk">
                        <div class="outer-dots">
                            <span class="dot left-dot"></span>
                            <span class="dot right-dot"></span>
                        </div>
                        <div class="step-info">
                            <span class="step-num">04</span>
                            <span class="step-text">STEP</span>
                        </div>
                    </div>
                    <h4>We will deliver training and nutritional programs to you and stay with you step by </h4>
                </div>
            </div>

        </div>
    </section>
    <!-- End Discover Section -->
    <!-- Start Our Partners Section -->
    <section class="our-partners female-partners section-white">
        <h2 class="partners-title fw-bold mb-3">Our Partners</h2>
        <p>Proud of each of our partners</p>
        <div class="container my-5">
            <div class="row g-4 text-center">
                @foreach ($parteners as $partener)
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="{{ asset('storage/' . $partener->logo) }}" class="img-fluid" alt="Partner Logo" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Partners Section -->
    <!-- Start Our Packages Section -->
    <section class="our-packages female-packages section-white">
        <h2 class="packages-title fw-bold mb-3">Our Packages</h2>
        <p>
            Choose the package that suits you and subscribe to it with simple steps
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap my-4">
            <button class="btn toggle-btn active" id="monthlyBtn">Monthly</button>
            <button class="btn toggle-btn" id="yearlyBtn">Yearly</button>
        </div>
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="custom-card">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('imgs/36087510_8353546 1.png') }}" alt="Card Image 1"
                                class="img-fluid" />
                            <div class="price">100$</div>
                        </div>
                        <div class="custom-card-body">
                            <h3 class="custom-card-title mt-5">BASIC GYM</h3>
                            <ul class="custom-card-list mt-5">
                                <li>Unlimited club access</li>
                                <li>Group attendance</li>
                                <li>Gym visits</li>
                                <li>Visits to the bath complex</li>
                                <li>Gym, fight club</li>
                            </ul>
                            <button class="btn btn-join w-50">Join Now</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="custom-card">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('imgs/36087510_8353546 1.png') }}" alt="Card Image 1"
                                class="img-fluid" />
                            <div class="price">100$</div>
                        </div>
                        <div class="custom-card-body">
                            <h3 class="custom-card-title mt-5">BASIC GYM</h3>
                            <ul class="custom-card-list mt-5">
                                <li>Unlimited club access</li>
                                <li>Group attendance</li>
                                <li>Gym visits</li>
                                <li>Visits to the bath complex</li>
                                <li>Gym, fight club</li>
                            </ul>
                            <button class="btn btn-join w-50">Join Now</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="custom-card">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('imgs/36087510_8353546 1.png') }}" alt="Card Image 1"
                                class="img-fluid" />
                            <div class="price">100$</div>
                        </div>
                        <div class="custom-card-body">
                            <h3 class="custom-card-title mt-5">BASIC GYM</h3>
                            <ul class="custom-card-list mt-5">
                                <li>Unlimited club access</li>
                                <li>Group attendance</li>
                                <li>Gym visits</li>
                                <li>Visits to the bath complex</li>
                                <li>Gym, fight club</li>
                            </ul>
                            <button class="btn btn-join w-50">Join Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Packages Section -->
    <!--Start Frequently Section -->
    <section class="frequently frequently-female section-white">
        <div class="container">
            <h2 class="training-title fw-bold mb-3">
                Frequently Asked Questions ?
            </h2>
            <p class="mt-5">What does the medical and sports team offer you?</p>
            <div class="accordion" id="accordionExample">
                @foreach ($fqas as $fqa)
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne{{ $fqa->id }}" aria-expanded="false"
                                aria-controls="collapseOne{{ $fqa->id }}">
                                {{ $fqa->question ?? ' - ' }}
                                <span class="accordion-icon"></span>
                            </button>
                        </h2>
                        <div id="collapseOne{{ $fqa->id }}" class="accordion-collapse collapse"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $fqa->answer ?? ' - ' }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Frequently Section -->
    <!--Start Footer Section -->
    <footer class="footer-female">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <a class="navbar-brand mb-5" href="#">
                        <img src="{{ asset('imgs/logo-female.png') }}" class="img-fluid" style="max-height: 80px" />
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
    <!-- Modal -->
    <div class="modal fade" id="storyModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title">Rania Ashraf</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body text-center">
                        <div class="row g-2 mb-3">
                            <div class="col-6 position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('imgs/image 791.png') }}" class="img-fluid rounded"
                                        alt="..." style="object-fit: cover;">
                                </div>
                                <div class="position-absolute btn-modal-before">Before</div>
                            </div>
                            <div class="col-6 position-relative">
                                <div class="ratio ratio-1x1 position-relative">
                                    <img src="{{ asset('imgs/image 791.png') }}" class="img-fluid rounded"
                                        alt="..." style="object-fit: cover;">
                                </div>
                                <div class="position-absolute btn-modal-after">After</div>
                            </div>
                        </div>

                        <h5 class="second-title text-start">Rania Ashraf</h5>
                        <p class="fs-5 fw-normal text-muted text-start mt-3">
                            Our champion, "Nesma Adel," a 33-year-old freelance chef, joined us 3 months ago with the
                            goal of changing her lifestyle to a healthier one. Her work doesn't require significant
                            physical effort on a daily basis, which posed one of the initial challenges we faced. We
                            started learning more about Nesma's daily routine in order to design suitable programs for
                            her, taking into consideration her Inbody results, measurements, and the tests we requested
                            from her. Based on this information, we designed training programs and a nutrition plan that
                            catered to her body's needs and her goals. Through her 3-month subscription with us, Nesma
                            achieved remarkable progress. Exercising from home was more suitable for her, and we
                            designed the training programs accordingly. Within these 3 months, Nesma improved her
                            fitness level, flexibility, endurance, and running distances. She adopted a healthy
                            lifestyle that was both enjoyable and compatible with her daily routine. Her body fat
                            percentage decreased, and she lost 10 kilograms . Naturally, we provided daily support and
                            maintained constant communication to address any challenges she faced. Her programs were
                            consistently refined based on the results of each assessment. We take immense pride in
                            Nesma's remarkable progress and value her commitment to our program. You can also take the
                            first step towards a healthy lifestyle and becoming the best version of yourself by joining
                            us. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="storyModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title">Rania Ashraf</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body text-center">
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('imgs/image 791.png') }}" class="img-fluid rounded"
                                        alt="..." style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('imgs/image 791.png') }}" class="img-fluid rounded"
                                        alt="..." style="object-fit: cover;">
                                </div>
                            </div>
                        </div>

                        <h5 class="second-title text-start">Rania Ashraf</h5>
                        <p class="fs-5 fw-normal text-muted text-start mt-3">
                            Our champion, "Nesma Adel," a 33-year-old freelance chef, joined us 3 months ago with the
                            goal of changing her lifestyle to a healthier one. Her work doesn't require significant
                            physical effort on a daily basis, which posed one of the initial challenges we faced. We
                            started learning more about Nesma's daily routine in order to design suitable programs for
                            her, taking into consideration her Inbody results, measurements, and the tests we requested
                            from her. Based on this information, we designed training programs and a nutrition plan that
                            catered to her body's needs and her goals. Through her 3-month subscription with us, Nesma
                            achieved remarkable progress. Exercising from home was more suitable for her, and we
                            designed the training programs accordingly. Within these 3 months, Nesma improved her
                            fitness level, flexibility, endurance, and running distances. She adopted a healthy
                            lifestyle that was both enjoyable and compatible with her daily routine. Her body fat
                            percentage decreased, and she lost 10 kilograms . Naturally, we provided daily support and
                            maintained constant communication to address any challenges she faced. Her programs were
                            consistently refined based on the results of each assessment. We take immense pride in
                            Nesma's remarkable progress and value her commitment to our program. You can also take the
                            first step towards a healthy lifestyle and becoming the best version of yourself by joining
                            us. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="storyModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title">Rania Ashraf</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body text-center">
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('imgs/image 791.png') }}" class="img-fluid rounded"
                                        alt="..." style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ratio ratio-1x1">
                                    <img src="{{ asset('imgs/image 791.png') }}" class="img-fluid rounded"
                                        alt="..." style="object-fit: cover;">
                                </div>
                            </div>
                        </div>

                        <h5 class="second-title text-start">Rania Ashraf</h5>
                        <p class="fs-5 fw-normal text-muted text-start mt-3">
                            Our champion, "Nesma Adel," a 33-year-old freelance chef, joined us 3 months ago with the
                            goal of changing her lifestyle to a healthier one. Her work doesn't require significant
                            physical effort on a daily basis, which posed one of the initial challenges we faced. We
                            started learning more about Nesma's daily routine in order to design suitable programs for
                            her, taking into consideration her Inbody results, measurements, and the tests we requested
                            from her. Based on this information, we designed training programs and a nutrition plan that
                            catered to her body's needs and her goals. Through her 3-month subscription with us, Nesma
                            achieved remarkable progress. Exercising from home was more suitable for her, and we
                            designed the training programs accordingly. Within these 3 months, Nesma improved her
                            fitness level, flexibility, endurance, and running distances. She adopted a healthy
                            lifestyle that was both enjoyable and compatible with her daily routine. Her body fat
                            percentage decreased, and she lost 10 kilograms . Naturally, we provided daily support and
                            maintained constant communication to address any challenges she faced. Her programs were
                            consistently refined based on the results of each assessment. We take immense pride in
                            Nesma's remarkable progress and value her commitment to our program. You can also take the
                            first step towards a healthy lifestyle and becoming the best version of yourself by joining
                            us. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const monthlyBtn = document.getElementById("monthlyBtn");
        const yearlyBtn = document.getElementById("yearlyBtn");

        monthlyBtn.addEventListener("click", () => {
            monthlyBtn.classList.add("active");
            yearlyBtn.classList.remove("active");
        });

        yearlyBtn.addEventListener("click", () => {
            yearlyBtn.classList.add("active");
            monthlyBtn.classList.remove("active");
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector(".navbar");
            const logo = document.getElementById("navbar-logo-female");

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
                    "{{ asset('imgs/logo-female2.png') }}" :
                    "{{ asset('imgs/logo-female.png') }}";
            }

            window.addEventListener("scroll", updateNavbar);
            window.addEventListener("resize", updateNavbar);
            updateNavbar();
        });
    </script>
</body>

</html>
