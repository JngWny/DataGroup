@extends('layouts.posted')

@include('partials._nav')

@include('partials._errors')

@section('content')

<div class="row">
  <div class ="col-md-6 col-md-offset-1">
      <h1>Create New Post</h1>
      <hr>



<form method = "POST" action = "/posts">
{{ csrf_field() }}
    <div class="form-group">

      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="body" name="body" class="form-control"></textarea>
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  </div>
</form>
<div class="col-sm-3 offset-sm-1 blog-sidebar">
  @include ('partials._sidebarposts')
</div>
@endsection



