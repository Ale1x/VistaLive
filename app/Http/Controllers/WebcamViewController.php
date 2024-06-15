<?php

namespace App\Http\Controllers;

use App\Models\Webcam;
use Illuminate\Http\Request;

class WebcamViewController extends Controller
{
    /**
     * Mostra l'elenco delle webcams.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webcams = Webcam::all();
        return view('webcams.index', compact('webcams'));
    }

    public function show($id)
    {
        $webcam = Webcam::findOrFail($id);
        $popularWebcams = Webcam::orderBy('views', 'desc')->take(5)->get(); // Assumendo che ci sia una colonna 'views' nel modello Webcam

        return view('webcams.show', compact('webcam', 'popularWebcams'));
    }

}
