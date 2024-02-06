<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')留饭的个人博客</title>
    <link rel="shortcut icon" type="image/x-ico" sizes="32x32" href="{{asset("favicon.ico")}}"/>
    <meta name="author" content="留饭(1973414293@qq.com)"/>
    <meta name="keywords" content="51lfan，留饭"/>
    <meta name="description" content="@yield('description','留饭的个人博客。')"/>
    @vite('resources/css/app.css')
    @yield('css')
</head>

<body class="bg-gray-100">
@include('layouts.header')
@yield('content')
@include('layouts.footer')

@yield('script')
</body>
</html>
