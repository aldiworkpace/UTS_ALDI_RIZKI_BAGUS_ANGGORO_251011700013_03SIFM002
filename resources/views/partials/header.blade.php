<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-4 w-100 navbar-border-wrapper">

            <a class="navbar-brand text-danger fw-bold" href="#">ALDI RENTAL</a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbar">
                <ul class="navbar-nav mb-2 mb-lg-0 gap-lg-2 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/camera') }}">CAMERA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">ABOUT US</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center ">
                    <li class="nav-item">
                        <a class="navbar-brand text-danger" href="#">RENTAL SAMA KAMI</a>
                    </li>
                    <li class="nav-item">
                        <img src="{{ asset('images/assets/camera.gif') }}" alt="CAMERA" style="width: 60px;">
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>
