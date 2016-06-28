@extends('layouts.admin_panel')
@section('title',$title)
@section('content')
       @if(Auth::user()->is_admin)
       <div class="row text-center pad-top">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
                     <div class="div-square">
                            <a href="#">
                                   <i class="fa fa-money fa-5x"></i>
                                   <h4>Orçamentos</h4>
                            </a>
                     </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
                     <div class="div-square">
                            <a href="{{ action('FuncionarioController@home') }}">
                                   <i class="fa  fa-wrench fa-5x"></i>
                                   <h4>Funcionários</h4>
                            </a>
                     </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
                     <div class="div-square">
                            <a href="#">
                                   <i class="fa fa-key fa-5x"></i>
                                   <h4>Administração </h4>
                            </a>
                     </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7">
                     <div class="div-square">
                            <a href="#">
                                   <i class="fa fa-comments-o fa-5x"></i>
                                   <h4>Mensagens</h4>
                            </a>
                     </div>


              </div>
       </div>
       @endif
@endsection