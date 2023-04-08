@props(['quote'])

<a href="{{ route('movies.show', ['movie' => $quote->movie->id]) }}" class="text-4xl underline">{{
    $quote->movie->title }}</a>