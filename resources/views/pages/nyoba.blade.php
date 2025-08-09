<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sangkolo</title>
    @include('layouts.partials.sweetalert')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-sangkolo-dark">
    
    <div class="min-h-screen flex flex-col">
        

        <main class="flex-grow">
            @yield('content')
        </main>

    </div>

    <x-development-modal />
</body>
</html>