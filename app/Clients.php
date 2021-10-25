<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table='clients';
    public $timestamps=false;
    protected $fillable=[
        'id', 'nombre','compañia','telefono','email'
    ];

    protected $primaryKey='id';
}
