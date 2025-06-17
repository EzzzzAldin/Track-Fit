<nav class="user-nav navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('imgs/logo (1).png') }}" class="img-fluid" style="max-height: 60px" />
        </a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('exercise') }}">Exercise</a></li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('diet-plan') }}">Diet Plan</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a></li>
            </ul>

            <img src="{{ asset('imgs/image 792.png') }}" class="img-fluid" style="max-height: 60px" />
        </div>
    </div>
</nav>
