<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
        protected $table = 'plan';
    public $fillable = ['id', 'nombre', 'eliminado'];
}
