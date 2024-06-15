<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\WebcamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebcamViewController;


Route::group(['prefix' => 'api'], function () {
    Route::prefix('webcams')->group(function () {
        Route::get('/', [WebcamController::class, 'index']);
        Route::get('/{id}', [WebcamController::class, 'show']);
        Route::post('/', [WebcamController::class, 'store']);
        Route::put('/{id}', [WebcamController::class, 'update']);
        Route::delete('/{id}', [WebcamController::class, 'destroy']);
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/webcams', [WebcamViewController::class, 'index'])->name('webcams.index');
Route::get('/webcam/{id}', [WebcamViewController::class, 'show'])->name('webcams.show');
Route::get('/map', [MapController::class, 'index'])->name('map.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');




Route::middleware(['auth', 'can:admin-access'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/{webcam}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{webcam}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{webcam}', [AdminController::class, 'destroy'])->name('admin.destroy');
});
