<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class UrlController extends Controller {

    public function __construct() {
        $this->titulo = DB::table('objeto')->select('nombre', 'font', 'id')->where('tipoobjeto', 'Titulo')->get();
        $this->subtitulo = DB::table('objeto')->select('nombre', 'url', 'padre')->where('padre', '>', 0)->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('MasterPage/TFrontoffice');
    }

    public function BackofficeAdminkatoo() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        return view('Formularios/inicio', compact('titulo', 'subtitulo'));
    }

    public function Autenticacion() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        return view('MasterPage/TLoginBackoffice', compact('titulo', 'subtitulo'));
    }

    public function usuarios() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        return view('Formularios/usuarios', compact('titulo', 'subtitulo'));
    }

    public function accesos() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        return view('Formularios/accesos', compact('titulo', 'subtitulo'));
    }

    public function modulos() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        return view('Formularios/modulos', compact('titulo', 'subtitulo'));
    }

    public function empresas() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        return view('Formularios/empresas', compact('titulo', 'subtitulo'));
    }

    public function objeto() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        return view('Formularios/objeto', compact('titulo', 'subtitulo'));
    }
    public function perfilobjeto() {
        $titulo = $this->titulo;
        $subtitulo = $this->subtitulo;
        $perfil = DB::table('perfil')->select('id', 'nombre' )->where('eliminado', '=', 0)->get();
        return view('Formularios/perfilobjeto', compact('titulo', 'subtitulo','perfil'));
    }
 


}
 //