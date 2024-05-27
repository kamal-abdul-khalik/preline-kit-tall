@props(['disabled' => false])


<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'py-3 px-4 block w-full bg-white dark:bg-dark-900 border border-dark-200 dark:border-dark-700 rounded-lg text-xs text-dark-700 dark:text-dark-300 shadow-sm hover:bg-dark-50 dark:hover:bg-dark-800 focus:outline-none focus:ring-2 focus:ring-primary-300 dark:focus:ring-dark-700 focus:ring-offset-2 dark:focus:ring-offset-dark-800 disabled:opacity-25 transition ease-in-out duration-150',
]) !!}>
