<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    public function index()
    {
        $backupFiles = Storage::disk('local')->files('Vistalive');

        return view('admin.backups.index', compact('backupFiles'));
    }

    public function create()
    {
        Artisan::call('backup:run');

        return redirect()->back()->with('success', 'Backup creato con successo!');
    }

    public function download($fileName)
    {
        $filePath = storage_path('app/Vistalive/' . $fileName);

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath);
    }

    public function delete($fileName)
    {
        Storage::disk('local')->delete('Vistalive/' . $fileName);

        return redirect()->back()->with('success', 'Backup eliminato con successo!');
    }
}
