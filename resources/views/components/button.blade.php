@props([
    'color' => 'primary',
    'disabled' => false,
])

@php
    $disabled = filter_var($disabled, FILTER_VALIDATE_BOOLEAN);
    $options = [
        'secondary' =>
            'bg-secondary-700 hover:bg-secondary-600 active:bg-secondary-900 focus:ring-secondary-300 focus:ring-2 focus:ring-secondary-400',
        'primary' =>
            'bg-primary-700 hover:bg-primary-600 active:bg-primary-900 focus:ring-primary-300 focus:ring-2 focus:ring-primary-400',
        'success' =>
            'bg-success-700 hover:bg-success-600 active:bg-success-900 focus:ring-success-300 focus:ring-2 focus:ring-success-400',
        'danger' =>
            'bg-danger-700 hover:bg-danger-600 active:bg-danger-900 focus:ring-danger-300 focus:ring-2 focus:ring-danger-400',
        'warning' =>
            'bg-warning-700 hover:bg-warning-600 active:bg-warning-900 focus:ring-warning-300 focus:ring-2 focus:ring-warning-400',
        'info' =>
            'bg-info-700 hover:bg-info-600 active:bg-info-900 focus:ring-info-300 focus:ring-2 focus:ring-info-400',
        'transparent' =>
            'hover:bg-gray-100 ring-1 ring-neutral-600 text-neutral-900 dark:text-neutral-200 focus:border-gray-900 focus:ring-gray-300 focus:ring-2 focus:ring-gray-500 focus:ring-offset-1 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:ring-offset-gray-500',
    ];
    $style = $options[$color] ?? $options['primary'];
    if ($disabled) {
        $style .= ' cursor-not-allowed';
    }
@endphp

<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => "$style inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase focus:outline-none focus:ring disabled:opacity-25 transition ease-in-out duration-300",
    ]) }}
    {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</button>
