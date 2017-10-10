<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfilobjeto extends Model
{
 	protected $table = 'perfilobjeto';
    public $fillable = ['id', 'idperfil', 'idobjeto', 'eliminar', 'actualizar', 'reporte', 'imprimir', 'listar', 'guardar'];

}
