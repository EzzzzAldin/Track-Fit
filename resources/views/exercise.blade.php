<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercise</title>
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
    <section class="diet-plan-section section-white">
        <div class="container">
            <div class="exercise-header position-relative py-3">
                <h1 class="text-center m-0 position-absolute top-50 start-50 translate-middle">Exercise</h1>
                <div class="dropdown ms-auto position-absolute top-50 end-0 translate-middle-y">
                    <img src="{{ asset('imgs/filter-search.png') }}" id="filterToggle" data-bs-toggle="dropdown"
                        aria-expanded="false" style="cursor: pointer; width: 40px; height: 40px;">
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="filterToggle">
                        <li><a class="dropdown-item" href="#">Exercise at Home</a></li>
                        <li><a class="dropdown-item" href="#">Exercise at Gym</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="filter-wrapper">
            <div class="filter-exercise">
                <button class="filter-btn active">All</button>
                <button class="filter-btn">Leg</button>
                <button class="filter-btn">Core/Abs</button>
                <button class="filter-btn">Chest</button>
                <button class="filter-btn">Back</button>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row g-3">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <img src="{{ asset('imgs/create-workout-exercise-gif-animation-in-photoshop.gif') }}"
                            alt="exercise" class="img-fluid rounded">
                        <h4 class="mt-2 ex-title">Name Name</h4>
                    </div>
                @endfor
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
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                btn.addEventListener('click', function() {
                    buttons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>
