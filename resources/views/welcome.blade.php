<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="antialiased font-sans">

        <div class="pr-9 bg-gray-100 pt-4">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>

        <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center">

            <div class="flex flex-col justify-center p-6 mx-auto text-center max-w-7xl lg:p-8 items-center space-y-4">
                <x-application-logo class="w-20 h-20 fill-current text-primary" />
                <x-button primary xl href="{{ route('register') }}">
                    Get started
                </x-button>
            </div>
        </div>
    </body>

</html>
