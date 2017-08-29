@extends('layouts.app')
@section('content')
<div class="row">


	{{Form::open(array('method'=>'get'))}}

<hr>

	<div class="col-sm-2 col-offset-1">
        <div class="well sorting">
        	<table>
        		<thead>
        			<td>Event</td>
        			<td>Group</td>
        			<td>Type</td>
        		</thead>

        		<tbody>
	        		@foreach($enums as $enum)
	        		<tr>
	        			<td><strong>{{$enum->id}}:{{ Form::radio('setone_id',$enum->id )}}</strong>
	        			</td>
	        			<td>{{ $enum->level}}</td>
	        			<td>{{ $enum->groupdesc}}</td>
        			</tr>
				 	@endforeach
			 	</tbody>
		 	</table>
		 	<br>
 	{{$events->first()->setone_id}} Event Query<br>


<hr>
		Gender <br>
		{{ Form::label('gender', 'f') }}
		{{ Form::radio('gender', 'm') }}
		{{ Form::label('gender', 'm') }}
		{{ Form::radio('gender', 'f') }}
		{{ Form::label('gender', 'both') }}
		{{ Form::radio('gender', 'x') }}
<hr>
		OrderBy Score<br>
		{{ Form::label('Asc', 'asc') }}
		{{ Form::radio('score', 'asc') }}
		{{ Form::label('Desc', 'desc') }}
		{{ Form::radio('score', 'desc') }}
<hr>

<hr>
		<button class="sorting">Filter</button>

 		{{Form::close()}}

		</div>
	</div>

	<div class="col-md-6 col-offset-1">
		<div class="resultz">
			Results

		<table>
			<thead>
				<tr>
					<td>Id</td>
					<td>Num</td>
					<td>Gender</td>
					<td>Score3</td>
					<td>VisitDate</td>
				</tr>
			</thead>

			<tbody>
			@foreach($events as $event )
			<tr>
				<td>{{$event->setone_id}}</td>
				<td>{{$event->entrynum}}</td>
				<td>{{$event->gender}}</td>
				<td>{{number_format($event->t3,1)}}</td>
				<td>{{$event->visitdate}}</td>

			</tr>
			@endforeach
			</tbody>
			</table>
		</div>
	</div>

</div>


@endsection





