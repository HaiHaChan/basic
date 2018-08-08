<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.admin.style')
        @section('style')
            @show
</head>
<body>
    
    @include('layouts.admin.header')
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>
    @include('layouts.admin.footer')
    @include('layouts.admin.script')
        @section('script')
            @show

</body>
</html>
