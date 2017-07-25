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


<hr>
    <div class="comments">
    @include('partials._errors')
      <ul class="list-group">
        @foreach ($post->comments as $comment )
          <li class="list-group-item">
            {{ $comment->body }}
            <strong>
              {{ $comment->created_at->diffForHumans() }}:
            </strong>
          </li>
        @endforeach
      </ul>
    </div><!-- comments end-->
<hr><!-- create comments start here -->
    <div class="card">
      <div class="card-block">


        <form method = "POST" action="/posts/{{ $post->id }}/comments">
          {{ csrf_field() }}

          <div class="form-group">
          <textarea name="body" placeholder="your text" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
          </div>
        </form>

      </div>


    </div><!-- /posts end here-->
  </div><!-- /col1 end here-->










    <div class="col-sm-3 offset-sm-1 blog-sidebar">
      @include ('partials._sidebarposts')
    </div>
</div>



@endsection