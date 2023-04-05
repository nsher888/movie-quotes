<x-layout class="flex justify-center items-center">
    <div class="flex flex-col items-center rounded-lg justify-center bg-gradient-to-br from-gray-900 to-gray-700">
        <div class="p-8 bg-gray-800 rounded-lg shadow-lg w-[25rem]">
            <h1 class="text-3xl font-bold text-white mb-6">Sign In</h1>
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-white font-medium mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600"
                        id="username" name="username" type="text" required>
                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-white font-medium mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600"
                        id="password" name="password" type="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="w-full px-4 py-3 rounded-lg bg-blue-600 text-white font-medium shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>