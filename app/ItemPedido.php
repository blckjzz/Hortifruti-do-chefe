<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $table = 'item_pedido';
    protected $primaryKey = 'id_item_pedido';
    protected $fillable = ['fk_id_produto', 'fk_id_pedido'];


}
