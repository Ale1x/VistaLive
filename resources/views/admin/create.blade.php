@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold uppercase tracking-wider mb-8 text-center">
                Aggiungi Webcam
            </h2>
            <form action="{{ route('admin.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Descrizione</label>
                    <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                </div>
                <div>
                    <label for="stream_url" class="block text-sm font-medium text-gray-700">Stream URL</label>
                    <input type="text" name="stream_url" id="stream_url" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input type="text" name="image_url" id="image_url" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">Aggiungi</button>
                </div>
            </form>
        </div>
    </div>
@endsection
