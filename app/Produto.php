<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';


    public function tipo()
    {
        return $this->belongsTo('hortifruti\TipoProduto', 'fk_tipo_produto','id_tipo_produto');
    }
}
