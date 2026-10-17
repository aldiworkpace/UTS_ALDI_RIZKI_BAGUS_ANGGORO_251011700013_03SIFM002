@extends('layouts.app')

@section('title', 'ABOUT US')

@section('content')
    <section class="min-vh-100 py-5 px-3">
        <div class="d-flex justify-content-between align-items-end mb-4 border-bottom border-secondary pb-3">
            <div>
                <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1.5px;">Tentang Kita</span>
                <h2 class="fw-black text-uppercase mb-0 mt-1"
                    style="font-family: 'Montserrat', sans-serif; font-weight: 900;">
                    KENAL SAMA KITA<span class="text-danger">.</span>
                </h2>
            </div>
        </div>
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/assets/hero.png') }}" alt="Tentang Aldi Rental"
                        class="img-fluid rounded shadow-sm p-4" style="max-height: 350px; object-fit: contain;">
                </div>

                <div class="col-md-6">
                    <h2 class="fw-bolder text-dark mb-3">
                        Sewa sama ALDI Jadi Partner Buat bikin kenangan
                    </h2>
                    <p class="text-secondary mb-4" style="line-height: 1.7;">
                        <strong>ALDI RENTAL</strong> adalah penyedia layanan sewa kamera dan perlengkapan fotografi
                        terpercaya. Kami menyediakan berbagai jenis kamera mulai dari Mirrorless, DSLR, Action Camera,
                        hingga Kamera Analog dengan kondisi mantap, bersih, dan siap pakai untuk kebutuhan tugas kuliah,
                        traveling, maupun proyek profesional.
                    </p>


                </div>

            </div>
            <div class="position-relative w-100" style="height: 0; z-index: -1;">
                <img src="{{ asset('images/assets/cam.png') }}" class="position-absolute"
                    style="top: -140px; left: 70%; max-width: 500px;">
            </div>
        </div>
    </section>

@endsection
