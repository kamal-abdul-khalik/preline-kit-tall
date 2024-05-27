@props(['disabled' => false])
<div class="pt-3">
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'py-3 px-4 block w-full bg-white dark:bg-neutral-900 border border-gray-200 dark:border-neutral-700 rounded-lg text-xs text-neutral-700 dark:text-neutral-300  tracking-widest shadow-sm hover:bg-neutral-50 dark:hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-primary-300 dark:focus:ring-neutral-700 focus:ring-offset-2 dark:focus:ring-offset-neutral-800 disabled:opacity-25 transition ease-in-out duration-150',
    ]) !!}></textarea>
</div>
