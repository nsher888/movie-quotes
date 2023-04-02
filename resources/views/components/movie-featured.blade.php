@props(['quote'])

<div class="max-w-4xl flex flex-col items-center">
    <img src="https://i.ytimg.com/vi/qOv-dw_RwFc/maxresdefault.jpg" class="max-w-2xl rounded-lg mb-16">

    <h1 class="text-4xl mb-28">{{ $quote->text }}</h1>

    <x-title name="The Shawshank Redemption" />

</div>
