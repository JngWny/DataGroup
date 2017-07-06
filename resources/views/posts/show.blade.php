@extends('layouts.posted')
<head>
<div class="blog-header ">
  <div class="container text-align:center">
    <h1 class="blog-title">Comments and Requests</h1>
    <p class="lead blog-description">Feel free to share your thoughts</p>
  </div>
</head>


</head>
@include('partials._nav')
@section('content')
<div class="row">
		<div class="col-sm-8 blog-main">
	<h1> {{ $post->title }} </h1>
			<hr>
			{{ $post->body}}
		</div>



    <div class="col-sm-3 offset-sm-1 blog-sidebar">
    @include ('partials._sidebarposts')
    </div>
  </div>



@endsection