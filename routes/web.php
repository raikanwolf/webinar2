<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebinarController;
use App\Http\Controllers\CurriculumController;

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/register', [WebinarController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [WebinarController::class, 'register']);
Route::get('/topics', [WebinarController::class, 'showTopics'])->name('topics');
Route::get('/curriculum/{participant}', [CurriculumController::class, 'show'])->name('curriculum');

