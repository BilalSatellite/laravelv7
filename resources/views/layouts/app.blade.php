<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
x-data="{ darkMode: localStorage.getItem('dark') === 'true'} "
x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }">

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

<body class="antialiased dark:theme-dark">
    <div class="flex h-screen overflow-y-hidden  bg-skin-body-fill" x-data="setup()"
    x-init="$refs.loading.classList.add('hidden')">
    <!-- Loading screen -->
    <div x-ref="loading"
    class="fixed inset-0 z-[200] flex items-center justify-center text-white bg-black bg-opacity-50"
    style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
    Loading.....
</div>
<!-- Sidebar backdrop -->
<div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>
<!-- Sidebar -->
@include('layouts.panel.sidebar')
<!-- Header -->
@include('layouts.panel.header')

<!-- Main content -->
<main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
    <!-- Main content header -->
    @include('layouts.panel.maincontentheader')
    {{ $slot }}
</main>
<!-- Main footer -->
@include('layouts.panel.footer')

</div>

</div>
@stack('modals')

@livewireScripts
<script>
    const setup = () => {
        return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
        }
    }
</script>


</body>

</html>
