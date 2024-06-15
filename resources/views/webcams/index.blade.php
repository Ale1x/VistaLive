@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center space-y-8">
                <h2 class="text-3xl font-bold uppercase tracking-wider mb-8">Tutte le WEBCAM</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($webcams as $index => $webcam)
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <h2 class="text-2xl font-bold mb-4">{{ $webcam->name }}</h2>
                            <a href="{{ route('webcams.show', $webcam->id) }}">
                                <img src="{{ $webcam->image_url }}" alt="{{ $webcam->name }}" class="mb-4 w-full h-48 object-cover rounded">
                            </a>
                        </div>

                        @if (($index + 1) % 4 == 0)
                            <!-- Popup pubblicitario -->
                            <div class="bg-gray-200 shadow-md rounded-lg p-6 flex items-center justify-center">
                                <span class="text-xl font-bold">Pubblicità</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
