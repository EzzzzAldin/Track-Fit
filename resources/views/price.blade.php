<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Price</title>
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
    <!-- Start Main Section -->
    <section class="price-main-section d-flex flex-column section-white">

        <div class="container">
            <div class="row mt-5 py-5">
                <div class="col-12 col-lg-8">
                    <h2 class="title-form">Personal Information</h2>
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
                    </form>
                    <div class="duration mt-5">
                        <h2 class="title-form">Choose Duration</h2>
                        <div class="row mt-5">
                            <div class="col-12 col-md-6">
                                <div class="duration-details p-2 d-flex justify-content-between align-items-center">
                                    <div class="content">
                                        <h4>3 Months</h4>
                                        <h4 class="mt-3">
                                            <span class="sale-price">1599</span> instead of 2200
                                        </h4>
                                    </div>
                                    <button type="button" class="btn rounded-pill save">
                                        Save 20%
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="duration-details p-2 d-flex justify-content-between align-items-center">
                                    <div class="content">
                                        <h4>3 Months</h4>
                                        <h4 class="mt-3">
                                            <span class="sale-price">1599</span> instead of 2200
                                        </h4>
                                    </div>
                                    <button type="button" class="btn rounded-pill save">
                                        Save 20%
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div
                                    class="duration-details p-2 d-flex justify-content-between align-items-center mt-3">
                                    <div class="content">
                                        <h4>3 Months</h4>
                                        <h4 class="mt-3">
                                            <span class="sale-price">1599</span> instead of 2200
                                        </h4>
                                    </div>
                                    <button type="button" class="btn rounded-pill save">
                                        Save 20%
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment mt-5 mb-5">
                        <h3 class="title-form">Choose Payment Method</h3>
                        <div class="row">
                            <div class="col-12 col-md-5 m-1 p-3 box-payment">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="radio" name="radioDefault"
                                            id="radioDefault1" />
                                        <label class="form-check-label" for="radioDefault1">
                                            Instapay
                                        </label>
                                    </div>
                                    <img src="{{ asset('imgs/image 14.png') }}" alt=""
                                        style="height: 40px; max-width: 100%; object-fit: contain" />
                                </div>
                            </div>
                            <div class="col-12 col-md-5 m-1 p-3 box-payment">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="radio" name="radioDefault"
                                            id="radioDefault1" />
                                        <label class="form-check-label" for="radioDefault1">
                                            Visa
                                        </label>
                                    </div>
                                    <img src="{{ asset('imgs/image 17.png') }}" alt=""
                                        style="height: 40px; max-width: 100%; object-fit: contain" />
                                </div>
                            </div>
                            <div class="col-12 col-md-5 m-1 p-3 box-payment mt-4">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="radio" name="radioDefault"
                                            id="radioDefault1" />
                                        <label class="form-check-label" for="radioDefault1">
                                            Vodafone Cash
                                        </label>
                                    </div>
                                    <img src="{{ asset('imgs/image 15.png') }}" alt=""
                                        style="height: 40px; max-width: 100%; object-fit: contain" />
                                </div>
                            </div>
                            <div class="col-12 col-md-5 m-1 p-3 box-payment mt-4">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div class="form-check m-0">
                                        <input class="form-check-input" type="radio" name="radioDefault"
                                            id="radioDefault1" />
                                        <label class="form-check-label" for="radioDefault1">
                                            Transfer bank
                                        </label>
                                    </div>
                                    <img src="{{ asset('imgs/image 19.png') }}" alt=""
                                        style="height: 40px; max-width: 100%; object-fit: contain" />
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn subscribe-btn mt-5">2200 LE</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 vip">
                    <h2 class="title-form">
                        The Upgraded Version – VIP Comprehensive Package
                    </h2>
                    <div class="mt-3" style="max-width: 400px; min-width: 100%">
                        <div class="card border-0">
                            <img src="{{ asset('imgs/image 10 (1).png') }}" class="card-img-top"
                                style="height: 300px; object-fit: cover; border-radius: 5px" />
                            <div class="card-body p-4">
                                <h5 class="card-title mb-2">3 Months</h5>
                                <ul class="p-4">
                                    <li class="m-2">Unlimited club access</li>
                                    <li class="m-2">Group attendance</li>
                                    <li class="m-2">Gym visits</li>
                                    <li class="m-2">Visits to the bath complex</li>
                                    <li class="m-2">Gym, fight club</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="promo">
                        <h4>Promo Code</h4>
                        <div class="promo-submit d-flex justify-content-between">
                            <input type="text" placeholder="Enter Promo Code" />
                            <a href="#" class="btn subscribe-btn">Apply</a>
                        </div>
                    </div>
                    <div class="order-summary mt-3 p-3">
                        <h4>Order Summery</h4>
                        <div class="subtotal d-flex justify-content-between m-3">
                            <span class="text">Subtotal : </span>
                            <span class="value">2000</span>
                        </div>
                        <div class="saving d-flex justify-content-between m-3">
                            <span class="text">Savings : </span>
                            <span class="value">0</span>
                        </div>
                    </div>
                    <div class="total d-flex justify-content-between mt-3 p-3">
                        <span class="total-title">Total</span>
                        <span class="total-value">2200</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Section -->
    <!--Start Footer Section -->
    @include('layouts.footer')
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll('.duration-details');

            cards.forEach(card => {
                card.addEventListener('click', function() {
                    cards.forEach(c => c.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const radios = document.querySelectorAll('input[name="radioDefault"]');

            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    document.querySelectorAll('.box-payment').forEach(box => box.classList.remove(
                        'selected'));

                    const selectedBox = this.closest('.box-payment');
                    if (selectedBox) {
                        selectedBox.classList.add('selected');
                    }
                });
            });
        });
    </script>
</body>

</html>
