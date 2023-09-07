<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="h-screen px-10 text-white flex justify-center flex-col items-center text-center">
            <h1 class="text-3xl font-bold">Astronauten</h1>
            <h1 class="text-2xl font-sans mb-10">Van Moonly</h1>

        {{ $slot }}
        </div>


        @livewireScripts
        <script>

        </script>
    </body>
</html>