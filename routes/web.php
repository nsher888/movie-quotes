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

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::prefix('quotes')->group(function () {
        Route::get('/', [AdminQuoteController::class, 'index'])->name('admin.quotes');
        Route::get('/create', [QuoteController::class, 'create'])->name('admin.quotes.create');
        Route::post('/', [QuoteController::class, 'store'])->name('admin.quotes.store');
        Route::get('/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('admin.quotes.edit');
        Route::patch('/{quote}', [AdminQuoteController::class, 'update'])->name('admin.quotes.update');
        Route::delete('/{quote}', [AdminQuoteController::class, 'destroy'])->name('admin.quotes.destroy');
    });

    Route::prefix('movies')->group(function () {
        Route::get('/', [AdminMovieController::class, 'index'])->name('admin.movies');
        Route::get('/create', [MovieController::class, 'create'])->name('admin.movies.create');
        Route::post('/', [AdminMovieController::class, 'store'])->name('admin.movies.store');
        Route::get('/{id}/edit', [AdminMovieController::class, 'edit'])->name('admin.movies.edit');
        Route::patch('/{movie}', [AdminMovieController::class, 'update'])->name('admin.movies.update');
        Route::delete('/{movie}', [AdminMovieController::class, 'destroy'])->name('admin.movies.destroy');
    });
});
