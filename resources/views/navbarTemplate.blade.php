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
            <a class="navbar-brand" href="{{url('/')}}">CS3233 Ranklist 2017</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('help') }}">Help</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('login')}}">{{ $loginState }}</a></li>
                <li class="dropdown"></li>
            </ul>
        </div>
    </div>
</nav>