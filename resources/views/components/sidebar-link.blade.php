@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center w-full px-3 py-2 text-sm font-medium text-white bg-gray-700 dark:bg-gray-700 rounded-md transition duration-150 ease-in-out'
            : 'flex items-center w-full px-3 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 dark:hover:bg-gray-700 rounded-md transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>