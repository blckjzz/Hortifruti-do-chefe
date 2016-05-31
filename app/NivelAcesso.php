<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class NivelAcesso extends Model
{
    protected $table='nivel_acesso';
    protected $fillable=['descricao'];

//    public function usuarios(){
//        return $this->hasMany('hortifruti\User');
//    }
}
