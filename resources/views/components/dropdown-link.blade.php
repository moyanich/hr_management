@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex px-4 py-2 text-sm text-sm font-medium leading-5 text-white focus:outline-none focus:border-blue-700 hover:text-gray-700 hover:bg-blue-50 transition duration-150 ease-in-out'

            : 'flex px-4 py-2 text-sm border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-700 hover:border-gray-300 hover:bg-blue-50 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


