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
        return $this->belongsTo('hortifruti\Cliente','fk_id_cliente');
    }

    //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. books em pivot', 'key ref. author em pivot')
    public function produtos(){
        return $this->belongsToMany('hortifruti\Produto', 'item_pedido', 'fk_id_pedido', 'fk_id_produto')->withPivot('qtd_kg','qtd_caixa','qtd_bandeja','qtd_duzia');
    }
}
