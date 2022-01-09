@props(['active'])

@php
$classes = ($active ?? false)
            ? 'relative flex flex-row items-center h-11 focus:outline-none bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700 text-smil3 dark:text-smil2  border-x-2 rounded-r-lg rounded-l-lg border-transparent border-smibr  pr-6'
            : 'relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-smil3 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-smibr  pr-6';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
