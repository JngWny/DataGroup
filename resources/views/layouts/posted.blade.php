<!DOCTYPE html>
<html lang="en">
<title>DataStream @yield('title')</title>


@include('partials._bootstrap')

{!! Html::style('css/posts.css') !!}

<div>
	<body>
    	@yield('content')
	</body>
@yield('scripts')
</div>
 @include('partials._footer')
</html>











