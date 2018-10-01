<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Expires" content="7" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        @include('layouts.styles')

        @include('layouts.header')

        @yield('styles')
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>
            @include('layouts.menu')
            @yield('content')
            @include('layouts.footer')
            @include('layouts.scripts')
            @yield('scripts')

    </body>
</html>
