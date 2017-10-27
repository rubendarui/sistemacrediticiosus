<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Usuario;
use DB;
use Carbon\Carbon;

class UsuarioController extends Controller {

    public function index() {
        $Usuario = Usuario::latest()->paginate(4);
        return response()->json($Usuario);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $create = Usuario::create($request->all());
        return response()->json($create);
    }

    public function show($id) {
        $show = Usuario::find($id);
        return response()->json($show);
    }

    public function edit($id) {
        
    }

    public function update(Request $request, $id) {
        //cambiar la parte del cambio de suscripcion que este en el editar usuario.
        //si no cambio de suscripcion que verifique x base de datos si ha eligido otro distinto.
        //si cambio otro que inserte en la tabla historico, sino que edite normalmente
        $edit = Usuario::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function destroy($id) {
        $edit = Usuario::find($id)->update(['eliminado' => 1]);
        return response()->json($edit);
    }

    public function cambiarSuscripcion(Request $request,$id) {
        $date = Carbon::now();
        $fecha = $date->toDateString();
        $hora = $date->toTimeString();
        $actua = DB::table('usuario')->where('id', $id)->update(['idSuscripcion' => $request->idSuscripcion]);
         DB::table('historicoPlan')->insert(['idSuscripcion' => $request->idSuscripcion, 'idUsuario' => $id, 'descripcion' => $request->descripcion, 'fecha' => $fecha, 'hora' => $hora]);
        return response()->json($actua);
    }

    public function allUsuarios(Request $request) {
        $columns = array(
            0 => 'id',
            1 => 'nombre',
            2 => 'apellido',
            3 => 'ci',
            4 => 'action',
        );
        $totalData = DB::table('usuario')
                ->where('eliminado', '=', 0)
                ->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        if (empty($request->input('search.value'))) {
            $posts = DB::table('usuario')
                    ->where('eliminado', '=', 0)
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
        } else {
            $search = $request->input('search.value');
            $posts = DB::table('usuario')
                    ->where('eliminado', '=', 0)
                    ->where('id', 'LIKE', "%{$search}%")
                    ->orWhere('nombre', 'LIKE', "%{$search}%")
                    ->orWhere('apellido', 'LIKE', "%{$search}%")
                    ->orWhere('ci', 'LIKE', "%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            $totalFiltered = DB::table('usuario')
                    ->where('eliminado', '=', 0)
                    ->where('id', 'LIKE', "%{$search}%")
                    ->orWhere('nombre', 'LIKE', "%{$search}%")
                    ->orWhere('apellido', 'LIKE', "%{$search}%")
                    ->orWhere('ci', 'LIKE', "%{$search}%")
                    ->count();
        }
        $data = array();
        if (!empty($posts)) {
            foreach ($posts as $post) {
                //      $show =  route('Modulo.show',$post->id);
                //      $edit =  route('Modulo.edit',$post->id);
                $nestedData["DT_RowId"] = $post->id;
                $nestedData['id'] = $post->id;
                $nestedData['nombre'] = $post->nombre;
                $nestedData['apellido'] = $post->apellido;
                $nestedData['ci'] = $post->ci;
                $nestedData['suscripcion'] = $post->ci;
                $nestedData['action'] = "&emsp;<button data-toggle='modal' data-target='#edit-suscripcion' title='Cambiar Suscripcion'  onclick='mostrarSuscripcion({$post->id})' class='btn btn-primary edit-suscripcion'>Plan</button>
                                         &emsp;<button data-toggle='modal' data-target='#edit-item' title='Editar'  onclick='mostrardata({$post->id})' class='btn btn-primary edit-item'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button> 
                                         &emsp;<button class='btn btn-danger remove-item' title='Eliminar'><i class='fa fa-times' aria-hidden='true'></i></button>
                                         ";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);
    }

}
