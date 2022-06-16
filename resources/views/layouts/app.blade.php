<!DOCTYPE html>
<html class="h-full bg-cfwp-purple" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffc40d">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body x-data class="h-full font-sans antialiased">
        <div class="min-h-full">
            <div class="bg-gray-800 pb-32">
                @include('layouts.navigation')

                <header class="py-10">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold text-white">{{ $header }}</h1>
                    </div>
                </header>
            </div>

            <main class="-mt-32">
                <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                    <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">
                        <div class="rounded-lg h-auto">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <x-cfwp-team-members-slide-over :teams="$options['teams']" />

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('teamsPanel', {
                    open: false,
                    activeTeamIndex: 0,

                    openPanel() {
                        this.open = true
                    },

                    closePanel() {
                        this.open = false
                    },

                    showTeam(index) {
                        this.activeTeamIndex = index;

                        if (! this.open) {
                            this.openPanel();
                        }
                    },
                })
            })
        </script>
    </body>
</html>
