<?php

use App\Models\Movie;
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

Route::get('/', function () {
    $quote = App\Models\Quote::inRandomOrder()->first();
    return view('index', ['quote' => $quote]);
});

Route::get('/movies/{movie:slug}', function (Movie $movie) {
    return view('show', [
        'quotes' => $movie->quotes,
        'movie' => $movie,
    ]);
})->name('movies.show');
