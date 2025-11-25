<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;


// HOME

Route::get('/', [PageController::class, 'home'])->name('home');


// SERVICIOS

Route::get('/servicios', [PageController::class, 'services'])->name('services');
Route::get('/servicios/{service:slug}', [PageController::class, 'serviceShow'])->name('services.show');


// BLOG PÚBLICO

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');


// ADMIN (ABM de posts) - SOLO ADMIN

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('posts', AdminPostController::class);
        
    });


// AUTENTICACIÓN

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
=======

Route::get('/', [PageController::class, 'home'])->name('home');

// Servicios
Route::get('/servicios', [PageController::class, 'services'])->name('services');
// detalle por slug:
Route::get('/servicios/{service:slug}', [PageController::class, 'serviceShow'])->name('services.show');

// Blog público
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Admin (ABM de posts)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', AdminPostController::class);
});
// tempora:
Route::get('/_check-img', function () {
    $path   = public_path(''); // Cambiar imagen?
    $exists = file_exists($path);

    return [
        'path'   => $path,
        'exists' => $exists,
        'size'   => $exists ? filesize($path) : null,
        'mime'   => $exists ? @mime_content_type($path) : null,
        'url'    => asset(''),
    ];
});


>>>>>>> origin/main
