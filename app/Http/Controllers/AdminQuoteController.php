<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminQuoteController extends Controller
{
    public function index()
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::latest()->get(),
        ]);
    }

    public function edit(Quote $quote)
    {
        return view('admin.quotes.edit', [
            'quote' => $quote,
            'movies' => Movie::all(),
        ]);
    }

    public function update(Quote $quote)
    {
        $attributes = request()->validate([
            'text' => 'required',
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'thumbnail' => 'image',
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $quote->update($attributes);

        return redirect()->route('admin.quotes');
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();

        return redirect()->route('admin.quotes');
    }
}
