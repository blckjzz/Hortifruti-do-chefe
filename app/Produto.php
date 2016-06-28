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
        return $this->belongsToMany('hortifruti\Pedido', 'item_pedido', 'fk_id_produto', 'fk_id_pedido')->withPivot('qtd_kg','qtd_caixa','qtd_bandeja','qtd_duzia');
    }
}
