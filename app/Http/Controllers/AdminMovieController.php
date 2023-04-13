<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminMovieController extends Controller
{
    public function index(): View
    {
        return view('admin.movies.index', [
            'movies' => Movie::latest()->get(),
        ]);
    }

    public function store(StoreMovieRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $movie = new Movie($validated);
        $movie->save();

        return redirect()->route('admin.movies');
    }

    public function edit($id): View
    {
        return view('admin.movies.edit', [
            'movie' => Movie::find($id),
        ]);
    }

    public function update(UpdateMovieRequest $request, Movie $movie): RedirectResponse
    {
        $validated = $request->validated();

        $movie->update($validated);

        return redirect()->route('admin.movies');
    }

    public function destroy(Movie $movie): RedirectResponse
    {
        $movie->delete();

        return redirect()->route('admin.movies');
    }

    public function redirectToMovies()
    {
        return redirect()->route('admin.movies');
    }
}
