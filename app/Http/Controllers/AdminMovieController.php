<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function index()
    {
        return view('admin.movies.index', [
            'movies' => Movie::latest()->get(),
        ]);
    }
}
