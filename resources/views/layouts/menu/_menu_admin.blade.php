<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a href="{{ action('SiteController@painelHome') }}"><i class="circular home icon"></i></i> Página Inicial
                </a>
            </li>
            <li>
                <a href=" {{ action('PedidoController@home') }} "><i class="circular cart icon"></i>
                    </i>Pedidos</a>
            </li>
            <li>
                <a href=" {{ action('ProdutoController@home') }} "><i class="circular table icon"></i></i>Produtos</a>
            </li>
            <li>
                <a href="{{ action('ClienteController@home') }}"><i class="circular users icon"></i>Clientes</a>
            </li>
        </ul>
    </div>
</nav>