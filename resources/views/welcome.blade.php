<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Streams</title>
        <!-- Styles -->
        @include('partials._welcomeset')
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>

<div class="row">
    <hr>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3>
                <div class="panel-heading">
                 <br><br>
                </div>
                </h3>

                <div class="panel-body text-center">
                    <hr>
                    <h2>Wish your data was a click away?</h2>
                </div>
            </div>
        </div>
</div>

<div class="row">

        <div class="col-md-8 col-md-offset-2">



            <div class="content">
                <div class="title m-b-md">
                    <h3>This could be your data set</h3>
                </div>
                <h1>
                <div class="links">
                    <a href="http://www.icd10data.com/" target="_blank">ICD 10</a>
                    <a href="https://commerce.health.state.ny.us/public/hcs_login.html" target="_blank">HCS</a>
                    <a href="https://weather.com/" target="_blank">Weather</a>
                    <a href="https://www.health.ny.gov/" target="_blank">NYSDOH</a>
                    <a href="https://www.wikipedia.org/" target="_blank">WikiPedia</a>
                </div>
                </h1>
            </div>
        </div>
</div>
    </body>
</html>
