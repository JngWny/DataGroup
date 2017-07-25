@extends('layouts.posted')
<head>
<div class="blog-header ">
  <div class="container text-align:center">
    <h1 class="blog-title">Comments and Requests</h1>
    <p class="lead blog-description">Feel free to share your thoughts</p>
  </div>
</div>
@include('partials._postscript')
@include('partials._nav')
</head>

@section('content')
  <div class="row">
    <div class="col-sm-8 blog-main">

      @foreach ($posts as $post)

      @include('posts.post')

      @endforeach

      @include('posts.nav')

    </div><!-- /.blog-main -->

    <div class="col-sm-3 offset-sm-1 blog-sidebar">
    @include ('partials._sidebarposts')
    </div>

  </div><!-- /.row-->


@endsection


</html>
