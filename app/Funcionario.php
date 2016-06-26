<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';
    protected $primarykey = 'id_funcionario';

    public function cargo(){
        return $this->belongsTo('hortifruti\Cargo','fk_cargo','id_cargo');
    }
}
