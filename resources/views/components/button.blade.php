@props([
    'type' => 'type',
    'color' => 'primary',
    'as' => 'button',
])

@php
    $classes = " py-3 px-4 inline-flex  bg-{$color}-50 dark:bg-{$color}-800 border border-{$color}-300 dark:border-{$color}-500 rounded-lg font-semibold text-xs text-{$color}-700 dark:text-{$color}-300 uppercase tracking-widest shadow-sm hover:bg-{$color}-100 dark:hover:bg-{$color}-700 focus:outline-none focus:ring-2 focus:ring-{$color}-500 focus:ring-offset-2 dark:focus:ring-offset-{$color}-800 disabled:opacity-25 transition ease-in-out duration-150";
@endphp

@if ($as === 'button')
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@endif
