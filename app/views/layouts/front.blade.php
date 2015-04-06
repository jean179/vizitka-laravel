<!DOCTYPE HTML>
<html>
<head>
    <title>Nova</title>
    @include('layouts.partials.head')
</head>
<body>
@include('layouts.partials.header')
@yield('header')
@yield('content')   
@include('layouts.partials.footer')
@include('layouts.partials.scripts')
</body>
</html>

