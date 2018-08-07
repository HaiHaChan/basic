<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.user.style')
        @section('style')
            @show
</head>
<body>
    
    @include('layouts.user.header')
    @yield('content')
    @include('layouts.user.footer')
    @include('layouts.user.script')
        @section('script')
            @show

</body>
</html>
