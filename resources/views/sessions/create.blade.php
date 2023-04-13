<x-layout class="flex justify-center items-center">
    <div class="flex flex-col items-center rounded-lg justify-center bg-gradient-to-br from-gray-900 to-gray-700">
        <div class="p-8 bg-gray-800 rounded-lg shadow-lg w-[25rem]">
            <h1 class="text-3xl font-bold text-white mb-6">{{ __('auth.auth') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="relative mb-9">
                    <label class="block text-white font-medium mb-2" for="username">
                        {{ __('auth.username') }}
                    </label>
                    <input
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600"
                        id="username" name="username" type="text" placeholder="{{ __('auth.username') }}"
                        value="{{ old('username') }}">
                    @error('username')
                    <div class="absolute">
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="relative mb-10">
                    <label class="block text-white font-medium mb-2" for="password">
                        {{ __('auth.password') }}

                    </label>
                    <input
                        class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600"
                        id="password" name="password" type="password" placeholder="{{ __('auth.password') }}">
                    @error('password')
                    <div class="absolute">
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="w-full px-4 py-3 rounded-lg bg-blue-600 text-white font-medium shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        {{ __('auth.sign_in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>