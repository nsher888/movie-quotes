@props(['name', 'type'=>'text'])
<x-form.label name="{{ $name }}" />
<input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
    class="bg-gray-300 hover:bg-gray-400 text-gray-900 font-bold py-2 px-4 rounded mb-6" {{ $attributes(['value'=>
old($name)]) }}>
<x-form.error name="{{ $name }}" />