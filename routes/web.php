<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use Illuminate\Routing\Controller;
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

Route::get('/admin', [AdminMovieController::class, 'redirectToMovies']);

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::group(['prefix' => 'quotes', 'controller' => QuoteController::class], function () {
        Route::get('/create', 'create')->name('admin.quotes.create');
        Route::post('/', 'store')->name('admin.quotes.store');
    });

    Route::group(['prefix' => 'quotes', 'controller' => AdminQuoteController::class], function () {
        Route::get('/', 'index')->name('admin.quotes');
        Route::get('/{quote}/edit', 'edit')->name('admin.quotes.edit');
        Route::patch('/{quote}', 'update')->name('admin.quotes.update');
        Route::delete('/{quote}', 'destroy')->name('admin.quotes.destroy');
    });

    Route::group(['prefix' => 'movies', 'controller' => MovieController::class], function () {
        Route::get('/create', 'create')->name('admin.movies.create');
    });

    Route::group(['prefix' => 'movies', 'controller' => AdminMovieController::class], function () {
        Route::get('/', 'index')->name('admin.movies');
        Route::post('/', 'store')->name('admin.movies.store');
        Route::get('/{id}/edit', 'edit')->name('admin.movies.edit');
        Route::patch('/{movie}', 'update')->name('admin.movies.update');
        Route::delete('/{movie}', 'destroy')->name('admin.movies.destroy');
    });
});
