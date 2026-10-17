<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camera;

class CameraController extends Controller
{
    //
    public function index()
    {
        $cameras = Camera::paginate(4);
        return view('page.camera', compact('cameras'));
    }
    public function show($id)
    {
        $cameras = Camera::findOrFail($id);

        return view('page.detail_sewa', compact('cameras'));
    }
}
