@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center space-y-8">
                <div class="w-full flex justify-center mb-8">
                    <!-- Banner pubblicitario -->
                    <img
                        src="https://via.placeholder.com/1024x100?text=Banner+Pubblicitario"
                        alt="Banner pubblicitario"
                        class="w-full h-auto rounded-lg shadow-lg"
                    />
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-bold uppercase tracking-wider mb-4">Benvenuti su VISTA Live</h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Scopri le nostre webcam live dalle destinazioni più belle e affascinanti. Guarda i panorami in tempo reale e vivi l'esperienza come se fossi lì!
                    </p>
                </div>
                <div class="relative w-full">
                    <div id="carousel" class="flex overflow-hidden space-x-4">
                        @foreach ($popularWebcams->take(3) as $webcam)
                            <a href="{{ route('webcams.show', $webcam->id) }}" class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                                <img
                                    alt="{{ $webcam->name }}"
                                    src="{{ $webcam->image_url }}"
                                    class="rounded-lg shadow-lg transition-transform duration-300 hover:scale-105"
                                    style="aspect-ratio: 400/250; object-fit: cover;"
                                    width="400"
                                    height="250"
                                />
                            </a>
                        @endforeach
                    </div>
                    <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 rounded-full">←</button>
                    <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 rounded-full">→</button>
                </div>
                <div class="flex flex-col items-center space-y-4">
                    <h2 class="text-3xl font-bold uppercase tracking-wider">Webcam Più Viste</h2>
                    <div class="flex items-center space-x-2">
                        <span class="bg-[#e53e3e] text-white py-1 px-2 rounded">Live</span>
                        <p class="text-gray-500">Recensioni:</p>
                        <x-star-rating />
                    </div>
                </div>
            </div>
            <div class="border-t mt-12 pt-8 space-y-6 bg-[#f1f5f9] text-[#1e293b] p-6 rounded-lg shadow-lg">
                <p class="text-sm text-center">La webcam rispetta le legge italiana sulla privacy, le webcam turistiche non consente il riconoscimento dei tratti somatici delle persone, il video non viene registrato</p>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-[#1e293b] hover:bg-gray-200 transition-colors duration-300 py-2 px-4 rounded">Contattaci</a>
                    <x-social-icons />
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.getElementById('carousel');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');

            const scrollStep = 400; // Adjust scroll step size as needed

            prevButton.addEventListener('click', function () {
                carousel.scrollBy({
                    left: -scrollStep,
                    behavior: 'smooth'
                });
            });

            nextButton.addEventListener('click', function () {
                carousel.scrollBy({
                    left: scrollStep,
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endsection
