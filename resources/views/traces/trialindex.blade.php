@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-2  blog-sidebar">
        <div class="well well-sm">
			<table class="table table-bordered table-striped table-condensed text-center" >
				<thead>
					<td>Event</td>
					<td>Group</td>
					<td>Level</td>
				</thead>

			 	<tbody>
			 		@foreach($enums as $enum)
			 			<tr>
			 				<td><strong>{{$enum->id}}</strong></td>
			 				<td>{{ $enum->groupdesc}}</td>
			 				<td>{{ $enum->level}}</td>
		 				</tr>
			 		@endforeach
			 	</tbody>
		 	</table>
		</div>
	</div>

	<div class="col-md-8 col-offset-1">

	<table class="table table-bordered table-striped table-condensed text-center" >
		<thead>
			<tr>
				<td>Event</td>
				<td>Number</td>
				<td>Gender</td>
				<td>Time1</td>
				<td>Time2</td>
				<td>Time3</td>
			</tr>
		</thead>

		<tbody>
			@foreach($events as $event)
				<tr>
					<td>{{$event->setone_id}}</td>
					<td>{{$event->entrynum}}</td>
					<td>{{$event->gender}}</td>
					<td>{{$event->t1}}</td>
					<td>{{$event->t2}}</td>
					<td>{{$event->t3}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
<nav class="blog-pagination">
<?php echo $events->render(); ?>
</nav>
@endsection