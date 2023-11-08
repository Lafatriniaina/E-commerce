<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/sass/navBar.scss', 'resources/css/navBar.css'])
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/all.min.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('fontawesome-free-6.4.0-web/js/all.min.js') }}"></script>
        <title>@yield('title')</title>
    </head>
    <body class="d-flex flex-column">
        <div class="container flex-grow-1">
            @yield('content')
        </div>
        <footer class="mt-10">
            <div class="container">
                @yield('footer')
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('fontawesome-free-6.4.0-web/js/all.min.js') }}"></script>
    </body>

</html>
