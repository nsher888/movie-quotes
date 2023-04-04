<aside class="bg-white w-1/4 flex flex-col">
    <div class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black hover:bg-gray-400">
        <p class="text-black">
            Hello, {{ auth()->user()->username }}
        </p>
    </div>
    <div class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black hover:bg-gray-400">
        <a href="{{ route('admin.quotes') }}" class="text-black">
            Quotes Management
        </a>
    </div>

    <div class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black hover:bg-gray-400">
        <a class="text-black">
            Movies Management
        </a>
    </div>

    <div
        class="bg-gray-300 h-14 flex items-center justify-center gap-6 border border-b-black mt-auto hover:bg-gray-400">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="text-red-500" type="submit">Log Out</button>
        </form>
    </div>

</aside>