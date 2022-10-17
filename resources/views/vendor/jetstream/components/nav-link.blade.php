@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-primary-600 text-sm font-medium leading-5 text-neutral-900
focus:outline-none focus:border-primary-700 transition dark:text-neutral-300'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-neutral-500
hover:text-neutral-700 hover:border-primary-900 focus:outline-none focus:text-neutral-700 focus:border-neutral-300
transition dark:text-neutral-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
