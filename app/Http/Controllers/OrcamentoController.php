<?php

namespace hortifruti\Http\Controllers;

use Illuminate\Http\Request;

use hortifruti\Http\Requests;

class OrcamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
}
