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
                <div class="flex justify-center">
                    @if (Route::has('login'))
                        <div class="hidden fixed px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-lg font-bold text-purple-500 dark:text-purple-400 hover:text-purple-200 no-underline">Dashboard</a>
                            @endauth
                        </div>
                    @endif
                </div>
                <div class="mt-16 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="flex">
                        <div class="p-6 text-sm text-gray-400">
                            <span class="font-bold text-purple-400">MovieARR</span> - easy & fast tool for organize movies.
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    @if (Route::has('login'))
                        <div class="text-center hidden fixed px-6 py-4 sm:block text-xl font-bold text-purple-500 dark:text-purple-400">
                            @auth
                                <div class="my-2"><a href="{{ url('/tasks') }}" class="hover:text-purple-200 no-underline">Tasks</a></div>
                                <div class="my-2"><a href="{{ url('/movies') }}" class="hover:text-purple-200 no-underline">Movies</a></div>
                                <div class="my-2"><a href="{{ url('/musics') }}" class="hover:text-purple-200 no-underline">Music</a></div>
                                <div class="my-2"><a href="{{ url('/favorites') }}" class="hover:text-purple-200 no-underline">Favorites</a></div>
                                <div class="my-2"><a href="{{ url('/musics') }}" class="hover:text-purple-200 no-underline">Music</a></div>
                                <div class="my-2"><a href="{{ url('/pin-boards') }}" class="hover:text-purple-200 no-underline">Pin boards</a></div>
                            @else
                                <a href="{{ route('login') }}">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
