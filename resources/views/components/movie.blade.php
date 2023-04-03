@props(['quote'])

<div class="border border-1 border-black max-w-3xl bg-white">
    <img src="https://i.ytimg.com/vi/qOv-dw_RwFc/maxresdefault.jpg" class="max-h-96">

    <div class="flex items-center h-28 border-t-1 border-black">
        <p class="text-black text-4xl max-w-xl mx-auto">{{ $quote->text }}</p>
    </div>
</div>
