@extends('layouts.posted')
<head>
<div class="blog-header ">
  <div class="container text-align:center">
    <h1 class="blog-title">Comments and Requests</h1>
    <p class="lead blog-description">Feel free to share your thoughts</p>

  </div>
</div>

</head>
@include('partials._nav')

@section('content')
  <div class="row"><!-- blog-main -->
    <div class="col-sm-6 col-md-offset-1 ">
<h2 class="text-align:center">Click to read entire content and then leave a comment</h2>
      @foreach ($posts as $post)

      @include('posts.post')

      @endforeach
    </div><!-- end blog-main -->
    @include('posts.nav')
    <div class="col-sm-4"><!-- sidebar. -->
      @include('posts.sidebar')
    </div><!-- SideBar -->

  </div><!-- /.row-->


@endsection


