<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/dashboard/quiz', QuizController::class)->except('index')->names([
        'create' => 'quiz.create',
        'store' => 'quiz.store',
        'show' => 'quiz.show',
        'edit' => 'quiz.edit',
        'update' => 'quiz.update',
        'destroy' => 'quiz.destroy',
    ]);
});

require __DIR__.'/auth.php';
