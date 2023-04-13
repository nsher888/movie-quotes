<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quote\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AdminQuoteController extends Controller
{
    public function index(): View
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::latest()->get(),
        ]);
    }

    public function edit(Quote $quote): View
    {
        return view('admin.quotes.edit', [
            'quote' => $quote,
            'movies' => Movie::all(),
        ]);
    }

    public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
        }

        $quote->update($validated);

        return redirect()->route('admin.quotes');
    }

    public function destroy(Quote $quote): RedirectResponse
    {
        $quote->delete();

        return redirect()->route('admin.quotes');
    }
}
