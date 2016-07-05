@if(Auth::user()->cargo->nivel_acesso == 0)
    @include('layouts.menu._menu_funcionario')
@elseif(Auth::user()->cargo->nivel_acesso == 1)
    @include('layouts.menu._menu_admin')
@elseif(Auth::user()->cargo->nivel_acesso == 3)
    @include('layouts.menu._menu_funcionario')
@endif
