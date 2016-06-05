@extends('painel.admin_panel')
@section('title',$title)
@section('content')
    <div class="row">
        <div class="col-md-2 form-group">
            <a href="{{ action('ProdutoController@edit',array($produto->id_produto)) }}">
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            </a>
        </div>
        <div class="col-md-2 form-group">
            <a href="{{ action('ProdutoController@destroy',array($produto->id_produto)) }}">
                {!! Form::submit('Deletar',['class' => 'btn btn-danger']) !!}
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('tipo', 'Tipo')  !!}
                {!! Form::select('tipo', $tiposProduto , null , ['class'=> 'form-control','disabled']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('nome', 'Nome')  !!}
            {!! Form::text('nome', $produto->nome , ['class'=>'form-control','disabled']) !!}
        </div>


        <div class="col-md-3 form-group">
            {!! Form::label('ncm', 'Ncm')  !!}
            {!! Form::text('ncm' , $produto->ncm , ['class' => 'form-control','disabled']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('valor_unidade', 'Valor Unidade')  !!}
            {!! Form::text('valor_unidade' , $produto->valor_unidade , ['class' => 'form-control','disabled']) !!}
        </div>
        <div class="col-md-3 form-group">
            {!! Form::label('valor_kg', 'Valor Quilo')  !!}
            {!! Form::text('valor_kg' , $produto->valor_kg , ['class' => 'form-control','disabled']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('valor_bandeja', 'Valor Bandeja')  !!}
            {!! Form::text('valor_bandeja' , $produto->valor_bandeja , ['class' => 'form-control','disabled']) !!}
        </div>

        <div class="col-md-3 form-group">
            {!! Form::label('valor_duzia', 'Valor Duzia')  !!}
            {!! Form::text('valor_duzia' , $produto->valor_duzia , ['class' => 'form-control','disabled']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('valor_caixa', 'Valor Caixa')  !!}
            {!! Form::text('valor_caixa' , $produto->valor_caixa , ['class' => 'form-control','disabled']) !!}
        </div>
    </div>
@endsection