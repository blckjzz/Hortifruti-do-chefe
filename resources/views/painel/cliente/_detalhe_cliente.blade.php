{!!  Form::open(array('action' => array('ClienteController@update',$cliente->id_cliente), 'class'=>'form')) !!}
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::submit('Atualizar Cadastro', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo')  !!}
            {!! Form::select('tipo_estabelecimento', $tipoEstabelecimento , null , ['class'=> 'form-control',]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('nome', 'Nome')  !!}
        {!! Form::text('nome_cliente', $cliente->nome_cliente , ['class'=>'form-control','id'=>'nome_cliente']) !!}
    </div>


    <div class="col-md-3 form-group">
        {!! Form::label('cnpj', 'CNPJ')  !!}
        {!! Form::text('cnpj' ,$cliente->cnpj , ['class' => 'form-control',]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('telefone', 'Telefone')  !!}
        {!! Form::text('telefone', $cliente->telefone , ['class'=>'form-control',]) !!}
    </div>

    <div class="col-md-2 form-group">
        {!! Form::label('logradouro', 'Logradouro')  !!}
        {!! Form::text('logradouro' , $cliente->logradouro , ['class' => 'form-control',]) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('numero', 'Numero')  !!}
        {!! Form::text('numero' , $cliente->numero , ['class' => 'form-control',]) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('ponto_referencia', 'Ponto de referência')  !!}
        {!! Form::textarea('ponto_referencia', $cliente->ponto_referencia , ['class'=>'form-control','rows' => 4]) !!}
    </div>
</div>
{!! Form::close() !!}



