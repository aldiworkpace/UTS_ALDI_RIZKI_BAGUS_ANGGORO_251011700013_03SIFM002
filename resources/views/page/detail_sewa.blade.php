@extends('layouts.app')

@section('title', 'DETAIL')

@section('content')
    <section class="py-5 min-vh-100">
        <div class="d-flex justify-content-between align-items-end mb-4 border-bottom border-secondary pb-3">
            <div>
                <span class="text-danger fw-bold text-uppercase small" style="letter-spacing: 1.5px;">KAMERA KITA</span>
                <h2 class="fw-black text-uppercase mb-0 mt-1"
                    style="font-family: 'Montserrat', sans-serif; font-weight: 900;">
                    DETAIL KAMERA<span class="text-danger">.</span>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header fw-bold">
                Detail Kamera
            </div>
            <img src="{{ asset('images/' . $cameras->image) }}" class="w-50 card-img-top" alt="{{ $cameras->model }}">

            <div class="card-body">
                <p class="mb-2"><strong>Brand :</strong> {{ $cameras->brand }}</p>
                <p class="mb-2"><strong>Model :</strong> {{ $cameras->model }}</p>
                <p class="mb-2"><strong>Type :</strong> {{ $cameras->type }}</p>
                <p class="mb-2"><strong>Rent Price :</strong> Rp {{ number_format($cameras->rent_price, 0, ',', '.') }} /
                    hari</p>
                <p class="mb-2"><strong>Description :</strong> {{ $cameras->description }}</p>

                <div class="mt-3">
                    <a href="{{ route('camera.index') }}" class="btn btn-secondary">Kembali</a>

                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success">
                        <i class="bi bi-whatsapp me-1"></i> Sewa via WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection
