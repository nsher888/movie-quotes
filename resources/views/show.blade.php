<x-layout class="flex items-center justify-center">
    <x-languages />

    <div class="py-20">

        <p class="text-4xl mb-2 max-w-[748px] break-all">{{ $movie->title }}</p>

        <div class="mt-20">
            @foreach ($quotes as $quote )
            <x-movie :quote="$quote" />

            @endforeach
        </div>
    </div>
</x-layout>