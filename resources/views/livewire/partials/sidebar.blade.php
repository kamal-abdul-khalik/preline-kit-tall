<!-- Sidebar -->
<div id="application-sidebar"
    class="hs-overlay [--auto-close:lg]
hs-overlay-open:translate-x-0
-translate-x-full transition-all duration-300 transform
w-[260px]
hidden
fixed inset-y-0 start-0 z-[60]
bg-white border-e border-dark-200
lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
dark:bg-dark-900 dark:border-dark-700
hs-overlay-backdrop-open:bg-dark-700/50
">
    <div class="px-8 pt-4">
        <!-- Logo -->
        <x-link href="/">
            <x-application-logo />
        </x-link>
        <!-- End Logo -->
    </div>

    <nav class="flex flex-col flex-wrap w-full p-6 hs-accordion-group" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <x-heroicon-c-squares-2x2 class="w-5 h-5" />
                    Dashboard
                </x-nav-link>
            </li>

            <x-hr-center title="Post" />
            <li>
                <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                    <x-heroicon-o-newspaper class="w-5 h-5 " />
                    Post
                </x-nav-link>
            </li>

        </ul>
    </nav>
</div>
<!-- End Sidebar -->
