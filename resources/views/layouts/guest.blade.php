<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quiz</title>

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
    <body>
        <header>
            @include('layouts.navigation')
            @include('components.alert')
        </header>

        <!-- Page Content -->
        <main class="form-signin container-fluid m-auto">
            {{ $slot }}
        </main>
    </body>
</html>
