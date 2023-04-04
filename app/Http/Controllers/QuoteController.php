<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuoteController extends Controller
{
    public function index()
    {
        return view('index', [
            'quote' => Quote::inRandomOrder()->first(),
        ]);
    }

    public function create()
    {
        return view('admin.quotes.create', [
            'movies' => Movie::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'text' => 'required',
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'thumbnail' => 'required|image',
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Quote::create($attributes);

        return redirect()->route('admin.quotes');
    }
}
