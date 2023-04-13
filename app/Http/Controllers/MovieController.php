<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function show(Movie $movie): View
    {
        return view('show', [
            'quotes' => $movie->quotes,
            'movie' => $movie,
        ]);
    }

    public function create(): View
    {
        return view('admin.movies.create');
    }
}
