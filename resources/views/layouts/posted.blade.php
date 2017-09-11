<!DOCTYPE html>
<html lang="en">
<head>
	<title>DataStream @yield('title')</title>
	@yield('head')
	@include('partials._scripts')
	@include('partials._bootstrap')
	{!! Html::style('css/posts.css') !!}
</head>
<body>
	<div>
    	@yield('content')
    </div>
	@include('partials._footer')
</body>
@yield('scripts')
</html>











