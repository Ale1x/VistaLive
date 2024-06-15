<?php

namespace App\Http\Controllers;

use App\Models\Webcam;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Prendi le prime 2 webcam
        // Prendi le webcam più viste (puoi modificare la logica secondo le tue esigenze)
        $popularWebcams = Webcam::orderBy('views', 'desc')->take(5)->get();

        return view('home', compact('popularWebcams'));
    }
}
