@props(['quote'])

<a href="{{ route('movies.show', ['movie' => $quote->movie->id]) }}" class="text-4xl underline">
    {{ Str::words($quote->movie->title, 6) }}</a>