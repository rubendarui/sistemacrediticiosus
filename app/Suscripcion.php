<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
   protected $table = 'suscripcion';
    public $fillable = ['id', 'nombre','idPlan', 'eliminado'];
}
