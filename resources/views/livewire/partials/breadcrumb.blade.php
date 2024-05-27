<div>
    <ol class="flex items-center ms-3 whitespace-nowrap">
        <li class="flex items-center text-sm text-dark-800 dark:text-dark-400">
            {{ config('app.name') }}
            <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-dark-400 dark:text-dark-500" width="16"
                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" />
            </svg>
        </li>
        <li class="text-sm font-semibold text-dark-800 truncate dark:text-dark-400" aria-current="page">
            {{ ucfirst(request()->path()) }}
        </li>
    </ol>
</div>
