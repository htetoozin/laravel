    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#navbar" aria-expanded="false"
                aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">My Sample Project</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle"
                    data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Content <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/widget">Widgets</a></li>
                    </ul>
                </li>
                @if (Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"
                    data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/logout"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            <li><img class="circ" src="{{ Gravatar::get(Auth::user()->email)  }}"></li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            <li>
                <a href="/auth/facebook">
                    <i class="fa fa-facebook"></i>&nbsp;&nbsp; Sign in </a>
            </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>