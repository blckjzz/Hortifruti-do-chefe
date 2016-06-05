{!!  Form::open(array('action' => array('ProdutoController@create'), 'class'=>'form')) !!}
<div class="row">
    <div class="col-md-2 form-group">
        {!! Form::submit('Adicionar produto', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo')  !!}
            {!! Form::select('tipo', $tiposProduto , null , ['class'=> 'form-control','placeholder' => '----Selecione---']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('nome', 'Nome')  !!}
        {!! Form::text('nome', $produto->nome , ['class'=>'form-control',]) !!}
    </div>


    <div class="col-md-3 form-group">
        {!! Form::label('ncm', 'Ncm')  !!}
        {!! Form::text('ncm' , $produto->ncm , ['class' => 'form-control',]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('valor_unidade', 'Valor Unidade')  !!}
        {!! Form::text('valor_unidade' , $produto->valor_unidade , ['class' => 'form-control valor','id' => 'valor']) !!}
    </div>
    <div class="col-md-3 form-group">
        {!! Form::label('valor_kg', 'Valor Quilo')  !!}
        {!! Form::text('valor_kg' , $produto->valor_kg , ['class' => 'form-control valor',]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('valor_bandeja', 'Valor Bandeja')  !!}
        {!! Form::text('valor_bandeja' , $produto->valor_bandeja , ['class' => 'form-control valor',]) !!}
    </div>

    <div class="col-md-3 form-group">
        {!! Form::label('valor_duzia', 'Valor Duzia')  !!}
        {!! Form::text('valor_duzia' , $produto->valor_duzia , ['class' => 'form-control valor',]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3 form-group">
        {!! Form::label('valor_caixa', 'Valor Caixa')  !!}
        {!! Form::text('valor_caixa' , $produto->valor_caixa , ['class' => 'form-control valor',]) !!}
    </div>
</div>
{!! Form::close() !!}