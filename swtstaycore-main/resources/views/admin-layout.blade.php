<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="select-none bg-gray-50">
        {{--  Sidebar --}}
        <livewire:Admin.partials.side-menu>
        {{-- main content --}}
        <main class=" md:ml-56 h-auto pt-0">
            {{-- Nav bard --}}
            <livewire:Admin.partials.top-nav-bar>
            {{-- main content for each page comes here --}}
            <div class="p-1">
                {{ $slot }}
            </div>

        </main>

    @livewireScripts
</body>

</html>
