<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
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
    @include('layouts.header')
    <section class="product-section section-white">


        <div class="container mt-5">
            <div class="row">
                <!-- Product Image -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('imgs/image 796.png') }}" class="product-img" alt="Product" />
                </div>

                <!-- Spacer -->
                <div class="col-12 col-md-1"></div>

                <!-- Product Details -->
                <div class="col-12 col-md-7">
                    <div class="product-name mb-2">Product Name</div>
                    <div class="d-flex align-items-center mb-3">
                        <span class="product-price">12 $</span>
                        <span class="old-price">20 $</span>
                    </div>

                    <hr />

                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    <hr />

                    <h6 class="mb-2 mt-4">Select a quantity :</h6>
                    <div class="quantity-options d-flex gap-3 mb-4">
                        <button class="btn quantity-btn">100 <br> GM</button>
                        <button class="btn quantity-btn">150 <br> GM</button>
                        <button class="btn quantity-btn">200 <br> GM</button>
                    </div>

                    <div class="quantity-control mb-4">
                        <button class="btn btn-outline-secondary">-</button>
                        <input type="text" class="form-control" value="1" />
                        <button class="btn btn-outline-secondary">+</button>
                    </div>

                    <button class="btn btn-add d-flex align-items-center justify-content-center gap-2">
                        <span>Add To Cart</span>
                        <img src="{{ asset('imgs/Cart.png') }}" alt="Cart" class="btn-icon">
                    </button>
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
    <script>
        const buttons = document.querySelectorAll('.quantity-btn');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    </script>
</body>

</html>
