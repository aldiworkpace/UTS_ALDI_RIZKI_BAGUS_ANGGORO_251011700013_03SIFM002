<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camera;

class CameraController extends Controller
{
    //
    public function index()
    {
        $cameras = Camera::paginate(3);
        return view('page.camera', compact('cameras'));
    }
}
