<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
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
    @include('layouts.header-user')
    <section class="profile-section section-white">
        <h2>Ezz Aldin Mohamed</h2>
        <div class="container mt-5">
            <div class="form-signup mt-4">
                <div class="profile-header d-flex justify-content-between">
                    <h4>User Info</h4>
                    <div class="edit d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editModal"
                        style="cursor: pointer;">
                        <h5 class="mb-0">Edit</h5>
                        <img src="{{ asset('imgs/edit.png') }}" class="me-3"
                            style="width: 20px; height: 20px; margin-top: 0.5rem;">
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 mt-5">
                            <label for="name" class="form-label">Your Name</label>
                            <h5 class="fw-normal">Ezz Aldin Mohamed</h5>
                        </div>
                        <div class="col-12 col-md-6 mb-3 mt-5">
                            <label for="phone" class="form-label">Your Phone</label>
                            <h5 class="fw-normal">011111111111</h5>
                        </div>
                    </div>
                    <div class="mb-3 mt-5">
                        <label for="email" class="form-label">Your Email</label>
                        <h5 class="fw-normal">example@gmail.com</h5>
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <h5 class="fw-normal">Male</h5>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 mt-5">
                            <label for="height" class="form-label">Height</label>
                            <h5 class="fw-normal">178</h5>
                        </div>
                        <div class="col-12 col-md-6 mb-3 mt-5">
                            <label for="weight" class="form-label">Weight</label>
                            <h5 class="fw-normal">85</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Main Section -->
    <div class="your-plan container py-5">
        <div class="plan-header d-flex justify-content-between">
            <h4>Current Plan</h4>
            <a href="#" class="btn subscribe-btn">
                Upgrade
                <img src="{{ asset('imgs/image 794.png') }}" style="cursor: pointer; width: 20px; height: 20px;">
            </a>
        </div>
        <div class="card mt-3 w-50 p-4 d-flex flex-column justify-content-center">
            <div class="active-plan mb-3">Active</div>
            <h4>Package Title <span class="duration ms-2">3 Months</span></h4>
            <div class="date-package d-flex justify-content-between align-items-center mt-4">
                <h6>From : 24/1/2025</h6>
                <h6>To : 25/4/2025</h6>
            </div>
        </div>
    </div>

    {{-- Model --}}
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4">

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="form-signup mt-4">
                        <div class="profile-header d-flex justify-content-between">
                            <h4>User Info</h4>
                        </div>

                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-5">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Enter Your Name" />
                                </div>
                                <div class="col-12 col-md-6 mb-3 mt-5">
                                    <label for="phone" class="form-label">Your Phone</label>
                                    <input type="tel" class="form-control" id="phone"
                                        placeholder="Enter Your Phone Number" />
                                </div>
                            </div>

                            <div class="mb-3 mt-5">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter Your Email" />
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select custom-select-style" id="gender" name="gender">
                                    <option value="" disabled selected>Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 mt-5">
                                    <label for="height" class="form-label">Height</label>
                                    <input type="number" class="form-control" id="height"
                                        placeholder="Enter Your Height" />
                                </div>
                                <div class="col-12 col-md-6 mb-3 mt-5">
                                    <label for="weight" class="form-label">Weight</label>
                                    <input type="number" class="form-control" id="weight"
                                        placeholder="Enter Your Weight" />
                                </div>
                            </div>

                            <div class="buttons mt-5 d-flex gap-3 flex-wrap">
                                <a href="#" class="btn subscribe-btn px-4 py-2 w-100">Done</a>
                            </div>
                        </form>
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
