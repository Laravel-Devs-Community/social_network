<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="antialiased">

        <!-- component -->
        <div class="h-screen bg-gray-50 flex items-center">
            <section class="bg-cover bg-center py-32 w-full" style="background-image: url('/img/background.png');">
                <div class="container mx-auto text-left text-gray-800">
                    <div class="flex items-center">
                        <div class="w-1/2">
                            <h1 class="text-5xl font-medium mb-6">{{ __('Welcome to') }} {{ Config::get('app.name') }}</h1>
                            <p class="text-xl mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra
                                euismod odio, gravida pellentesque urna varius vitae.</p>
                            <a href="{{ route('login') }}" class="bg-green-500 text-white py-4 px-12 rounded-full hover:bg-green-600">{{ __('Login') }}</a>
                            <a href="{{ route('register') }}" class="bg-green-500 text-white py-4 px-12 rounded-full hover:bg-green-600">{{ __('Register') }}</a>
                        </div>
                        <div class="w-1/2 pl-16">
                            <img src="https://source.unsplash.com/random?ux" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
            </div>
                        </div>
                    </div>
            </section>
        </div>

    </body>
</html>
