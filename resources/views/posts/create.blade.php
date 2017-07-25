@extends('layouts.posted')

@include('partials._nav')

@include('partials._errors')

@section('content')

<div class="row">
  <div class ="col-md-6 col-md-offset-1">
      <h1>Create New Post</h1>
      <hr>

{{ csrf_field() }}
    {!! Form::open(array('route' => 'PostStore')) !!}

        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        </select>

        {{ Form::label('tags', 'Tags:') }}
        <select class="form-control select2-multi" name="tags[]" multiple="multiple">
          @foreach($tags as $tag)
            <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
          @endforeach

        </select>

        {{ Form::label('body', "Post Body:") }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}



        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
      {!! Form::close() !!}
      </div>

  <div class="col-sm-3 offset-sm-1 blog-sidebar">
    @include ('posts.sidebar')
  </div>
</div>
@endsection



