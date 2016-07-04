{!!  Form::open(array('action' => array('FuncionarioController@create'), 'class'=>'form')) !!}
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('tipo', 'Cargo')  !!}
            {!! Form::select('cargo', $cargo , null , ['class'=> 'form-control','placeholder' => 'Selecione']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('nome', 'Nome')  !!}
        {!! Form::text('nome', null , ['class'=>'form-control',]) !!}
        @if ($errors->has('nome'))
            <span class="help-block">
        <strong>{{ $errors->first('nome') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-md-3 form-group">
        {!! Form::label('cpf', 'CPF')  !!}
        {!! Form::text('cpf' ,null , ['class' => 'form-control',]) !!}
        @if ($errors->has('cpf'))
            <span class="help-block">
        <strong>{{ $errors->first('cpf') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="row">

    <div class="col-md-6 form-group">
        {!! Form::label('email', 'E-mail')  !!}
        {!! Form::email('email', null , ['class'=>'form-control',]) !!}
        @if ($errors->has('email'))
            <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('senha', 'Senha')  !!}
        {!! Form::password('senha', array('class' => 'form-control'))  !!}
        @if ($errors->has('senha'))
            <span class="help-block">
        <strong>{{ $errors->first('senha') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-md-3 form-group">
        {!! Form::label('confirmacao_senha', 'Confirmação de Senha')  !!}
        {!! Form::password('senha_confirmation', array('class' => 'form-control'))  !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('data_nascimento', 'Data de Nascimento')  !!}
        {!! Form::text('data_nascimento', null , ['class'=>'form-control',]) !!}
        @if ($errors->has('data_nascimento'))
            <span class="help-block">
        <strong>{{ $errors->first('data_nascimento') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('telefone', 'Telefone')  !!}
        {!! Form::text('telefone', null , ['class'=>'form-control',]) !!}
        @if ($errors->has('telefone'))
            <span class="help-block">
        <strong>{{ $errors->first('telefone') }}</strong>
            </span>
        @endif
    </div>

</div>

<div class="row">

</div>
{!! Form::close() !!}

