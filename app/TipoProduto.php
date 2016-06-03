<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    protected $table = 'tipo_produto';
    protected $primaryKey = 'id_tipo_produto';

    public function produto()
    {
        return $this->hasMany('hortifruti\Produto');
    }
}
