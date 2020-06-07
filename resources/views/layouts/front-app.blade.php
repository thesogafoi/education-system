<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    
<div id="app">
@yield('content')
</div>

@yield('script')
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>