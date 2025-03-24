<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

// Route::get('/dashboard', [MainController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::resources([
        'posts'=> PostController::class,
        'comments'=>CommentController::class
    ]);

});

// Route::get('/admin', function () {
//     return "Admin Panel";
// })->middleware('role:admin');

// Route::get('/dashboard', function () {
//     return "Dashboard";
// })->middleware('role:admin,writer');

require __DIR__.'/auth.php';
