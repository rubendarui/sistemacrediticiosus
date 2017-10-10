<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PerfilobjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function consultapruba($idperfil)
    {

      $posts =  DB::table('perfilobjeto')
                         ->select('perfilobjeto.id as idacceso','perfilobjeto.idperfil', 'perfilobjeto.idobjeto', 'perfilobjeto.listar', 'perfilobjeto.actualizar','perfilobjeto.guardar as guardar','perfilobjeto.eliminar as eliminar')
                         ->join('objeto', 'objeto.id', '=', 'perfilobjeto.idobjeto')
                         ->join('perfil', 'perfil.id', '=', 'perfilobjeto.idperfil')
                         ->where('objeto.tipoobjeto', 'Titulo')
                    //     ->where('perfil.id', '=',  $idperfil)
                         ->get();
                         $datafor= array(['dario' => '0']);
                  
                  
             
                         for ($i=0; $i < 3; $i++) 
                         { 
                   $datafor=  array_add($datafor,$i);
                            }

      $json_data = $datafor; 
            if ( $posts==[]) {

                        $titulo = DB::table('objeto')->select('id as idobjeto')->where('tipoobjeto', 'Titulo')->get();
              return  $titulo ;
            }else
            {
   return   $json_data;

            }
    }

}
