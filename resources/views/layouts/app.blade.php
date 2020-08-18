<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('title','dashboard admin')</title>

    <!--    <link rel="canonical" href="album.htm">-->

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/dist/css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('/dist/css/website.css')}}" rel="stylesheet">



    <style>
        .card{
            border-radius: 25px;
            background-image: url('images/ques4.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('/dist/css/dashboard.css')}}" rel="stylesheet">
</head>
@yield('header')

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="" href="#"><img style="width:130px;height:60px;" src="{{asset('images/azhar.jpeg')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">تسجيل دخول</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">عضويه جديده</a>
                </li>
                @endif
                @else
              
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                
                @endguest


            </ul>
        </div>
    </nav>


    @yield('content')


    <script src="../../../../code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset("/dist/js/jquery.slim.min.js")}}"><\/script>')
    </script>
    <script src="{{asset('/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/dist/js/dashboard.js')}}"></script>
</body>

</html>