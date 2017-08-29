@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-1 col-offset-1">
        <div class="well well-sm">
        	<ul>
        		@foreach($enums as $enum)
        		<li>
        			<strong>{{$enum->id}}</strong><input name="eventnum" type="radio" value = {{$enum->id}} >
				</li>
			 	@endforeach
		 	</ul>

		</div>
	</div>

	<div class="col-md-7 col-offset-1">

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