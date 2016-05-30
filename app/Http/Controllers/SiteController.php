<?php

namespace hortifruti\Http\Controllers;

use Illuminate\Http\Request;

use hortifruti\Http\Requests;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');
    }
}
