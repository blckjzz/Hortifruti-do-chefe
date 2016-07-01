<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    protected $primaryKey = 'id_cargo';
    protected $fillable = ['nome','descricao','nivel_acesso'];


    public function users()
    {
        return $this->hasMany('hortifruti\User','fk_cargo', 'id_cargo');
    }
    

}
