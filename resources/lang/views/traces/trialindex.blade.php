@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-sm-2  blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
			<div class="well well-sm">
			 	<ol>
			 	@foreach($trials as $enum)
			 	{{$enum->EventNum}}
			 	@endforeach
			 	</ol>
			</div>
		</div>
	</div>
	<div class="col-md-8 col-offset-1">

	<table class="table table-bordered table-striped table-condensed text-center" >
		<thead>
			<tr>
				<td>Event</td>
				<td>Pnum</td>
				<td>T1</td>
				<td>T2</td>
				<td>T3</td>
			</tr>
		</thead>

		<tbody>
			@foreach($trials as $event)
				<tr>
					<td>{{$event->EventNum}}</td>
					<td>{{$event->EntryNum}}</td>
					<td>{{$event->T1}}</td>
					<td>{{$event->T2}}</td>
					<td>{{$event->T3}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>


	</div>

</div>

@endsection