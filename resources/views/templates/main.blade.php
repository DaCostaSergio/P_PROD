<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    @yield('script_includes')
    <title>@yield('title', 'P_Prod')</title>
</head>
<body>
    @include('includes/header')
    @yield('content')
    @yield('scripts')
</body>
</html>