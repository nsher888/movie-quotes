<aside class="bg-white w-1/4 flex flex-col">
    <div class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black hover:bg-gray-400">
        <p class="text-black">
            {{ __('admin.hello') }}, {{ auth()->user()->username }}
        </p>
    </div>
    <div class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black hover:bg-gray-400">
        <a href="{{ route('admin.quotes') }}" class="text-black">
            {{ __('admin.quotes_management') }}
        </a>
    </div>



    <div class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black hover:bg-gray-400">
        <a href="{{ route('admin.movies') }}" class="text-black">
            {{ __('admin.movies_management') }}

        </a>
    </div>

    <div
        class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black mt-auto hover:bg-gray-400">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="text-red-500" type="submit"> {{ __('admin.logout') }}
            </button>
        </form>
    </div>

    <x-languages class="bg-gray-400 left-8 p-5" />

</aside>