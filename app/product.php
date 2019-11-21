<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $table = "productos";
    public $timestamps = false;
    public $fillable=["descripcion","precio_propuesto","precio_vendido","consignado","clienta_vende","disponibles"];

}

