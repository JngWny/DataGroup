<!DOCTYPE html>
<html lang="en">
@include('partials._scripts')

{{ Html::style('css/app.css')}}
@yield('stylesheets')
@include('partials._bootstrap')
<head>
<h1 class="text-center text-black">Data Testing</h1>
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
@yield('scripts')
</html>
