<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MovieARR - tool for organize Your movies.</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>body {font-family: 'Nunito', sans-serif;}</style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    Logo
                </div>

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-bold text-purple-500 dark:text-purple-400 no-underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-bold text-purple-500 dark:text-purple-400 no-underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm font-bold text-purple-500 dark:text-purple-400 no-underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="flex">
                        <div class="p-6 text-sm text-gray-400">
                            <span class="font-bold text-purple-400">MovieARR</span> - easy & fast tool for organize movies.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
