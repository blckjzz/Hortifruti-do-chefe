<?php

namespace hortifruti;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    /*
     * $table->string('nome');
            $table->string('ncm');
            $table->double('valor_unidade');
            $table->double('valor_kg');
            $table->double('valor_caixa');
            $table->double('valor_bandeja');
            $table->double('valor_duzia');
            $table->integer('fk_tipo_produt
     * */
    protected $fillable =  ['nome', 'ncm', 'valor_unidade', 'valor_kg', 'valor_caixa', 'valor_bandeja','valor_duzia'];



    public function tipo()
    {
        return $this->belongsTo('hortifruti\TipoProduto', 'fk_tipo_produto','id_tipo_produto');
    }
}
