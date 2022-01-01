<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('dark') === 'true'} "
    x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
    x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body x-data="{ open: true }" class="antialiased text-gray-900 bg-white">

        <div
            class="min-h-screen w-full flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <!-- Header -->
            @include('layouts.panel.header')
            <!-- ./Header -->

            <!-- Sidebar -->
            @include('layouts.panel.sidebar')
            <!-- ./Sidebar -->
             <!-- Main content -->
             <div class="h-full mt-14 mb-10 bg-white"
             :class="{'md:ml-64': open}">

                 {{ $slot }}


            </div>

        </div>


    @stack('modals')

    @livewireScripts


</body>

</html>
