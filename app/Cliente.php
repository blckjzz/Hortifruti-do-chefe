<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['cnpj' , 'nome_cliente','telefone', 'logradouro', 'numero', 'bairro','ponto_referencia', 'fk_tipo_estabelecimento'];

    public function tipoEstabelecimento()
    {
        return $this->hasMany('hortifruti\TipoEstabelecimento', 'id_tipo_estabelecimento', 'fk_tipo_estabelecimento');
    }

}
