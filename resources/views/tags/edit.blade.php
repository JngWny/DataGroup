@extends('layouts.posted')

@section('title', "| Edit Tag")

@section('content')

	{{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}

		{{ Form::label('tagname', "Title:") }}
		{{ Form::text('tagname', null, ['class' => 'form-control']) }}

		{{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
	{{ Form::close() }}

@endsection