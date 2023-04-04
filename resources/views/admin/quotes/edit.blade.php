<x-layout class="flex p-8">
    <div class="bg-gradient-to-b from-gray-900 to-gray-700 flex min-h-full w-full">
        <aside class="bg-white w-1/4">
            <div class="bg-gray-300 h-14 flex items-center justify-center gap-6">
                <p class="text-black">
                    Hello, {{ auth()->user()->username }}
                </p>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="text-red-500" type="submit">Log Out</button>
                </form>
            </div>
        </aside>
        <div class="w-3/4 p-10">
            <div class="container mx-auto py-10">
                <h1 class="text-4xl text-white font-bold mb-10">Edit Quote</h1>

                <form class="flex flex-col " method="POST" action="{{ route('admin.quotes.update', $quote->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <x-form.input name="text" :value="old('title', $quote->text)" />

                    <x-form.label name="movie" />
                    <select id="movie_id" name="movie_id"
                        class="bg-gray-300 hover:bg-gray-400 text-gray-900 font-bold py-2 px-4 rounded mb-6">
                        @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }} {{ old('movie_id'), $quote->movie_id ==
                            $movie->id ?
                            'selected' : '' }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="movie_id" />

                    <x-form.input name="thumbnail" type="file" />
                    <img src="{{ asset('storage/' . $quote->thumbnail) }}" class="w-[100px] rounded-lg">


                    <x-form.button>Edit</x-form.button>
                </form>
            </div>
        </div>
    </div>
</x-layout>