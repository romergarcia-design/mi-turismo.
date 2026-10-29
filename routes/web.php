<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');
Route::redirect('/inicio', '/');

Route::get('/contacto', [ContactoController::class, 'mostrar'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
Route::get('/contacto/gracias/{mensaje}', [ContactoController::class, 'gracias'])->name('contacto.gracias');
