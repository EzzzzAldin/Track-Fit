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
</head>

<body>
    <!-- Start Main Section -->
    <section class="main-section d-flex flex-column">
        @include('layouts.header')
        <div class="container d-flex flex-column justify-content-center flex-grow-1">
            <div class="overlay-content">
                <h1 class="title">
                    <span class="line1">Together, we build</span><br />
                    <span class="line2">a healthier community.</span>
                </h1>
                <p class="description mt-3">
                    Welcome to our gym, where we are dedicated to helping you achieve
                    your fitness goals. With expert trainers and state-of-the-art
                    equipment.
                </p>
                <div class="buttons mt-4 d-flex gap-3 flex-wrap">
                    <a href="#" class="btn btn-main px-4 py-2">Our Packages</a>
                    <a href="#" class="btn btn-gradient-outline px-4 py-2">
                        Get your free plan
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Section -->
    <!-- Start about Section -->
    <section class="about section-white" id="about">
        <div class="container my-5">
            <div class="row align-items-stretch" style="min-height: 400px">
                <!-- Left Content -->
                <div class="col-lg-6 d-flex flex-column justify-content-start mb-4 mb-lg-0">
                    <div class="w-100">
                        <h2 class="about-title fw-bold mb-3">ABOUT US</h2>
                        <p class="mt-5">
                            Welcome to Our Gym, where fitness meets passion, and every drop
                            of sweat tells a story of dedication. Our gym isn't just a place
                            to work out; it's a community, a lifestyle, and a commitment to
                            your well-being. We are committed to providing a safe,
                            inclusive, and inspiring space for individuals of all ages and
                            fitness levels. Whether you're a seasoned gym-goer or just
                            starting, we are here to support you every step of the way.
                        </p>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('imgs/image 1.png') }}" alt="Fitness" class="img-fluid"
                        style="max-height: 400px; object-fit: contain; width: 100%" />
                </div>
            </div>
        </div>
    </section>
    <!-- Start Our Service Section -->
    <section class="our-services section-white">
        <div class="container">
            <h2 class="service-title fw-bold mb-3">Our Service</h2>
            <div class="row g-4 mt-2 our-services">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card custom-card text-center p-3">
                        <img src="{{ asset('imgs/In Progress.png') }}" class="img-fluid mx-auto d-block custom-img"
                            alt="Customized Programs" />
                        <div class="card-body">
                            <h5 class="card-title mt-4">Customized Programs</h5>
                            <p class="card-text mt-3">
                                Your training program is designed by our professionals with
                                SST methodology based on your needs and data (food
                                preferences, your working conditions.. )
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card custom-card text-center p-3">
                        <img src="{{ asset('imgs/Pullups.png') }}"
                            class="img-fluid mx-auto d-block
                            custom-img"
                            alt="Fully training" />
                        <div class="card-body">
                            <h5 class="card-title mt-4">Fully training</h5>
                            <p class="card-text mt-3">
                                Not just bodybuilding! You'll definitely get the better shape
                                with us, but moreover, our methodology qualifies you to be a
                                better athlete in all respects.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card custom-card text-center p-3">
                        <img src="{{ asset('imgs/In Progress.png') }}" class="img-fluid mx-auto d-block custom-img"
                            alt="Follow-up" />
                        <div class="card-body">
                            <h5 class="card-title mt-4">
                                You will get a follow-up all the time
                            </h5>
                            <p class="card-text mt-3">
                                Through your chat on WhatsApp, you can contact nutrition,
                                bodybuilding, injuries, flexibility, and fitness experts. we
                                are with you the whole way.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Discover Section -->
    <section class="discover section-white">
        <div class="container">
            <h2 class="discover-title fw-bold mb-3">
                {{ $discover->address ?? ' - ' }}
            </h2>
            <p class="mt-2">
                {{ $discover->description ?? ' - ' }}
            </p>
            <div class="full-width-image mt-5">
                <video class="w-100" controls>
                    <source src="{{ asset('storage/' . $discover->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
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
    <section class="training position-relative section-white" id="programs">
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
    <section class="our-packages section-white" id="join">
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
                            <a href="{{ route('price') }}" class="btn btn-join w-50">Join Now</a>
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
                            <a href="{{ route('price') }}" class="btn btn-join w-50">Join Now</a>
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
                            <a href="{{ route('price') }}" class="btn btn-join w-50">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Packages Section -->
    <!-- Start Our Champions Section -->
    <section class="our-champion" id="transformations">
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
    <section class="jobs section-white" id="career">
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
                <a href="{{ route('jobs') }}" class="btn subscribe-btn">Show All Jobs</a>
            </div>
        </div>
    </section>
    <!--End Jobs Section -->
    <!--Start Footer Section -->
    @include('layouts.footer')
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
</body>

</html>
