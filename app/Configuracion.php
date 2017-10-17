<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
   protected $table = 'configuraciones';
      public $fillable = ['id','nombre','actividad','nit','propietario','correo','descripcion','logo','idtipoempresa','eliminado'];

}
