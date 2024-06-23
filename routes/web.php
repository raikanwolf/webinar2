<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebinarController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\TopicController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

Route::middleware(['auth'])->group(function () {
    Route::get('/topics', [WebinarController::class, 'showTopics'])->name('topics');
    Route::get('/topics/create', [TopicController::class, 'create'])->name('topics.create');
    Route::post('/topics', [TopicController::class, 'store'])->name('topics.store');
});

Route::get('/register', [WebinarController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [WebinarController::class, 'register']);
Route::get('/curriculum/{participant}', [CurriculumController::class, 'show'])->name('curriculum');
