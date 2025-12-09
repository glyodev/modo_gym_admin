<!DOCTYPE html>
<html lang="es">

<head>
    <title>Modo Gym</title>
    <link rel="icon" href="{{ asset('modo-gym/logo_2.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Modo Gym" name="description">
    <meta content="modogym, modo-gym" name="keywords">
    <meta content="glyodev" name="author">
    @include('frontend.layouts.partials.styles')
</head>

<body class="dark-scheme">
    @include('frontend.layouts.partials.header')

    @yield('contenido')

    @include('frontend.layouts.partials.footer')

    <div class="float-text show-on-scroll">
        <span><a href="#">Ir arriba</a></span>
    </div>
    <div class="scrollbar-v show-on-scroll"></div>

    <!-- page preloader begin -->
    <div id="de-loader"></div>
    <!-- page preloader close -->

    @include('frontend.layouts.partials.scripts')
</body>

</html>
