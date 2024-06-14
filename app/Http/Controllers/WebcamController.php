<?php

namespace App\Http\Controllers;

use App\Models\Webcam;
use Illuminate\Http\Request;

class WebcamController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Webcam::all());
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $webcam = Webcam::find($id);
        if (!$webcam) {
            return response()->json(['error' => 'Webcam not found'], 404);
        }
        return response()->json($webcam);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stream_url' => 'required',
            'image_url' => 'required',
        ]);

        $webcam = Webcam::create($validatedData);

        return response()->json($webcam, 201);
    }

    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $webcam = Webcam::find($id);
        if (!$webcam) {
            return response()->json(['error' => 'Webcam not found'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stream_url' => 'required',
            'image_url' => 'required',
        ]);

        $webcam->update($validatedData);

        return response()->json($webcam, 200);
    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $webcam = Webcam::find($id);
        if (!$webcam) {
            return response()->json(['error' => 'Webcam not found'], 404);
        }

        $webcam->delete();

        return response()->json(null, 204);
    }

}
