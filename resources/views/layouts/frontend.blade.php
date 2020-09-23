<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        title page - @yield('title')
    </title>

    @include('partials.styles')
</head>
<body>
@yield('content')

@include('partials.scripts')
</body>
</html>
