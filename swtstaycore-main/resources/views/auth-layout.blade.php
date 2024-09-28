<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cover bg-no-repeat min-h-screen select-none" style="background-image: url('{{ asset('assets/Home.svg') }}');">

        {{ $slot }}

    @livewireScripts
</body>

</html>
