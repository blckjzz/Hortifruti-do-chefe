<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $table = 'item_pedido';
    protected $primaryKey = 'id_item_pedido';
    protected $fillable = ['fk_produto', 'fk_pedido', 'fk_tipo_unidade', 'quantidade'];

    /*
    public function tipoUnidade()
    {
        return $this->belongsTo('\hortifruti\TipoUnidade','fk_unidade','id_unidade');
    }
    */

}
