<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleOrden extends Model
{
    protected $table = 'detalle_orden';
    protected $fillable = ['id', 'libros_id', 'no_orden', 'cantidad'];

    public function ordenes2()
    {
    	return $this->belongsTo('App\orden');
    }

    public function libro()
    {
    	return $this->belongsTo('App\libros');
    }
}
