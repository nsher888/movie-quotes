@props(['quote'])

<div class="flex flex-col items-center">
    <img src="{{ asset('storage/' . $quote->thumbnail) }}" class="rounded-lg mb-16 w-[700px] h-[386px]">

    <h1 class="text-4xl mb-28 max-w-2xl text-center ">{{ Str::words($quote->text, 20) }}</h1>

    <x-title :quote="$quote" />

</div>