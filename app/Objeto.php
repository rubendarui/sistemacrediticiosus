<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
  	protected $table = 'objeto';
      public $fillable = ['id', 'nombre', 'url', 'tipoobjeto', 'visibleconelmenu', 'idmodulo', 'eliminar', 'habilitado', 'padre', 'font'];


}
