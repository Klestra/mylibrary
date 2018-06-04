<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>{{ config('app.name') }} : @yield('title')</title>
   <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />

   <script src="main.js"></script>
</head>
<body>
    <header>
        @include('parts/header')
    </header>
    <main>
    <aside>
        @include('parts/aside')
    </aside>
    <section class="main-content">
        @yield('content')
    <footer>    
        @include('parts/footer')
    </footer>
    </section>
    </main>
</body>
</html>