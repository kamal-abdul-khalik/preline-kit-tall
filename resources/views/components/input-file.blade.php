@props(['disabled' => false, 'name' => ''])

<div class="mt-4">
    <label for="{{ $name }}" class="sr-only">{{ $slot }}</label>
    <input type="file" name="{{ $name }}" id="{{ $name }}" {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge([
            'class' => 'block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-dark-900 dark:border-dark-700 dark:text-dark-400
                            file:bg-gray-50 file:border-0
                            file:me-4
                            file:py-2 file:px-4
                            dark:file:bg-dark-700 dark:file:text-dark-400',
        ]) !!}>
</div>
