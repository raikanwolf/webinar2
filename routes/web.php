<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebinarController;

Route::get('/register', [WebinarController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [WebinarController::class, 'register']);
