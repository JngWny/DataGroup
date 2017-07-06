@if (count($errors))
	<div class="row">
		<div class="col-sm-4 col-md-offset-4)
			<div class="container">
				<div class="alert alert-danger">

					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>

				</div>
			</div>
	</div>

@endif