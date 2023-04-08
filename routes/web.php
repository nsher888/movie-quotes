<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [QuoteController::class, 'index'])->name('home');

Route::get('language/{locale}', [LanguageController::class, 'switchLanguage'])->name('switchLanguage');

Route::get('/movies/{movie:id}', [MovieController::class, 'show'])->name('movies.show');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest')->name('login');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('quotes/create', [QuoteController::class, 'create'])->name('admin.quotes.create');
    Route::post('quotes', [QuoteController::class, 'store'])->name('admin.quotes.store');
    Route::get('quotes', [AdminQuoteController::class, 'index'])->name('admin.quotes');
    Route::get('quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('admin.quotes.edit');
    Route::patch('quotes/{quote}', [AdminQuoteController::class, 'update'])->name('admin.quotes.update');
    Route::delete('quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('admin.quotes.destroy');

    Route::get('movies', [AdminMovieController::class, 'index'])->name('admin.movies');
    Route::get('movies/create', [MovieController::class, 'create'])->name('admin.movies.create');
    Route::post('movies', [AdminMovieController::class, 'store'])->name('admin.movies.store');
    Route::get('movies/{id}/edit', [AdminMovieController::class, 'edit'])->name('admin.movies.edit');
    Route::patch('movies/{movie}', [AdminMovieController::class, 'update'])->name('admin.movies.update');
});
