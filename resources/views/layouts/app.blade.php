<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script defer src="{{ asset('js/script.js') }}"></script>
    <title>@yield('title', 'Portfolio')</title>
</head>
<div class="bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('/img/bg1.jpg');">
    <body>
        <header>
            <div class="flex flex-col items-center">
                <img src="img/1.png" alt="Sulaiman Tahir Idris" class="rounded-full w-40 h-40 mb-4">
                <h1 class="text-3xl font-bold">Sulaiman Tahir Idris</h1>
                <p class="text-lg">Software Developer | Mechatronics Engineer</p>
                <p class="text-lg">Founder, WebCraft Labs</p>
            </div>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/sulaiman-tahir-idris-935697201/" target="_blank" class="social-icon"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Sulaiman-Tahir-Idris" target="_blank" class="social-icon"><i class="fab fa-github"></i></a>
                <a href="webcraftlabs.com" target="_blank" class="social-icon"><i class="fas fa-globe"></i></a>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>&copy; 2023 WebCraft Labs. All rights reserved.</p>
        </footer>
    </body>
</div>
</html>
