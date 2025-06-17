<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Plan</title>
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
    <section class="free-plan-section d-flex flex-column section-white">
        <div class="container">
            <h1 class="mt-5 text-center">Get free Plan</h1>
            <p class="mt-5">
                Tell us a bit about yourself, and we'll create a diet plan tailored to
                your needs and goals.
            </p>
            <form class="mt-3">
                <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                        <label for="clientname" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="clientname" placeholder="Enter Your Email" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                        <label class="number" for="phone">Enter your number</label>
                        <input id="phone" type="tel" name="phone" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="age" class="form-label">Your Age</label>
                        <input type="number" class="form-control" id="age" placeholder="Enter Your Age" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select custom-select-style" id="gender" name="gender">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="weight" class="form-label">Your weight</label>
                        <input type="number" class="form-control" id="weight" placeholder="Enter Your weight" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                        <label for="height" class="form-label">Your height</label>
                        <input type="number" class="form-control" id="height" placeholder="Enter Your height" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="fat" class="form-label">Body fat</label>
                        <input type="number" class="form-control" id="fat"
                            placeholder="add your body fat percentage" />
                    </div>
                </div>
            </form>
            <div class="activity mt-5">
                <h3>Activity Level</h3>
                <div class="row mt-5">
                    <div class="col-6 col-md-4 col-lg-3">
                        <label class="card custom-radio-card p-3 shadow-sm mb-4">
                            <div class="custom-radio-wrapper">
                                <input class="form-check-input me-3" type="radio" name="radioDefault"
                                    id="radioDefault1" />
                                <span class="form-check-label mb-0"> Light Activity </span>
                            </div>
                            <p class="mt-4">
                                Involves light activity such as slow walking or standing for a
                                short period.
                            </p>
                        </label>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <label class="card custom-radio-card p-3 shadow-sm mb-4">
                            <div class="custom-radio-wrapper">
                                <input class="form-check-input me-3" type="radio" name="radioSecond"
                                    id="radioSecond" />
                                <span class="form-check-label mb-0"> Light Activity </span>
                            </div>
                            <p class="mt-4">
                                Involves light activity such as slow walking or standing for a
                                short period.
                            </p>
                        </label>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <label class="card custom-radio-card p-3 shadow-sm mb-4">
                            <div class="custom-radio-wrapper">
                                <input class="form-check-input me-3" type="radio" name="radioThird"
                                    id="radioThird" />
                                <span class="form-check-label mb-0"> Light Activity </span>
                            </div>
                            <p class="mt-4">
                                Involves light activity such as slow walking or standing for a
                                short period.
                            </p>
                        </label>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <label class="card custom-radio-card p-3 shadow-sm mb-4">
                            <div class="custom-radio-wrapper">
                                <input class="form-check-input me-3" type="radio" name="radioForth"
                                    id="radioForth" />
                                <span class="form-check-label mb-0"> Light Activity </span>
                            </div>
                            <p class="mt-4">
                                Involves light activity such as slow walking or standing for a
                                short period.
                            </p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="goal mt-5">
                <h3>Goal</h3>
                <div class="row mt-5">
                    <div class="col-6 col-md-4">
                        <label class="card custom-radio-card p-3 shadow-sm mb-4">
                            <div class="custom-radio-wrapper">
                                <input class="form-check-input me-3" type="radio" name="radioDefault"
                                    id="radioDefault5" />
                                <span class="form-check-label mb-0"> Weight Loss </span>
                            </div>
                            <p class="mt-4">
                                The goal of weight loss is to reduce excess body fat to
                                improve health and body shape.
                            </p>
                        </label>
                    </div>
                    <div class="col-6 col-md-4">
                        <label class="card custom-radio-card p-3 shadow-sm mb-4">
                            <div class="custom-radio-wrapper">
                                <input class="form-check-input me-3" type="radio" name="radioDefault"
                                    id="radioDefault6" />
                                <span class="form-check-label mb-0">Weight gain and muscle increase
                                </span>
                            </div>
                            <p class="mt-4">
                                The goal of weight gain is to increase mucle mass in thr body.
                            </p>
                        </label>
                    </div>
                    <div class="col-6 col-md-4">
                        <label class="card custom-radio-card p-3 shadow-sm mb-4">
                            <div class="custom-radio-wrapper">
                                <input class="form-check-input me-3" type="radio" name="radioDefault"
                                    id="radioDefault7" />
                                <span class="form-check-label mb-0"> Lifestyle </span>
                            </div>
                            <p class="mt-4">
                                The goal of a healthy life style is to maintain weight and
                                follow a healthy life style.
                            </p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="buttons mt-4 d-flex gap-3 flex-wrap">
                <button type="button" class="btn subscribe-btn px-4 py-2" data-bs-toggle="modal"
                    data-bs-target="#dietResultModal">
                    Generate Diet
                </button>
            </div>
        </div>
    </section>
    <!-- Form Result -->
    <div class="modal fade" id="dietResultModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-5">
                <div class="free-plan-form d-flex justify-content-between align-items-center mt-3 mb-3">
                    <h4 class="m-0">Free Plan</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="result-free-plan">
                    <div class="container">
                        <div class="result-info d-flex flex-column align-items-center">
                            <img src="{{ asset('imgs/12704354_5050516 1.png') }}" class="img-fluid mb-5" />
                            <h5>Your Diet Plan Is Ready!</h5>
                            <p class="mt-4">
                                Your personalized diet plan is now ready! We've emailed it to you
                                for easy access
                            </p>
                            <h6>Your Result is</h6>
                            <h6 class="mt-3"><span class="result">1392.96</span> Kcal</h6>

                            <div class="row g-3 mt-4 w-100">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card p-3 shadow-sm">
                                        <div class="results-box">
                                            <div class="carb-square me-4"></div>
                                            <div class="result-text">
                                                <strong>Carbs</strong><br />
                                                <small>285.32 gram</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card p-3 shadow-sm">
                                        <div class="results-box">
                                            <div class="protien-square me-4"></div>
                                            <div class="result-text">
                                                <strong>Protein</strong><br />
                                                <small>285.32 gram</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card p-3 shadow-sm">
                                        <div class="results-box">
                                            <div class="fats-square me-4"></div>
                                            <div class="result-text">
                                                <strong>Fats</strong><br />
                                                <small>285.32 gram</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons mt-4 d-flex gap-3 flex-wrap">
                                <a href="#" class="btn subscribe-btn px-4 py-2">Upgrade to premium</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
</body>

</html>
