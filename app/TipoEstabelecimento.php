<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class TipoEstabelecimento extends Model
{
    protected $table = 'tipo_estabelecimento';
    protected $primaryKey = 'id_tipo_estabelecimento';
    protected $fillable = ['nome'];

    public function cliente()
    {
        return $this->hasMany('hortifruti\Cliente');
    }
}
