<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-fs-md">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Fourriere Alerts</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        @include('partials._head')

    </head>
    <body class="  " >

         {{-- new --}}
          <!-- loader Start -->
    <div id="loading">
        @include('partials._body_loader')
      </div>
      <!-- loader END -->

        <div class="wrapper">
            {{ $slot }}
        </div>

        @include('partials._scripts')

    </body>
</html>
