<x-layout class="flex p-8">
    <div class="bg-gradient-to-b from-gray-900 to-gray-700 flex min-h-full w-full">

        <x-aside />

        <div class="w-3/4 p-10">
            <div class="container mx-auto py-10">
                <div class="flex items-center mb-10 gap-6">
                    <h1 class="text-4xl text-white font-bold ">{{ __('admin.quotes_management') }}</h1>

                    <a href="{{ route('admin.quotes.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{
                        __('admin.add_quote') }}</a>
                </div>


                <table class="w-full text-left rounded-lg overflow-hidden">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-4 text-sm font-medium">{{ __('admin.quote') }}</th>
                            <th class="px-6 py-4 text-sm font-medium">{{ __('admin.movie') }}</th>
                            <th class="px-6 py-4 text-sm font-medium"></th>
                        </tr>
                    </thead>
                    @foreach ($quotes as $quote)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Quote row -->
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="text-gray-900 font-medium">{{ Str::limit($quote->text, 40) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="text-gray-600 text-sm">
                                    <a href="/movies/{{ $quote->movie->id }}">
                                        {{ Str::limit($quote->movie->title, 25) }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="flex items-center">
                                    <a href="{{ route('admin.quotes.edit', $quote) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">{{
                                        __('admin.edit') }}</a>

                                    <form method="POST" action="{{ route('admin.quotes.destroy', $quote->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                            {{ __('admin.delete') }}</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-layout>