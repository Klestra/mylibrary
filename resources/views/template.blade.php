<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>{{ config('app.name') }} : @yield('title')</title>
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <script src="main.js"></script>
</head>
<body>
    @include('parts/header')
    @yield('content')
    <footer>
    </footer>
</body>
</html>
