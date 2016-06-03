@extends('painel.app')
@section('title', $title)
@section('content')
    {!! Form::open(array('action' => 'ProdutoController@store', 'class'=>'form')) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('tipo', 'Tipo')  !!}
                {!! Form::select('tipo', $tiposProduto, null , ['class'=> 'form-control','placeholder' => 'Selecione']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('nome', 'Nome')  !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>


        <div class="col-md-3 form-group">
            {!! Form::label('ncm', 'Ncm')  !!}
            {!! Form::text('ncm' , null , ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('valor_unidade', 'Valor Unidade')  !!}
            {!! Form::text('valor_unidade' , null , ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-3 form-group">
            {!! Form::label('valor_kg', 'Valor Quilo')  !!}
            {!! Form::text('valor_kg' , null , ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('valor_bandeja', 'Valor Bandeja')  !!}
            {!! Form::text('valor_bandeja' , null , ['class' => 'form-control']) !!}
        </div>

        <div class="col-md-3 form-group">
            {!! Form::label('valor_duzia', 'Valor Duzia')  !!}
            {!! Form::text('valor_duzia' , null , ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 form-group">
            {!! Form::label('valor_caixa', 'Valor Caixa')  !!}
            {!! Form::text('valor_caixa' , null , ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 form-group">
            {!! Form::submit('Adicionar', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@endsection