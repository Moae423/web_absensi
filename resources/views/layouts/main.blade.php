<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body>
    <x-header />
    <main class="min-h-screen">
        @yield('content')
    </main>
    <x-footer />
</body>
<script src="./node_modules/preline/dist/preline.js"></script>
</html>