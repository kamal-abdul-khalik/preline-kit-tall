@props(['title' => $title, 'description' => $description])

<div class="sm:flex-auto">
    <h1 class="text-base font-semibold leading-6 text-dark-700 dark:text-dark-300">{{ $title }}</h1>
    <p class="mt-2 text-sm leading-relaxed text-dark-600 dark:text-dark-400">{{ $description }}</p>
</div>
