<?php

use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');


Route::post('/upload', [DefaultController::class, 'uploadStore'])->name('upload.store');
Route::get('/get', [DefaultController::class, 'getFile'])->name('file.get');
