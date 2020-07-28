<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_name','observation','id_tipo_atendimento','id_tecnico','execution_date'
    ];

    protected $table = 'atendimento';
}
