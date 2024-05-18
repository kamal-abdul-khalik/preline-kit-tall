<div {!! $attributes->merge([
    'class' => 'border dark:border-neutral-700 shadow-sm rounded-lg',
]) !!}>
    {{ $slot }}
    @isset($header)
        <div class="flex flex-col space-y-1.5 p-6">
            @isset($title)
                <h3 class="text-xl font-semibold leading-none tracking-tight text-neutral-700 dark:text-neutral-300">
                    {{ $title }}
                </h3>
            @endisset
            @isset($description)
                <div class="text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">
                    {{ $description }}
                </div>
            @endisset
        </div>
    @endisset

    @isset($content)
        <div class="p-6 pt-0">
            {{ $content }}</div>
    @endisset

    @isset($footer)
        <div class="flex items-center p-6 pt-0 dark:text-neutral-400">
            {{ $footer }}
        </div>
    @endisset
</div>
