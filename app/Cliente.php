<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['cnpj' , 'nome_cliente','fk_tipo_estabelecimento','telefone',
        'logradouro', 'numero', 'bairro','ponto_referencia'];

    public function tipoEstabelecimento()
    {
        return $this->belongsTo('hortifruti\TipoEstabelecimento','fk_tipo_estabelecimento');
    }


    public function itemPedido(){
        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }

}
