{!!  Form::open(array('action' => array('ClienteController@create'), 'class'=>'form')) !!}
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo')  !!}
            {!! Form::select('tipo_estabelecimento', $tipoEstabelecimento , null , ['class'=> 'form-control','placeholder' => 'Selecione']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('nome', 'Nome')  !!}
        {!! Form::text('nome_cliente', null , ['class'=>'form-control','id'=>'nome_cliente']) !!}
    </div>


    <div class="col-md-3 form-group">
        {!! Form::label('cnpj', 'CNPJ')  !!}
        {!! Form::text('cnpj' ,null , ['class' => 'form-control',]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('telefone', 'Telefone')  !!}
        {!! Form::text('telefone', null , ['class'=>'form-control',]) !!}
    </div>

    <div class="col-md-2 form-group">
        {!! Form::label('logradouro', 'Logradouro')  !!}
        {!! Form::text('logradouro' , null , ['class' => 'form-control',]) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('numero', 'Numero')  !!}
        {!! Form::text('numero' , null , ['class' => 'form-control',]) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('ponto_referencia', 'Ponto de referência')  !!}
        {!! Form::textarea('ponto_referencia', null , ['class'=>'form-control','rows' => 4]) !!}
    </div>
</div>
{!! Form::close() !!}

