<?php

use App\Http\Controllers\CameraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});


Route::get('/camera', [CameraController::class, 'index'])->name('camera.index');

Route::get('/camera/{id}', [CameraController::class, 'show'])->name('camera.show');
