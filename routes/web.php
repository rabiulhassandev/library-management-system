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

Route::get('/', [RedirectController::class, 'homeToAdmin'])->name('home');
Route::get('/page/{page}', [HomeController::class, 'page'])->name('home.page');
