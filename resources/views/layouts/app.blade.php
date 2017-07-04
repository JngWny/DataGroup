<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._header')
</head>
<body>
    @include('partials._nav')
    <div id="app">

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
