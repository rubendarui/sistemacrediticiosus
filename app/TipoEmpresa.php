<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEmpresa extends Model {

    protected $table = 'tipoempresa';
    public $fillable = ['id', 'nombre', 'estado', 'eliminado'];

}
