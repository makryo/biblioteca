<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['codigo','fullname', 'birthdate', 'is_active'];

    public function ordenes()
    {
    	return $this->hasMany('App\orden');
    }

}
