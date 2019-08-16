<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orden extends Model
{
    protected $table = 'orden';
    protected $fillable = ['fech_inicio', 'fech_fin', 'usuario_id'];

    public function usuarios()
    {
    	return $this->belongsTo('App\usuario');
    }
    public function detallesorden()
    {
    	return $this->hasMany('App\detalleOrden');
    }
}


