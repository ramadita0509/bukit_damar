<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Website Bukit Damar' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap Icons -->
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800">
            <div class="mb-6 text-center">
                <a href="/" class="inline-block">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-1">Website Bukit Damar</h1>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Cluster Bukit Damar Citra Indah City</p>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-2 px-6 py-6 bg-white dark:bg-gray-800 shadow-xl overflow-hidden sm:rounded-lg border border-gray-200 dark:border-gray-700">
                {{ $slot }}
            </div>

            <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
                <p>&copy; {{ date('Y') }} Website Bukit Damar. All rights reserved.</p>
            </div>
        </div>
    </body>
</html>
