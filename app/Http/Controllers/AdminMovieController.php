<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
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

    public function store(StoreMovieRequest $request)
    {
        $validated = $request->validated();
        $movie = new Movie();
        $movie->title = $validated['title'];
        $movie->save();

        return redirect()->route('admin.movies');
    }

    public function edit($id)
    {
        return view('admin.movies.edit', [
            'movie' => Movie::find($id),
        ]);
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $validated = $request->validated();

        $movie->update($validated);

        return redirect()->route('admin.movies');
    }
}
