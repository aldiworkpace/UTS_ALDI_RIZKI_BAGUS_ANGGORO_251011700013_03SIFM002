@extends('layouts.app')

@section('title', 'CAMERA')

@section('content')
    <section class="py-5 min-vh-100">
        <div class="d-flex justify-content-between align-items-end mb-4 border-bottom border-secondary pb-3">
            <div>
                <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1.5px;">Our
                    Collection</span>
                <h2 class="fw-black text-uppercase mb-0 mt-1"
                    style="font-family: 'Montserrat', sans-serif; font-weight: 900;">
                    Camera Catalog<span class="text-danger">.</span>
                </h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @foreach ($cameras as $camera)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm" style="background-color: #3D5D91;">
                        <div class="position-relative text-center p-4">
                            <span class="badge bg-dark position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase">
                                {{ $camera->type }}
                            </span>

                            <img src="{{ asset('images/' . $camera->image) }}" class="card-img-top img-fluid camera-img"
                                alt="{{ $camera->brand }} {{ $camera->model }}">
                        </div>

                        <div class="card-body d-flex flex-column p-4">
                            <span class="text-danger fw-bold text-uppercase small mb-1" style="letter-spacing: 1px;">
                                {{ $camera->brand }}
                            </span>

                            <h5 class="card-title fw-bold text-white mb-2" style="font-family: 'Montserrat', sans-serif;">
                                {{ $camera->model }}
                            </h5>

                            <p class="card-text text-white small mb-4 desc-clamp">
                                {{ $camera->description }}
                            </p>

                            <div class="mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                <div>
                                    <small class="text-white d-block" style="font-size: 0.75rem;">Harga Sewa</small>
                                    <span class="fw-bold text-white fs-5">
                                        Rp {{ number_format($camera->rent_price, 0, ',', '.') }}
                                    </span>
                                    <small class="text-white" style="font-size: 0.75rem;">/hari</small>
                                </div>

                                <a href="#" class="btn btn-danger rounded-0 px-3 py-2 fw-semibold">
                                    Detail
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $cameras->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
