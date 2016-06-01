<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';


    public function tipo()
    {
        return $this->hasMany('hortifruti\TipoProduto', 'fk_tipo_produto','id_tipo_produto');
    }
}
