<x-layout>
    <x-languages />

    <div class="py-20">

        <p class="text-4xl mb-2">{{ $movie->title }}</p>


        <div class="mt-20 space-y-16">
            @foreach ($quotes as $quote )
            <x-movie :quote="$quote" />

            @endforeach
        </div>

    </div>



</x-layout>
