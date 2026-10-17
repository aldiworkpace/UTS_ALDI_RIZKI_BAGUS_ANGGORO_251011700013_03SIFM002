@extends('layouts.app')

@section('title', 'HOME')

@section('content')
    <section class="position-relative overflow-hidden" style="min-height: 85vh;">
        <div class="container-fluid p-0">
            <div class="row g-0" style="min-height: 85vh;">
                <div class="col-md-6 d-flex align-items-center px-4 px-md-5 py-5">
                    <div class="ps-md-5 pe-md-5 text-center text-md-start w-100">
                        <p class="fw-bold text-danger fs-4 mb-0">Welcome To</p>
                        <h1 class="fw-bolder text-danger mb-4"
                            style="font-size: 56px; letter-spacing: 6px; line-height: 1.1;">
                            ALDI<br>RENTAL
                        </h1>
                        <a href="{{ url('/camera') }}" class="btn btn-danger px-4 py-2 shadow-sm fw-bold">
                            Liat Kamera <i class="bi bi-arrow-up-right-circle-fill ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center py-5"
                    style=" background-color:#4a0e0e; border-radius: 0px 0px 80px 0px;">
                    <img src="{{ asset('images/assets/hero.png') }}" alt="hero" class="img-fluid d-block d-md-none"
                        style="width: 240px;">
                </div>

            </div>
        </div>

        <div class="position-absolute top-50 start-50 translate-middle z-2 d-none d-md-block text-center"
            style="pointer-events: none;">
            <img src="{{ asset('images/assets/hero.png') }}" alt="hero" class="img-fluid"
                style="width: 480px; filter: drop-shadow(0 15px 25px rgba(0,0,0,0.35));">
        </div>
    </section>

@endsection
