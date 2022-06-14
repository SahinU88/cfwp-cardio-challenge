<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="h-full">
        <div class="min-h-full pt-16 pb-12 flex flex-col bg-cfwp-purple">
            <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex-shrink-0 flex justify-center">
                    <x-application-logo class="h-12 w-auto" :color="'black'" />
                </div>
                <div class="py-16">
                    <div class="text-center">
                        <p class="text-sm font-semibold text-gray-900 uppercase tracking-wide">Yaay! 🎉</p>
                        <h1 class="mt-2 text-4xl font-extrabold text-cfwp-purple-accent tracking-tight sm:text-5xl">Successfully registered!</h1>
                        <p class="mt-2 text-base text-gray-500">Stay tuned - the details for the challenge will follow shortly.</p>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
