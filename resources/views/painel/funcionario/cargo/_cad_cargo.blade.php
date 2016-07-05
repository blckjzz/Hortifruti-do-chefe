{!!  Form::open(array('action' => array('CargoController@store'), 'class'=>'form')) !!}
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('nome', 'Nome')  !!}
        {!! Form::text('nome', null , ['class'=>'form-control',]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('nivel_acesso','Nivel de acesso')  !!}
        {!! Form::select('nivel_acesso',array('1' => 'Administrador','0' => 'Funcionario Comum','2' => 'Cargo de Gerência') , null, ['class'=>'form-control','placeholder' => 'Selecione']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6 form-group">
        {!! Form::label('descricao', 'Descrição')  !!}
        {!! Form::textarea('descricao', null , ['class'=>'form-control','rows' => 2]) !!}
    </div>
</div>
{!! Form::close() !!}

