<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    protected $primarykey = 'id_cargo';


    public function funcionarios()
    {
        return $this->hasMany('hortifruti\Funcionario');
    }

}
