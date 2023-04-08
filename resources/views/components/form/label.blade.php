@props(['name'])

<label for="{{ $name }}" class="text-white font-bold mb-2 block">{{ __('admin.' . $name) }}</label>