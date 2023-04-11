@props(['quote'])

<div class="flex flex-col items-center">
    <img src="{{ asset('storage/' . $quote->thumbnail) }}" class="rounded-lg mb-16 w-[700px] h-[386px]">

    <h1 class="text-4xl mb-28">{{ $quote->text }}</h1>

    <x-title :quote="$quote" />

</div>