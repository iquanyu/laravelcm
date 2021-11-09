@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-400 leading-5 focus:outline-none focus:border-indigo-700 transition' : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent leading-5 hover:border-gray-300 focus:outline-none focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
