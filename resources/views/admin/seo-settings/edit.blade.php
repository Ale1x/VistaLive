// resources/views/admin/seo-settings/edit.blade.php

@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen bg-gray-100">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold uppercase tracking-wider mb-8 text-center">Impostazioni SEO</h2>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('admin.seo-settings.update', $seoSetting->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                        <label for="site_title" class="block text-sm font-medium text-gray-700">Titolo del Sito</label>
                        <input type="text" name="site_title" id="site_title" value="{{ $seoSetting->site_title }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $seoSetting->meta_description }}</textarea>
                    </div>
                    <div>
                        <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords</label>
                        <input type="text" name="meta_keywords" id="meta_keywords" value="{{ $seoSetting->meta_keywords }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700">Autore</label>
                        <input type="text" name="author" id="author" value="{{ $seoSetting->author }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="favicon_url" class="block text-sm font-medium text-gray-700">Favicon URL</label>
                        <input type="text" name="favicon_url" id="favicon_url" value="{{ $seoSetting->favicon_url }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="og_title" class="block text-sm font-medium text-gray-700">Open Graph Title</label>
                        <input type="text" name="og_title" id="og_title" value="{{ $seoSetting->og_title }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="og_description" class="block text-sm font-medium text-gray-700">Open Graph Description</label>
                        <textarea name="og_description" id="og_description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $seoSetting->og_description }}</textarea>
                    </div>
                    <div>
                        <label for="og_image" class="block text-sm font-medium text-gray-700">Open Graph Image</label>
                        <input type="text" name="og_image" id="og_image" value="{{ $seoSetting->og_image }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="og_type" class="block text-sm font-medium text-gray-700">Open Graph Type</label>
                        <input type="text" name="og_type" id="og_type" value="{{ $seoSetting->og_type }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="og_url" class="block text-sm font-medium text-gray-700">Open Graph URL</label>
                        <input type="text" name="og_url" id="og_url" value="{{ $seoSetting->og_url }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="twitter_title" class="block text-sm font-medium text-gray-700">Twitter Title</label>
                        <input type="text" name="twitter_title" id="twitter_title" value="{{ $seoSetting->twitter_title }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="twitter_description" class="block text-sm font-medium text-gray-700">Twitter Description</label>
                        <textarea name="twitter_description" id="twitter_description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $seoSetting->twitter_description }}</textarea>
                    </div>
                    <div>
                        <label for="twitter_image" class="block text-sm font-medium text-gray-700">Twitter Image</label>
                        <input type="text" name="twitter_image" id="twitter_image" value="{{ $seoSetting->twitter_image }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="twitter_site" class="block text-sm font-medium text-gray-700">Twitter Site</label>
                        <input type="text" name="twitter_site" id="twitter_site" value="{{ $seoSetting->twitter_site }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="twitter_creator" class="block text-sm font-medium text-gray-700">Twitter Creator</label>
                        <input type="text" name="twitter_creator" id="twitter_creator" value="{{ $seoSetting->twitter_creator }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="google_analytics_id" class="block text-sm font-medium text-gray-700">Google Analytics ID</label>
                        <input type="text" name="google_analytics_id" id="google_analytics_id" value="{{ $seoSetting->google_analytics_id }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-300">Salva Impostazioni</button>
                </div>
            </form>
        </div>
    </div>
@endsection
