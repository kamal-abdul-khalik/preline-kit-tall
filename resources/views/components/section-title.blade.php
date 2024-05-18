@props(['title' => $title, 'description' => $description])

<div class="sm:flex-auto">
    <h1 class="text-base font-semibold leading-6 text-neutral-700 dark:text-neutral-300">{{ $title }}</h1>
    <p class="mt-2 text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">{{ $description }}</p>
</div>
