<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $fillable = ['fk_id_cliente'];

    public function cliente()
    {
        return $this->hasMany('hortifruti\Cliente','fk_id_cliente');
    }

    public function produtos(){
        return $this->belongsToMany('hortifruti\Produto', 'item_pedido', 'fk_id_pedido', 'fk_id_produto');
    }

}
