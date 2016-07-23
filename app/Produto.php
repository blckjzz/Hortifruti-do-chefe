<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    protected $fillable =  ['nome', 'ncm', 'valor_unidade', 'valor_kg', 'valor_caixa', 'valor_bandeja','valor_duzia'];


    public function tipo()
    {
        return $this->belongsTo('hortifruti\TipoProduto', 'fk_tipo_produto','id_tipo_produto');
    }

    public function pedidos()
    {
        return $this->belongsToMany('hortifruti\Pedido', 'item_pedido', 'fk_produto', 'fk_pedido')->withPivot('fk_tipo_unidade','quantidade');
    }
}
