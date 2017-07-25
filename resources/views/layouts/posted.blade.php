<!DOCTYPE html>
<html lang="en">
@include('partials._scripts')
@include('partials._bootstrap')
{{ Html::style('css/posts.css')}}
<div>
	<body>
    	@yield('content')
	</body>
</div>
 @include('partials._footer')
</html>











