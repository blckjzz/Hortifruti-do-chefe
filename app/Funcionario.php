<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';
    protected $primaryKey = 'id_funcionario';
    protected $fillable = ['nome','cpf','fk_cargo','telefone','endereco','data_nascimento'];

    public function cargo(){
        return $this->belongsTo('hortifruti\Cargo','fk_cargo','id_cargo');
    }
}
