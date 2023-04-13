@props(['quote'])

<div class="flex flex-col items-center">
    <img src="{{ asset('storage/' . $quote->thumbnail) }}" class="rounded-lg mb-16 w-[700px] h-[386px]">

    <div class="max-w-2xl">
        <h1 class="text-4xl mb-28 text-center break-all">{{ Str::limit($quote->text, 150) }}</h1>
    </div>

    <x-title :quote="$quote" />

</div>