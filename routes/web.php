<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\szakdogaController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/szakdogak', [szakdogaController::class, 'index']);

Route::post('/szakdogak', [szakdogaController::class, 'index2']);

Route::get('/szakdogak/{Id}', [szakdogaController::class, 'index3']);

Route::delete('/szakdogak/{Id}', [szakdogaController::class, 'index4']);



//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

require __DIR__ . '/auth.php';
