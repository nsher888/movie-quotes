@props(['quote'])

<div class="border border-1 border-black bg-white w-[748px] rounded-xl overflow-hidden mx-auto mb-16">
    <img src="{{ asset('storage/' . $quote->thumbnail) }}" class="max-h-96 w-full">

    <div class="flex items-center min-h-28 border-t-1 border-black p-5">
        <p class="text-black text-4xl max-w-xl break-all">{{ $quote->text }}</p>
    </div>
</div>