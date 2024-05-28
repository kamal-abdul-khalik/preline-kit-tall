@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-dark-700 rounded-lg dark:bg-dark-700 dark:text-dark-300 dark:hover:text-dark-300'
            : 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-dark-700 rounded-lg hover:bg-dark-100 dark:hover:bg-dark-700 dark:text-dark-400 dark:hover:text-dark-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:navigate>
    {{ $slot }}
</a>
