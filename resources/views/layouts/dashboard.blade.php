<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-fs-md">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fourriere Alerts</title>

    @include('partials._head')
</head>
<body class="{{ isset($bodyClass) ? $bodyClass : '' }}">
@include('partials._body')
</body>
</html>
