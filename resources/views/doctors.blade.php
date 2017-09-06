@extends('layouts.app')

@section('content')
<h1 class="text-center">Doctors Count Unique MRN</h1>

<div class="row">
    <div class="col-md-4 col-md-offset-2">
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
    <div class="col-md-3 well">
    <h3>Why is there an entry for Fudd,Elmer J?</h3>
    <hr>
    <h4>Maybe he owns a mansion and a yacht!</h4>
    <hr>
    <h4>Or is there another physician?</h4>
    <hr>
    <h4>Or is this entry a mistake?</h4>
    </div>

</div>


@endsection
