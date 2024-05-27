@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-dark-900 dark:text-dark-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-dark-500 dark:text-dark-400 hover:text-dark-700 dark:hover:text-dark-300 hover:border-dark-300 dark:hover:border-dark-700 focus:outline-none focus:text-dark-700 dark:focus:text-dark-300 focus:border-dark-300 dark:focus:border-dark-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
