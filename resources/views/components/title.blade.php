@props(['quote'])

<a href="{{ route('movies.show', ['movie' => $quote->movie->slug]) }}" class="text-4xl underline">{{
    $quote->movie->title }}</a>
