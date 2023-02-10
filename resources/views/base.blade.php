<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="css1/main.css"> --}}

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}"> --}}

    </head>
    <body>


        {{-- Tous nos contenus seront affiche ici --}}
        @yield('content')

           {{-- <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}"></script> --}}

           <!-- =============Scripts============== -->
           <script src="js1/main.js"></script>

            <!--================= ionicons===========================  -->
           <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    </body>
</html>
