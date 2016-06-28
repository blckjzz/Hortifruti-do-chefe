<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a href="{{ action('SiteController@painelHome') }}"><i class="fa fa-home"></i> Página Inicial
                </a>
            </li>
            <li>
                <a href=" {{ action('PedidoController@home') }} "><i class="fa fa-shopping-cart"></i>Pedidos</a>
            </li>
            <li>
                <a href=" {{ action('ProdutoController@home') }} "><i class="fa fa-table"></i>Produtos</a>
            </li>
            <li>
                <a href="{{ action('ClienteController@home') }}"><i class="fa fa-user-md "></i>Clientes</a>
            </li>
        </ul>
    </div>
</nav>