<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

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


