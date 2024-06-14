<?php

use App\Http\Controllers\WebcamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
    Route::prefix('webcams')->group(function () {
        Route::get('/', [WebcamController::class, 'index']);
        Route::get('/{id}', [WebcamController::class, 'show']);
        Route::post('/', [WebcamController::class, 'store']);
        Route::put('/{id}', [WebcamController::class, 'update']);
        Route::delete('/{id}', [WebcamController::class, 'destroy']);
    });
});
