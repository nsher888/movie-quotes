<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\StoreQuoteRequest;
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

    public function store(StoreQuoteRequest $request)
    {
        $validated = $request->validated();

        $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        Quote::create($validated);

        return redirect()->route('admin.quotes');
    }
}
