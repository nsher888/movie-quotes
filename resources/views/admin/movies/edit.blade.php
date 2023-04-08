<x-layout class="flex p-8">
    <div class="bg-gradient-to-b from-gray-900 to-gray-700 flex min-h-full w-full">
        <x-aside />

        <div class="w-3/4 p-10">
            <div class="container mx-auto py-10">
                <h1 class="text-4xl text-white font-bold mb-10">{{ __('admin.edit_movie') }}</h1>

                <form class="flex flex-col " method="POST" "
                    enctype=" multipart/form-data">
                    @csrf
                    @method('patch')

                    <x-form.input name="title[ka]" :value="old('title', $movie->getTranslation('title', 'ka'))" />
                    <x-form.input name="title[en]" :value="old('title', $movie->getTranslation('title', 'en'))" />


                    <x-form.button>{{ __('admin.edit') }}</x-form.button>
                </form>
            </div>
        </div>
    </div>
</x-layout>