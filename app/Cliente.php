<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['cnpj' , 'nome_cliente','fk_tipo_estabelecimento','telefone',
        'logradouro', 'numero', 'bairro','ponto_referencia','status'];

    protected $dates = ['deleted_at'];
//    protected $casts = ['status' => 'boolean'];

    public function tipoEstabelecimento()
    {
        return $this->belongsTo('hortifruti\TipoEstabelecimento','fk_tipo_estabelecimento');
    }

    public function pedidos(){
        return $this->hasMany('hortifruti\Pedido','fk_id_cliente','id_cliente');
    }





}
