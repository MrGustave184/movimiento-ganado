<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PropertyController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/mision', function () {
    return view('mission');
})->name('mision');

Route::get('/movimiento-periodo', function () {
    return view('years');
})->name('years');

Route::get('/movimiento', [EventController::class, 'show'])->name('year');

Route::get('/registro', [EventController::class, 'register'])->name('register');
Route::post('/registro', [EventController::class, 'create'])->name('createEvent');


Route::prefix('terreno')->group(function () {
    Route::get('/registrar', [PropertyController::class, 'register'])->name('property.register');
    Route::get('/buscar', [PropertyController::class, 'search'])->name('property.search');
    Route::get('/cedula', [PropertyController::class, 'show'])->name('property.show');
    Route::post('/create', [PropertyController::class, 'create'])->name('property.create');
    Route::post('/searchByCI', [PropertyController::class, 'searchByCI'])->name('property.searchByCI');
});

Route::prefix('gravamenes')->group(function () {
    Route::post('/mostrar', [PropertyController::class, 'showGravamenes'])->name('gravamenes.show');
    Route::get('/buscar', [PropertyController::class, 'searchGravamenes'])->name('gravamenes.search');
});

Route::get('/ejidos', [PropertyController::class, 'ejidos'])->name('ejidos');
Route::get('/descarga', [PropertyController::class, 'download'])->name('download');
