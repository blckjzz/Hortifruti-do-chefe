<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Hortifruti do Cheff - Administração </title>
    <link href="../../admin-panel/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="../../admin-panel/assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="../../admin-panel/assets/css/custom.css" rel="stylesheet"/>
</head>
<body>


<div id="wrapper">
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
                <a class="navbar-brand" href="{{ url('/painel') }}">Hortifruti do cheff - Administração</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @if(Auth::user())
                    <ul class="nav navbar-nav">

                        {{--<li>--}}
                        {{--<a href="{{ action('ProdutoController@listarProdutos') }}">Produtos</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href=""></a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="">Contato</a>--}}
                        {{--</li>--}}
                    </ul>
                    @endif

                            <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/painel/entrar') }}">Entrar</a></li>
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ action('Auth\AuthController@logout') }}"><i
                                                    class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">


                <li>
                    <a href="{{ action('SiteController@painelHome') }}"><i class="fa fa-desktop "></i> Página Inicial
                    </a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-user-md "></i>Verificar pedidos</a>
                </li>

                <li>
                    <a href="{{ action('ProdutoController@listarProdutos') }}"><i class="fa fa-table "></i>Listagem de
                        Produtos </a>
                </li>
                <li>
                    <a href="{{ action('ProdutoController@create') }}"><i class="fa fa-plus-circle "></i>Adicionar
                        Produto </a>
                </li>
                <li>
                    <a href="{{ action('Auth\AuthController@showRegistrationForm') }}"><i class="fa fa-user-md "></i>Cadastrar
                        Usuário</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        @yield('title')
                    </h1>
                    @include('painel._message')
                    @include('errors.list')


                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>
            @yield('content')
                    <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12">
            &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"
                                                       target="_blank">www.binarytheme.com</a>
        </div>
    </div>
</div>


<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{  asset('admin-panel/assets/js/jquery-1.10.2.js') }}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{  asset('admin-panel/assets/js/bootstrap.min.js') }}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{  asset('admin-panel/assets/js/custom.js') }}"></script>

<!--vue js -->
<script src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('/js/app.js')}}"></script>
<script src="{{ asset('js/jquery.maskMoney.js')}}"></script>

<!--SCRIPT FORMATAR CAMPOS COM CLASSE .VALOR-->
<script type="text/javascript">$(".valor").maskMoney({prefix:'R$ ',
        allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
</script>

</body>
</html>
