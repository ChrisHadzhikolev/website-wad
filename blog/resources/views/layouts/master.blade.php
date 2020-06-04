<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('links')
    <link rel="stylesheet" href="{{asset('css/footerStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/navigationStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/backToTopStyle.css')}}">
    @show

    <title>@yield('title')</title>

</head>
<body>
@include('navBar')
@yield('content')
@include('footer')
</body>
</html>
