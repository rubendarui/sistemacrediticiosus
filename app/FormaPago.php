<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    protected $table = 'formapago';
    public $fillable = ['id', 'nombre', 'eliminado'];
}
