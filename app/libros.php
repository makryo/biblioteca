<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $table = 'libros';
    protected $fillable = ['titulo','autor', 'no_pag', 'total', 'disponible'];

    public function detalleOrdenes()
    {
    	return $this->hasMany('App\detalleOrden');
    }
}
