@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen items-center bg-gray-100">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8 space-y-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold uppercase tracking-wider mb-4">
                    Pannello di Amministrazione
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Qui puoi gestire tutte le webcam presenti sul sito. Aggiungi nuove webcam, modifica quelle esistenti o rimuovile se non sono più attive.
                </p>
                <a href="{{ route('admin.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300 mb-8 inline-block">
                    Aggiungi Webcam
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($webcams as $webcam)
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-red-500">LIVE</span>
                        </div>
                        <h2 class="text-2xl font-bold mb-4">{{ $webcam->name }}</h2>
                        <img src="{{ $webcam->image_url }}" alt="{{ $webcam->name }}" class="mb-4 w-full h-48 object-cover rounded">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.edit', $webcam->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                            <form action="{{ route('admin.destroy', $webcam->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
