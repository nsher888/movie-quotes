<?php

use App\Http\Controllers\AdminQuoteController;
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

Route::get('/movies/{movie:slug}', [MovieController::class, 'show'])->name('movies.show');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest')->name('login');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('admin/quotes/create', [QuoteController::class, 'create'])->middleware('auth')->name('admin.quotes.create');

Route::post('admin/quotes', [QuoteController::class, 'store'])->middleware('auth')->name('admin.quotes.store');

Route::get('admin/quotes', [AdminQuoteController::class, 'index'])->name('admin.quotes')->middleware('auth');
Route::get('admin/quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('admin.quotes.edit')->middleware('auth');
Route::patch('admin/quotes/{quote}', [AdminQuoteController::class, 'update'])->name('admin.quotes.update')->middleware('auth');
Route::delete('admin/quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('admin.quotes.destroy')->middleware('auth');
