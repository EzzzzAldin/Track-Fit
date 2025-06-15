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
    <section class="female-main-section d-flex flex-column">
        <div class="overlay-female"></div>
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('imgs/logo-female.png') }}" class="img-fluid" style="max-height: 60px"
                        id="navbar-logo-female" />
                </a>

                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
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
                    <span class="line1">Shape your body </span>
                </h1>
                <p class="description mt-3 text-center w-75">
                    Joining Fit Ladies not only improves your physical health and helps you get in shape, but it also
                    enhances your mental well-being and overall lifestyle.
                </p>
                <div class="buttons mt-4 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn subscribe-btn px-4 py-2">Get Started</a>
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
                            <a href="#" class="btn female-subscribe-btn mt-3">Show Story</a>
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
                            <a href="#" class="btn female-subscribe-btn mt-3">Show Story</a>
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
                            <a href="#" class="btn female-subscribe-btn mt-3">Show Story</a>
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
    <section class="our-partners section-white">
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
    <!-- Start The Journey Section -->
    <section class="journey section-white">
        <div class="container">
            <h2 class="journey-title fw-bold mb-3">The Journey</h2>
            <div class="row g-4 text-center mt-5">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="custom-card p-4 h-100 text-start">
                        <div class="card-number">1</div>
                        <h5 class="mt-5 fw-bold">Tests and measurement</h5>
                        <p class="mt-4">
                            Our team will get in touch with you to take the required
                            measurements and results of the tests to develop your program.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="custom-card p-4 h-100 text-start">
                        <div class="card-number">2</div>
                        <h5 class="mt-5 fw-bold">Receive your training program</h5>
                        <p class="mt-4">
                            Receive your customized training programs and start the journey
                            of transformation.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="custom-card p-4 h-100 text-start">
                        <div class="card-number">3</div>
                        <h5 class="mt-5 fw-bold">Tests and measurement</h5>
                        <p class="mt-4">
                            Our team will get in touch with you to take the required
                            measurements and results of the tests to develop your program.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="custom-card p-4 h-100 text-start">
                        <div class="card-number">4</div>
                        <h5 class="mt-5 fw-bold">Receive your training program</h5>
                        <p class="mt-4">
                            Receive your customized training programs and start the journey
                            of transformation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End The Journey Section -->
    <!-- Start Training Programs Section -->
    <section class="training position-relative section-white">
        <div class="container">
            <h2 class="training-title fw-bold mb-3">Training Programs</h2>
            <p class="mt-5">What does the medical and sports team offer you?</p>
            <div class="training-image-wrapper position-relative">
                <div id="carouselTrainingText" class="carousel slide w-100" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <div class="carousel-inner text-center">
                        @foreach ($trainingPrograms as $program)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative">
                                <img src="{{ asset('storage/' . $program->image) }}" class="w-100 training-img"
                                    alt="Training Image" />
                                <div
                                    class="training-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                    <div class="text-center carousel-inner p-4">
                                        <h2 class="fw-bold">{{ $program->title }}</h2>
                                        <p class="mt-3">{{ $program->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev d-flex justify-content-start custom-carousel-btn"
                        type="button" data-bs-target="#carouselTrainingText" data-bs-slide="prev">
                        <i class="fa-solid fa-angles-left"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-flex justify-content-end custom-carousel-btn"
                        type="button" data-bs-target="#carouselTrainingText" data-bs-slide="next">
                        <i class="fa-solid fa-angles-right"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Training Programs Section -->
    <!-- Start Our Packages Section -->
    <section class="our-packages section-white">
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
                            <img src="{{ asset('imgs/image 10.png') }}" alt="Card Image 1" class="img-fluid" />
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
                            <img src="{{ asset('imgs/image 10.png') }}" alt="Card Image 1" class="img-fluid" />
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
                            <img src="{{ asset('imgs/image 10.png') }}" alt="Card Image 1" class="img-fluid" />
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
    <!-- Start Our Champions Section -->
    <section class="our-champion">
        <div class="container">
            <h2 class="champion-title fw-bold mb-3">Our Champions' Stories</h2>
            <div id="storyCarousel" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <!-- slide 1 -->
                    <div class="carousel-item active">
                        <div class="row align-items-center flex-column flex-md-row">
                            <div class="col-12 col-md-12 col-lg-6 order-2 order-lg-1">
                                <p class="lead">
                                    Nutrition specialists always consider your preferences and
                                    incorporate them into your meal plan, making the diet more
                                    enjoyable," emphasized our champion today, Wael Habeib, aged
                                    37. He stresses that the primary goal of a diet is to eat
                                    healthily, enjoying what you love, while still achieving
                                    your objectives through commitment to exercise schedules. In
                                    4 months of Wael's dedication, we achieved: - Doubled
                                    exercise weights. - Doubled fitness metrics. - Attained an
                                    excellent body shape. - Reduced body fat percentage from 15%
                                    to 7%. - Achieved a muscle mass of 47kg. Do you think you
                                    can achieve similar results by committing to the programs we
                                    design for you? Visit salahseleemteam.com.
                                </p>
                                <h5 class="mb-3">Wael Habeb</h5>
                                <button class="btn btn-main px-4 py-2">Full Story</button>
                            </div>
                            <div
                                class="col-12 col-md-12 col-lg-6 order-1 order-lg-2 d-flex justify-content-center mb-5">
                                <img src="{{ asset('imgs/Frame 1261156237.png') }}" alt="Story Image"
                                    class="rounded"
                                    style="
                      width: 100%;
                      max-width: 560;
                      aspect-ratio: 1 / 1;
                      object-fit: cover;
                    " />
                            </div>
                        </div>
                    </div>

                    <!-- slide 2 -->
                    <div class="carousel-item">
                        <div class="row align-items-center flex-column flex-md-row">
                            <div class="col-12 col-md-12 col-lg-6 order-2 order-lg-1">
                                <p class="lead">
                                    Nutrition specialists always consider your preferences and
                                    incorporate them into your meal plan, making the diet more
                                    enjoyable," emphasized our champion today, Wael Habeib, aged
                                    37. He stresses that the primary goal of a diet is to eat
                                    healthily, enjoying what you love, while still achieving
                                    your objectives through commitment to exercise schedules. In
                                    4 months of Wael's dedication, we achieved: - Doubled
                                    exercise weights. - Doubled fitness metrics. - Attained an
                                    excellent body shape. - Reduced body fat percentage from 15%
                                    to 7%. - Achieved a muscle mass of 47kg. Do you think you
                                    can achieve similar results by committing to the programs we
                                    design for you? Visit salahseleemteam.com.
                                </p>
                                <h5 class="mb-3">Wael Habeb</h5>
                                <button class="btn btn-main px-4 py-2">Full Story</button>
                            </div>
                            <div
                                class="col-12 col-md-12 col-lg-6 order-1 order-lg-2 d-flex justify-content-center mb-5">
                                <img src="{{ asset('imgs/Frame 1261156237.png') }}" alt="Story Image"
                                    class="rounded"
                                    style="
                      width: 100%;
                      max-width: 560;
                      aspect-ratio: 1 / 1;
                      object-fit: cover;
                    " />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center flex-column flex-md-row">
                            <div class="col-12 col-md-12 col-lg-6 order-2 order-lg-1">
                                <p class="lead">
                                    Nutrition specialists always consider your preferences and
                                    incorporate them into your meal plan, making the diet more
                                    enjoyable," emphasized our champion today, Wael Habeib, aged
                                    37. He stresses that the primary goal of a diet is to eat
                                    healthily, enjoying what you love, while still achieving
                                    your objectives through commitment to exercise schedules. In
                                    4 months of Wael's dedication, we achieved: - Doubled
                                    exercise weights. - Doubled fitness metrics. - Attained an
                                    excellent body shape. - Reduced body fat percentage from 15%
                                    to 7%. - Achieved a muscle mass of 47kg. Do you think you
                                    can achieve similar results by committing to the programs we
                                    design for you? Visit salahseleemteam.com.
                                </p>
                                <h5 class="mb-3">Wael Habeb</h5>
                                <button class="btn btn-main px-4 py-2">Full Story</button>
                            </div>
                            <div
                                class="col-12 col-md-12 col-lg-6 order-1 order-lg-2 d-flex justify-content-center mb-5">
                                <img src="{{ asset('imgs/Frame 1261156237.png') }}" alt="Story Image"
                                    class="rounded"
                                    style="
                      width: 100%;
                      max-width: 560;
                      aspect-ratio: 1 / 1;
                      object-fit: cover;
                    " />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center flex-column flex-md-row">
                            <div class="col-12 col-md-12 col-lg-6 order-2 order-lg-1">
                                <p class="lead">
                                    Nutrition specialists always consider your preferences and
                                    incorporate them into your meal plan, making the diet more
                                    enjoyable," emphasized our champion today, Wael Habeib, aged
                                    37. He stresses that the primary goal of a diet is to eat
                                    healthily, enjoying what you love, while still achieving
                                    your objectives through commitment to exercise schedules. In
                                    4 months of Wael's dedication, we achieved: - Doubled
                                    exercise weights. - Doubled fitness metrics. - Attained an
                                    excellent body shape. - Reduced body fat percentage from 15%
                                    to 7%. - Achieved a muscle mass of 47kg. Do you think you
                                    can achieve similar results by committing to the programs we
                                    design for you? Visit salahseleemteam.com.
                                </p>
                                <h5 class="mb-3">Wael Habeb</h5>
                                <button class="btn btn-main px-4 py-2">Full Story</button>
                            </div>
                            <div
                                class="col-12 col-md-12 col-lg-6 order-1 order-lg-2 d-flex justify-content-center mb-5">
                                <img src="{{ asset('imgs/Frame 1261156237.png') }}" alt="Story Image"
                                    class="rounded"
                                    style="
                      width: 100%;
                      max-width: 560;
                      aspect-ratio: 1 / 1;
                      object-fit: cover;
                    " />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators mt-4">
                    <button type="button" data-bs-target="#storyCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#storyCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#storyCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#storyCarousel" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
            </div>
        </div>
    </section>
    <!--Start Frequently Section -->
    <section class="frequently section-white">
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
    <!--Start Client Section -->
    <section class="client-says section-white">
        <h2 class="client-title fw-bold mb-3">Client Says</h2>
        <p>
            In the videos, you will hear the opinions of some of our champions.
            We're waiting to hear your opinion too, champ!
        </p>
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img src="{{ asset('imgs/image 1.png') }}" class="card-img-top img-fluid" alt="Media 1" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img src="{{ asset('imgs/image 1.png') }}" class="card-img-top img-fluid" alt="Media 2" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img src="{{ asset('imgs/image 1.png') }}" class="card-img-top img-fluid" alt="Media 3" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img src="{{ asset('imgs/image 1.png') }}" class="card-img-top img-fluid" alt="Media 4" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img src="{{ asset('imgs/image 1.png') }}" class="card-img-top img-fluid" alt="Media 5" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img src="{{ asset('imgs/image 1.png') }}" class="card-img-top img-fluid" alt="Media 6" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Client Section -->
    <!--Start Jobs Section -->
    <section class="jobs section-white">
        <div class="container">
            <h2 class="jobs-title fw-bold mb-3">Browse Jobs</h2>
            <div class="row g-4 mt-2 our-services">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card custom-card text-center p-3">
                        <img src="{{ asset('imgs/trainer 1.png') }}" class="img-fluid mx-auto d-block custom-img"
                            alt="Customized Programs" />
                        <div class="card-body">
                            <h5 class="card-title mt-4">Fitness Coaches</h5>
                            <p class="card-text mt-3">2 jobs available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card custom-card text-center p-3">
                        <img src="{{ asset('imgs/support 1.png') }}" class="img-fluid mx-auto d-block custom-img"
                            alt="Fully training" />
                        <div class="card-body">
                            <h5 class="card-title mt-4">Customer Service</h5>
                            <p class="card-text mt-3">2 jobs available</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card custom-card text-center p-3">
                        <img src="{{ asset('imgs/trainer 1.png') }}" class="img-fluid mx-auto d-block custom-img"
                            alt="Customized Programs" />
                        <div class="card-body">
                            <h5 class="card-title mt-4">Fitness Coaches</h5>
                            <p class="card-text mt-3">2 jobs available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card custom-card text-center p-3">
                        <img src="{{ asset('imgs/support 1.png') }}" class="img-fluid mx-auto d-block custom-img"
                            alt="Fully training" />
                        <div class="card-body">
                            <h5 class="card-title mt-4">Customer Service</h5>
                            <p class="card-text mt-3">2 jobs available</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn subscribe-btn">Show All Jobs</a>
            </div>
        </div>
    </section>
    <!--End Jobs Section -->
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
                    "{{ asset('imgs/logo (1).png') }}" :
                    "{{ asset('imgs/logo-female.png') }}";
            }

            window.addEventListener("scroll", updateNavbar);
            window.addEventListener("resize", updateNavbar);
            updateNavbar();
        });
    </script>
</body>

</html>
