<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class TipoUnidade extends Model
{
    protected $table = 'tipo_unidade';
    protected $primaryKey = 'id_tipo_unidade';
    protected $fillable = ['descricao_unidade'];

  /*  public function itemPedido()
    {
        return $this->hasMany('\hortifruti\ItemPedido','fk_unidade', 'id_tipo_unidade');
    }
    */
    public function produtos()
    {
        return $this->belongsToMany('hortifruti\Produto', 'item_pedido', 'fk_pedido', 'fk_produto')->withPivot('fk_tipo_unidade,quantidade');
    }
}

