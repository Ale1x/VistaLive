@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen items-center bg-gray-100">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8 space-y-8">
            <div class="w-full flex justify-center">
                <iframe
                    src="{{ $webcam->stream_url }}"
                    class="w-full h-[680px] rounded-lg shadow-lg"
                    allow="autoplay"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="w-full flex flex-col lg:flex-row mt-8">
                <!-- Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg w-full lg:w-2/3 text-center lg:text-left">
                    <h1 class="text-3xl font-bold">{{ $webcam->name }}</h1>
                    <p class="mt-4 text-gray-600">{{ $webcam->description }}</p>
                    <p class="mt-2 text-gray-600"><i class="fas fa-eye"></i> Visualizzazioni: {{ $webcam->views }}</p>

                    <div class="flex justify-center lg:justify-start space-x-4 mt-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300 flex items-center">
                            <i class="fab fa-facebook-f mr-2"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank" class="bg-pink-700 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition-colors duration-300 flex items-center">
                            <i class="fab fa-instagram mr-2"></i> Instagram
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode(Request::fullUrl()) }}" target="_blank" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300 flex items-center">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                        </a>
                        <a href="mailto:?subject=Check out this webcam&body={{ urlencode(Request::fullUrl()) }}" target="_blank" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors duration-300 flex items-center">
                            <i class="fas fa-envelope mr-2"></i> Email
                        </a>
                    </div>
                </div>
                <!-- Blocco pubblicitario -->
                <div class="flex flex-col space-y-4 mt-4 lg:mt-0 lg:ml-4 lg:w-1/3">
                    <div class="bg-gray-200 p-6 rounded-lg shadow-lg flex items-center justify-center h-full">
                        <span class="text-gray-600">Pubblicità 1</span>
                    </div>
                    <div class="bg-gray-200 p-6 rounded-lg shadow-lg flex items-center justify-center h-full">
                        <span class="text-gray-600">Pubblicità 2</span>
                    </div>
                </div>
            </div>

            <div class="w-full text-center mt-8">
                <h2 class="text-3xl font-bold uppercase tracking-wider">Webcam Più Viste</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    @foreach ($popularWebcams as $popularWebcam)
                        @if ($popularWebcam->id !== $webcam->id)
                            <div class="bg-white shadow-md rounded-lg p-4">
                                <h2 class="text-xl font-bold mb-2">{{ $popularWebcam->name }}</h2>
                                <a href="{{ route('webcams.show', $popularWebcam->id) }}">
                                    <img src="{{ $popularWebcam->image_url }}" alt="{{ $popularWebcam->name }}" class="mb-2 w-full h-32 object-cover rounded">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
