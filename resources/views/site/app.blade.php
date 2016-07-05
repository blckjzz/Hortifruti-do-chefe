<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hortifruti do Chef, Onde o chefe é você</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="{{  asset('plugins/semantic-ui/components/icon.min.css') }}">
    <link rel="stylesheet" href="{{  asset('plugins/semantic-ui/components/button.min.css') }}">


{{--<link rel="stylesheet" href="{{ URL::asset('fullpage/javascript.fullPage.css') }}">--}}


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="site">

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
            <a class="navbar-brand" href="{{ url('/') }}">Hortifruti do cheff</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a href="/">Inicio</a>
                </li>
                <li>
                    <a href="">Sobre o cheff</a>
                </li>
                <li>
                    <a href="{{ action('SiteController@viewOrcamento') }}">Solicite seu orçamento</a>
                </li>
                <li>
                    <a href="#contato">Contato</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="background-image"></div>
<div id="bg-blur">
    <div id="fullpage" class="text-center">
        <div class="section">
            @include('site._section_home')
        </div>

        <div class="section">
            @include('site._section_sobre')
        </div>
        <div class="section">
            @include('site._section_orcamento')
        </div>
        <div class="section">
            @include('site._section_contato')
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('fullpage/javascript.fullPage.js') }}"></script>
<script>
    fullpage.initialize('#fullpage', {
        anchors: ['inicio', 'sobre', 'orcamento', 'contato'],
        menu: '#menu',
        css3: true
    });
</script>
</div>

</body>

</html>
