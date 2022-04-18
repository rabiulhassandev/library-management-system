<?php

// require_once __DIR__ . '/jetstream.php';
// require_once __DIR__ . '/admin.php';
// require_once __DIR__ . '/portfolio.php';
// require_once __DIR__ . '/apps.php';
// require_once __DIR__ . '/bteb.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;


Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/books', [HomeController::class, 'books'])->name('home.books');
    Route::get('/academic-books', [HomeController::class, 'academicBooks'])->name('home.academic-books');
    Route::get('/book-details', [HomeController::class, 'bookDetails'])->name('home.book-details');
    Route::get('/book-request', [HomeController::class, 'bookRequest'])->name('home.book-request');
    Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('home.contact-us');
    Route::get('/categories', [HomeController::class, 'categories'])->name('home.categories');
    Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('home.about-us');
    Route::get('/registration', [HomeController::class, 'registration'])->name('home.registration');
    Route::get('/page/{page}', [HomeController::class, 'page'])->name('home.page');

    // Contact Us Form
    Route::post('/contact-us', [HomeController::class, 'contactUsFrom'])->name('home.contact-us-form');

});
