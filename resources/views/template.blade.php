<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'lienusowl blog') }}</title>
    @include('blocks.head')
</head>
<body>
    @include('blocks.header')

    <div class="main-content">
        @yield('content')
    </div>

    @include('blocks.footer')
    @include('blocks.scripts')
</body>
</html>
