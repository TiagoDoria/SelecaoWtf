<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAtendimento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','status'
    ];

    protected $table = 'tipo_atendimento';
}
