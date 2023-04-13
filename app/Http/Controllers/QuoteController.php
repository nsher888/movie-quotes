<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'quote' => Quote::inRandomOrder()->first(),
        ]);
    }

    public function create(): View
    {
        return view('admin.quotes.create', [
            'movies' => Movie::all(),
        ]);
    }

    public function store(StoreQuoteRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails');

        $quote = new Quote();
        $quote->text = $validated['text'];
        $quote->movie_id = $validated['movie_id'];
        $quote->thumbnail = $validated['thumbnail'];
        $quote->save();

        return redirect()->route('admin.quotes');
    }
}
