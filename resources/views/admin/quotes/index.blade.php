<x-layout class="flex p-8">
    <div class="bg-gradient-to-b from-gray-900 to-gray-700 flex min-h-full w-full">
        <aside class="bg-white w-1/4">
            <div class="bg-gray-300 h-14 flex items-center justify-center gap-6">
                <p class="text-black">
                    Hello, {{ auth()->user()->username }}
                </p>
                <form action="/logout" method="post">
                    @csrf
                    <button class="text-red-500" type="submit">Log Out</button>
                </form>
            </div>
        </aside>
        <div class="w-3/4 p-10">
            <div class="container mx-auto py-10">
                <h1 class="text-4xl text-white font-bold mb-10">Quotes Management</h1>

                <table class="w-full text-left rounded-lg overflow-hidden">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-4 text-sm font-medium">Quote</th>
                            <th class="px-6 py-4 text-sm font-medium">Movie</th>
                            <th class="px-6 py-4 text-sm font-medium"></th>
                        </tr>
                    </thead>
                    @foreach ($quotes as $quote)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Quote row -->
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="text-gray-900 font-medium">{{ $quote->text }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="text-gray-600 text-sm">
                                    <a href="/movies/{{ $quote->movie->slug }}">
                                        {{ $quote->movie->title }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="flex items-center">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Edit</button>
                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
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