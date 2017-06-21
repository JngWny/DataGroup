@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>The 180K rows used here are based on these fields</h2></div>

                <div class="panel-body">

                <div class="col-md-6 col-md-offset-2">
                <?php $columns = (Schema::getColumnListing('pat_chgs'));
                sort($columns);?>
                @foreach($columns as $column)
                <ol>
                <h4>{{$column}}</h4>
                </ol>
                @endforeach
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
