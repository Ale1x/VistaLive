<?php

use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SeoSettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebcamController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/webcams', [WebcamController::class, 'index'])->name('webcams.index');
Route::get('/webcams/inRegione', [WebcamController::class, 'inRegione'])->name('webcams.in_regione');
Route::get('/webcams/fuoriRegione', [WebcamController::class, 'fuoriRegione'])->name('webcams.fuori_regione');
Route::get('/webcam/{id}', [WebcamController::class, 'show'])->name('webcams.show');
Route::get('/map', [MapController::class, 'index'])->name('map.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth', 'can:admin-access'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::prefix('admin/webcams')->group(function () {
        Route::get('/create', [AdminController::class, 'create'])->name('admin.webcams.create');
        Route::post('/', [AdminController::class, 'store'])->name('admin.webcams.store');
        Route::get('/{webcam}/edit', [AdminController::class, 'edit'])->name('admin.webcams.edit');
        Route::put('/{webcam}', [AdminController::class, 'update'])->name('admin.webcams.update');
        Route::delete('/{webcam}', [AdminController::class, 'destroy'])->name('admin.webcams.destroy');
    });
});

Route::middleware(['can:admin-access'])->group(function () {
    Route::get('/admin/statistics', [AdminController::class, 'statistics'])->name('admin.statistics');
    Route::get('/admin/seo-settings', [SeoSettingsController::class, 'edit'])->name('admin.seo-settings.edit');
    Route::put('/admin/seo-settings/{seoSetting}', [SeoSettingsController::class, 'update'])->name('admin.seo-settings.update');
    Route::get('/admin/logs', [\Arcanedev\LogViewer\Http\Controllers\LogViewerController::class, 'index'])->name('admin.logs.index');
    Route::get('/admin/backups', [BackupController::class, 'index'])->name('admin.backups.index');
    Route::post('/admin/backups/create', [BackupController::class, 'create'])->name('admin.backups.create');
    Route::get('/admin/backups/download/{fileName}', [BackupController::class, 'download'])->name('admin.backups.download');
    Route::delete('/admin/backups/delete/{fileName}', [BackupController::class, 'delete'])->name('admin.backups.delete');
});
