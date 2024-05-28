@props(['title'])
<div
    class="flex items-center py-3 text-xs text-dark-400 before:flex-1 before:border-t before:border-dark-200 before:me-6 after:flex-1 after:border-t after:border-dark-200 after:ms-6 dark:text-dark-600 dark:before:border-neutral-600 dark:after:border-neutral-600">
    {{ $title ?? '' }}
</div>
