<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('imgs/logo-female.png') }}" class="img-fluid" style="max-height: 60px"
                id="navbar-logo-female" />
        </a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('female-home') }}">Ladies</a></li>
                <li class="nav-item"><a class="nav-link" href="#join">Join Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="#ladies-stories">Transformations</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('jobs') }}">Career</a></li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('checkout.female') }}">
                    <img src="{{ asset('imgs/Cart (1).png') }}" alt="Cart" style="width: 28px; height: 28px;">
                </a>
                <a href="{{ route('login') }}" class="btn female-subscribe-btn">Login</a>
            </div>
        </div>
    </div>
</nav>
