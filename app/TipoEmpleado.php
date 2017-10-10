<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEmpleado extends Model
{ 
	protected $table = 'tipoempleado';
    public $fillable = ['id','nombre'];

}
