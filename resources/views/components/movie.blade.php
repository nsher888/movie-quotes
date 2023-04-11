@props(['quote'])

<div class="border border-1 border-black bg-white w-[748px] rounded-xl overflow-hidden">
    <img src="{{ asset('storage/' . $quote->thumbnail) }}" class="max-h-96 w-full">

    <div class="flex items-center h-28 border-t-1 border-black">
        <p class="text-black text-4xl max-w-xl mx-auto">{{ $quote->text }}</p>
    </div>
</div>