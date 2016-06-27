<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    protected $primaryKey = 'id_cargo';
    protected $fillable = ['nome','descricao'];


    public function funcionarios()
    {
        return $this->hasMany('hortifruti\Funcionario','fk_cargo', 'id_cargo');
    }

}
