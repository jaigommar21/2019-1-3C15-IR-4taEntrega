<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Metas extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'metas';

    protected $fillable = [
        'nombre', 'descripción', 'costo', 'ahorrado', 'monto_faltante', 'Estado'
    ];
}
