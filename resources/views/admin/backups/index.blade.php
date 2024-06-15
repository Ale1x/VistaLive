@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold uppercase tracking-wider mb-8 text-center">
                Gestione Backup
            </h2>
            <div class="text-center mb-8">
                <form action="{{ route('admin.backups.create') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300">
                        Crea Backup
                    </button>
                </form>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($backupFiles as $file)
                    <div class="bg-white shadow-md rounded-lg p-6 flex justify-between items-center">
                        <div>
                            <p class="text-gray-600">{{ basename($file) }}</p>
                        </div>
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.backups.download', basename($file)) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">Scarica</a>
                            <form action="{{ route('admin.backups.delete', basename($file)) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-colors duration-300">Elimina</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
