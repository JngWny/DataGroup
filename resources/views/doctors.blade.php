@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-1">

            <table class="table table-bordered table-striped table-condensed" >

                    <thead>
                    <tr>
                        <td>Doctor</td>
                        <td>MedRecNum</td>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($doctors as $doctor)

                    <tr>
                        <td>{{ $doctor->AdmDr }}</td>
                        <td>{{ $doctor->MRN }}</td>

                    </tr>

                    @endforeach
                </tbody>
            </table>

    </div>
</div>
</div>
<div class="col-md-12 col-md-offset-4">
<?php echo $doctors->render(); ?>
</div>
@endsection