<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? $title . ' | ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400..700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <script src="{{ asset('dark-mode.js') }}"></script>
    </head>

    <body class="dark:bg-dark-900 mb-[56px] sm:mb-[116px] dark:text-dark-400">
        @livewire('partials.navbar')

        @livewire('partials.sidebar')


        <div class="lg:ps-64">
            <div class="p-4 space-y-4 sm:p-6 sm:space-y-6">

                {{ $slot }}

            </div>
        </div>

        @livewireScripts
    </body>

</html>
