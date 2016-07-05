<?php

namespace hortifruti\Http\Controllers;

use Illuminate\Http\Request;

use hortifruti\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function viewIndex()
    {
        return view('site.home');
    }

    public function painelHome()
    {
        switch (Auth::user()->cargo->nivel_acesso) {
            case 0:
                return redirect('/painel/funcionario/home');
                break;
            case 1:
                return redirect('/painel/admin/home');
                break;
            case 3:
                return redirect('/painel/gerente/home');
                break;
        }

    }

    public function viewSobre()
    {
        return 'viewSobre';
    }

    public function viewOrcamento()
    {
        return 'viewOrcamento';
    }

    public function viewContato()
    {
        return 'viewContato';
    }

}
