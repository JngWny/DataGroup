@extends('layouts.app')

@section('content')
<h1 class="text-center">Doctors Count Unique MRN</h1>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <table class="table table-striped table-condensed" >
            <thead>
                <tr>
                    <td>Doctor</td>
                    <td>MedRecNum Count</td>
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


@endsection
