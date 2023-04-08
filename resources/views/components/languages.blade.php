<div class="absolute left-6 top-[50%] flex flex-col gap-4">
    @foreach($available_locales as $locale_name => $available_locale)
    @if($available_locale === $current_locale)
    <div class="border-2 border-white rounded-full p-2">
        <a>{{ $locale_name }}</a>
    </div>
    @else
    <div class="border-2 border-white rounded-full p-2 text-black bg-white">
        <a href="language/{{ $available_locale }}">{{ $locale_name }}</a>
    </div>
    @endif
    @endforeach
</div>