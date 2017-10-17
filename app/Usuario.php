<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    	protected $table = 'usuario';
      public $fillable = ['id','nombre','apellido','ci','direccion','usuario','pasword','telefono','celular','nit','razonsocial','idperfil','idConfiguracion','eliminado'];
}
