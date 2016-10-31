<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href={{url('css/church.css')}} rel="stylesheet">
    <link href={{url("libs/bootstrap/dist/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{url("libs/font-awesome/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">

    <!-- Scripts -->
    <!--<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>-->
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" style="background-color: darkblue;height: 70px;margin-bottom: 0%">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" style="padding: 0px;margin: 0px">
                <img src="{{url('images/finalkfc.png')}}" height="100px" width="auto" alt="logo"></a>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="background-color: darkblue">
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a style="color: white" href="{{ url('/') }}">Home</a></li>
                <li><a style="color: white" href="{{ url('administration') }}">Administration</a></li>
                <li><a style="color: white" href="{{ url('services') }}">Services</a></li>
                <li><a style="color: white" href="{{ url('/') }}">Announcements</a></li>
                <li><a style="color: white" href="{{ url('/') }}">Events</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a style="color: white" href="{{ url('/login') }}">Admin Portal</a></li>
                    <!--
                        <li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

    <div class="row" style="font-family: 'Abhaya Libre', serif;width: 100%">
        @yield('content')
    </div>


            <div class="col-md-10 col-md-offset-1" style="text-align: center">
                <hr>
                ©Kakamega Friends' Church, 2016
            </div>
            <div class="col-md-10 col-md-offset-1" style="text-align: center">
                Designed and Developed By Makamu Evans | <a href="mailto:makamuevans@gmail.com">makamuevans@gmail.com</a>
            </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src={{url("libs/jquery/dist/jquery.min.js")}}></script>
    <script src={{url("libs/bootstrap/dist/js/bootstrap.min.js")}}></script>
</body>
</html>
