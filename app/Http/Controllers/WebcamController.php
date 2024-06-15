<?php

namespace App\Http\Controllers;

use App\Models\Webcam;
use Illuminate\Http\Request;

class WebcamController extends Controller
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
        $webcam->increment('views'); // Incrementa il conteggio delle visualizzazioni

        $popularWebcams = Webcam::orderBy('views', 'desc')->take(5)->get(); // Assumendo che ci sia una colonna 'views' nel modello Webcam

        return view('webcams.show', compact('webcam', 'popularWebcams'));
    }

    public function inRegione()
    {
        $webcams = Webcam::where('in_regione', true)->get();
        return view('webcams.inRegione', compact('webcams'));
    }

    public function fuoriRegione()
    {
        $webcams = Webcam::where('in_regione', false)->get();
        return view('webcams.fuoriRegione', compact('webcams'));
    }
}
