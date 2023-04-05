<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\UpdateQuoteRequest;
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

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        $quote->update($validated);

        return redirect()->route('admin.quotes');
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();

        return redirect()->route('admin.quotes');
    }
}
