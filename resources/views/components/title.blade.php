@props(['quote'])

<a href="{{ route('movies.show', ['movie' => $quote->movie->id]) }}" class="text-4xl max-w-3xl underline break-all">
    {{ Str::limit($quote->movie->title, 70) }}</a>