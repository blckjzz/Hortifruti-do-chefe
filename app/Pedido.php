<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $fillable = ['fk_id_cliente','total_pedido'];
    protected $dates = ['created_at', 'updated_at'];

    public function cliente()
    {
        return $this->belongsTo('hortifruti\Cliente', 'fk_id_cliente','id_cliente');
    }

    //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. books em pivot', 'key ref. author em pivot')
    public function produtos()
    {
        return $this->belongsToMany('hortifruti\Produto', 'item_pedido', 'fk_id_pedido', 'fk_id_produto')->withPivot('qtd_kg', 'qtd_caixa', 'qtd_bandeja', 'qtd_duzia');
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y');

    }
    public function getUpdatedAtAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d/m/Y');
    }

    public function getTotalPedidoAttribute()
    {
        return number_format($this->attributes['total_pedido'], 2, '.', ',');;

    }


}
