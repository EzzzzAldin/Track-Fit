<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/css/intlTelInput.css" />
</head>

<body>
    @include('layouts.header')
    <section class="jobs-main-section d-flex flex-column section-white">
        <div class="container contact">
            <h1>Get In touch with Us</h1>
            <div class="row">
                <div class="col-12 col-lg-7 mt-5">
                    <div class="box-contact mt-5 mb-5">
                        <h2 class="title-form">Leave a message</h2>
                        <p>
                            Fill out the form below, and our team will get back to you
                            promptly
                        </p>
                    </div>
                    <form class="mt-3">
                        <div class="mb-3">
                            <label for="clientname" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="clientname" placeholder="Enter Your Email" />
                        </div>
                        <label class="number" for="phone">Enter your number</label>
                        <input id="phone" type="tel" name="phone" />
                        <div class="mt-4">
                            <label for="exampleInputEmail1" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Your Email" />
                        </div>
                        <div class="mt-4">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea name="message" id="message" class="form-control border-success w-100" rows="4"
                                placeholder="Type your message here..."></textarea>
                        </div>
                        <div class="buttons mt-5 d-flex gap-3 flex-wrap">
                            <a href="#" class="btn subscribe-btn px-4 py-2 w-100">Send</a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-lg-4 mt-5 general-info">
                    <h2 class="title-form">Feel Free To contact Me Any time</h2>
                    <div class="card-contact mt-5 d-flex flex-wrap align-items-center p-4">
                        <div class="icon d-flex align-items-center me-4 mb-2">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info">
                            <h5>Email</h5>
                            <h6>Nahlafaisl@gmail.com</h6>
                        </div>
                    </div>
                    <div class="card-contact mt-5 d-flex flex-wrap align-items-center p-4">
                        <div class="icon d-flex align-items-center me-4 mb-2">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info">
                            <h5>Phone</h5>
                            <h6>+96655555555556</h6>
                        </div>
                    </div>
                    <div class="card-contact mt-5 d-flex flex-wrap align-items-center p-4">
                        <div class="icon d-flex align-items-center me-4 mb-2">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info">
                            <h5>Location</h5>
                            <h6>Saudi-Arabia</h6>
                        </div>
                    </div>
                    <div class="social mt-5">
                        <h3>Follow us</h3>
                        <div class="icons mt-3">
                            <a class="m-1" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="m-1" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a class="m-1" href="#"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start Footer Section -->
    @include('layouts.footer')
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
</body>

</html>
