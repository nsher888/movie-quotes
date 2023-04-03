<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(Movie $movie)
    {
        return view('show', [
            'quotes' => $movie->quotes,
            'movie' => $movie,
        ]);
    }
}
