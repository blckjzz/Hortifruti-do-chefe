<div class="row">
    <div class="col-md-7 col-sm-offset-1">
        <div class="row">
            <div class="col-md-3">
                {!! Form::submit('Confirmar pedido', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        <div id="produtos" class="row">
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                       <th>Produto</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtosSelecionados as $p)

                    @endforeach
                </table>
            </div>
        </div>