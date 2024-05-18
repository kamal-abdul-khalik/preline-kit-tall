<a {{ $attributes->merge(['class' => ' cursor-pointer text-primary-600 hover:underline dark:text-primary-500']) }}
    wire:navigate>
    {{ $slot }}
</a>
