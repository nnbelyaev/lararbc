<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('shared.meta')
</head>
<body class="{{ isset($bodyClass) ? $bodyClass : '' }}">
    @include('shared.header')
    @yield('content')


</body>
</html>
