<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <!--Dropdown button -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if ($activePage == 'index')
                <a class="navbar-brand" style="background-color: #E1E1E1" href="{{url('/')}}">CS3233 Ranklist 2017</a>
            @else
                <a class="navbar-brand" href="{{url('/')}}">CS3233 Ranklist 2017</a>
            @endif
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if ($activePage == 'detail')
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">{{$name}}</a></li>
                </ul>
            @elseif ($activePage == 'edit')
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Edit mode</a></li>
                </ul>
            @endif
            <ul class="nav navbar-nav">
                @if ($activePage == 'help')
                    <li class="active"><a href="{{ url('help') }}">Help</a></li>
                @else
                    <li><a href="{{ url('help') }}">Help</a></li>
                @endif
            </ul>
            @if ($isLoggedIn && $activePage == 'create')
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('create') }}">Create new student</a></li>
                </ul>
            @elseif ($isLoggedIn)
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('create') }}">Create new student</a></li>
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
            @if ($activePage == 'authpage')
                <li class="active"><a href="{{url('login')}}">{{ $isLoggedIn ? 'Sign Out' : 'Sign In'}}</a></li>

            @else
                <li><a href="{{url('login')}}">{{ $isLoggedIn ? 'Sign Out' : 'Sign In'}}</a></li>
            @endif
                <li class="dropdown"></li>
            </ul>
        </div>
    </div>
</nav>
