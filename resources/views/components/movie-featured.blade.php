@props(['quote'])

<div class="flex flex-col items-center">
    <img src="{{ $quote->thumbnail }}" class="max-w-2xl rounded-lg mb-16">

    <h1 class="text-4xl mb-28">{{ $quote->text }}</h1>

    <x-title :quote="$quote" />

</div>