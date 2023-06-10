<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased" x-data="{ openMenu : false }" :class="openMenu ? 'overflow-hidden' : 'overflow-visible' ">
        <div class="min-h-screen bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex h-screen  dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
                        <!-- Desktop sidebar -->
                        <x-sidebar></x-sidebar>
                        <div class="flex flex-col flex-1">
                            <x-header></x-header>
                            <main class="h-full pb-16 overflow-y-auto px-3">
                                {{ $slot }}
                            </main>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
