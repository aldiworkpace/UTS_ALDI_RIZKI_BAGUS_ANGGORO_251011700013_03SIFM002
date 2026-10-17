@extends('layouts.app')

@section('title', 'DETAIL')

@section('content')
    <section class="py-5 min-vh-100">
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

                <a href="{{ route('camera.index') }}" class="btn btn-secondary">Kembali</a>
            </div>

        </div>
    </section>
@endsection
