<!-- resources/views/admin/logs.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen items-center bg-gray-100">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8 space-y-8">
            <h1 class="text-4xl font-bold uppercase tracking-wider mb-8">Log</h1>
            <!-- Contenuto dei log -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full">
                <p>Qui verranno visualizzati i log del sistema.</p>
            </div>
        </div>
    </div>
@endsection
