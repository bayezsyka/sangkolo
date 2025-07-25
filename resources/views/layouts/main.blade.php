<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sangkolo Agensi Jasa</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-BQJjDyVl.css') }}">
    <script type="module" src="{{ asset('build/assets/app-DtCVKgHt.js') }}"></script>
</head>
<body class="font-sans antialiased bg-gray-100 text-sangkolo-dark">
    
    <div class="min-h-screen flex flex-col">
        
        @include('layouts.header')

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('layouts.footer')

    </div>
</body>
</html>