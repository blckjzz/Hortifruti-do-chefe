<?php

namespace hortifruti;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','telefone','data_nascimento','fk_cargo'
    ];

    protected $dates = ['data_nascimento'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getDataNascimentoAttribute()
    {
        return Carbon::parse($this->attributes['data_nascimento'])->format('d/m/Y');
    }


    public function setDataNascimentoAttribute($value)
    {
        $this->attributes['data_nascimento'] = Carbon::createFromFormat('d/m/Y',$value);
    }


    public function cargo(){
        return $this->belongsTo('hortifruti\Cargo','fk_cargo','id_cargo');
    }
    

}