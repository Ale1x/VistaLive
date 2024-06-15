<?php

namespace App\Http\Controllers;

use App\Models\Webcam;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $webcams = Webcam::all();
        return view('admin.index', compact('webcams'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stream_url' => 'required',
            'image_url' => 'required',
        ]);

        Webcam::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Webcam aggiunta con successo.');
    }

    public function edit(Webcam $webcam)
    {
        return view('admin.edit', compact('webcam'));
    }

    public function update(Request $request, Webcam $webcam)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stream_url' => 'required',
            'image_url' => 'required',
        ]);

        $webcam->update($validatedData);

        return redirect()->route('admin.index')->with('success', 'Webcam aggiornata con successo.');
    }

    public function destroy(Webcam $webcam)
    {
        $webcam->delete();

        return redirect()->route('admin.index')->with('success', 'Webcam eliminata con successo.');
    }
}
