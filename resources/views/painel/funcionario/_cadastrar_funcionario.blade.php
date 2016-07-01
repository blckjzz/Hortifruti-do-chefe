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
    </div>


    <div class="col-md-3 form-group">
        {!! Form::label('cpf', 'CPF')  !!}
        {!! Form::text('cpf' ,null , ['class' => 'form-control',]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('email', 'E-mail')  !!}
        {!! Form::email('email', null , ['class'=>'form-control',]) !!}
    </div>


    <div class="col-md-3 form-group">
        {!! Form::label('senha', 'Senha')  !!}
        {!! Form::password('senha', array('class' => 'form-control'))  !!}
    </div>
</div>
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::label('data_nascimento', 'Data de Nascimento')  !!}
        {!! Form::date('data_nascimento', null , ['class'=>'form-control',]) !!}
    </div>
    <div class="col-md-2 form-group">
        {!! Form::label('telefone', 'Telefone')  !!}
        {!! Form::text('telefone', null , ['class'=>'form-control',]) !!}
    </div>

</div>

<div class="row">

</div>
{!! Form::close() !!}

