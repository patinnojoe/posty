<?php

use Illuminate\Support\Facades\Route;



Route::get('/register', [App\Http\Controllers\auth\regController::class, 'index'])->name('register');

Route::post('/register', [App\Http\Controllers\auth\regController::class, 'store']);

Route::post('/logout', [App\Http\Controllers\auth\logoutController::class, 'store'])->name('logout');

Route::get('/login', [App\Http\Controllers\auth\loginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\auth\loginController::class, 'store']);

Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');

Route::get('/posts', [App\Http\Controllers\postController::class, 'index'])->name('posts');
Route::post('/posts', [App\Http\Controllers\postController::class, 'store']);


Route::post('/posts/{id}/likes', [App\Http\Controllers\likeController::class, 'store'])->name('posts.like');
// Route::post('/posts', [App\Http\Controllers\postController::class, 'store']);


Route::get('/', function(){
    return view('home');
})->name('home');


