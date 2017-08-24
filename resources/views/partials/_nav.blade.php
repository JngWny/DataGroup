<nav class="navbar navbar-default navbar-static-top">

        <div class="navbar-header">
            <div class="btn-group">

                <a href="{{route('PostList')}}" class ="btn btn-info">Comments</a>
                <a href="{{route('Welcome')}}" class ="btn btn-secondary">Welcome</a>
                <a href="{{route('home')}}" class="btn btn-warning">Home</a>
                <a href="{{route('DrLoad')}}" class="btn btn-primary">DrsMrn</a>
                <a href="{{route('BadData')}}" class="btn btn-danger">RawData</a>
                <a href="{{route('DrTotals')}}" class="btn btn-success">DrsTotalAmts</a>
                <a href="{{route('Trials')}}" class ="btn btn-info">Trials</a>
                <a href="{{route('TrialSort')}}" class ="btn btn-danger">TrialSort</a>

            </div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

</nav>