@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center space-y-8">
                <h2 class="text-3xl font-bold uppercase tracking-wider">Mappa</h2>
                <div class="flex w-full justify-start items-start space-x-4">
                    <!-- Banner pubblicitario a sinistra -->
                    <div class="hidden lg:block lg:w-1/6">
                        <div class="bg-gray-200 p-4 rounded-lg shadow-lg flex items-center justify-center h-[680px]">
                            <span class="text-gray-600">Pubblicità Sinistra</span>
                        </div>
                    </div>
                    <!-- Mappa -->
                    <div class="w-full lg:w-2/3">
                        <iframe
                            src="https://www.google.com/maps/d/embed?mid=1_h7tG8bFOKd0tf7gw7Et8tmfwTdWSXqj&ehbc=2E312F"
                            width="100%"
                            height="680"
                            class="border-0 rounded-lg shadow-lg"
                            allowfullscreen
                            loading="lazy"
                        ></iframe>
                    </div>
                    <!-- Banner pubblicitario a destra -->
                    <div class="hidden lg:block lg:w-1/6">
                        <div class="bg-gray-200 p-4 rounded-lg shadow-lg flex items-center justify-center h-[680px]">
                            <span class="text-gray-600">Pubblicità Destra</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t mt-12 pt-8 space-y-6 bg-[#f1f5f9] text-[#1e293b] p-6 rounded-lg shadow-lg">
            <p class="text-sm text-center">
                La webcam rispetta le legge italiana sulla privacy, le webcam turistiche non consente il riconoscimento dei tratti somatici delle persone, il video non viene registrato
            </p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-[#1e293b] hover:bg-gray-200 transition-colors duration-300 py-2 px-4 rounded">Contattaci</a>
                <x-social-icons />
            </div>
        </div>
    </div>
@endsection
