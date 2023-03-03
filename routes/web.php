<?php

use Illuminate\Support\Facades\Route;



Route::get('/register', [App\Http\Controllers\auth\regController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\auth\regController::class, 'store']);
Route::post('/logout', [App\Http\Controllers\auth\logoutController::class, 'store'])->name('logout');
Route::get('/login', [App\Http\Controllers\auth\loginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\auth\loginController::class, 'store']);

Route::get('/user/{user:username}/posts', [App\Http\Controllers\userPostController::class, 'index'])->name('users.post');
Route::get('/posts/{post}', [App\Http\Controllers\postController::class, 'show'])->name('posts.show');



Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');
Route::get('/posts', [App\Http\Controllers\postController::class, 'index'])->name('posts');
Route::post('/posts', [App\Http\Controllers\postController::class, 'store']);
Route::delete('/posts/{post}', [App\Http\Controllers\postController::class, 'destroy'])->name('posts.destroy');


Route::post('/posts/{post}/likes', [App\Http\Controllers\likeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [App\Http\Controllers\likeController::class, 'destroy'])->name('posts.likes');


Route::get('/', function(){
    return view('home');
})->name('home');
