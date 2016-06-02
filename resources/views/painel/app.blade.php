<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hortifruti do Cheff - Onde o chefe é você</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css')}} ">


    {{--<link rel="stylesheet" href="{{ URL::asset('fullpage/javascript.fullPage.css') }}">--}}


            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Hortifruti do cheff - Administração</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                {{--<li>--}}
                    {{--<a href="">Sobre o Chefe</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="">Solicite seu Orçamento</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="">Contato</a>--}}
                {{--</li>--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Entrar</a></li>
                    {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ action('Auth\AuthController@logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<div class="container">
    @include('painel._message')
    @yield('content')
</div>
</body>

</html>



