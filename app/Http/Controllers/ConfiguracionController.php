<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use App\Configuracion;
use DB;
use App\Http\Requests;

class ConfiguracionController extends Controller {

    public function index() {
        $Usuario = Configuracion::latest()->paginate(4);
        return response()->json($Usuario);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $create = Configuracion::create($request->all());
        return response()->json($create);
    }

    public function show($id) {
        $show = Configuracion::find($id);
        return response()->json($show);
    }

    public function edit($id) {
        
    }

    public function update(Request $request, $id) {
        $edit = Configuracion::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function destroy($id) {
        $edit = Configuracion::find($id)->update(['eliminado' => 1]);
        return response()->json($edit);
    }

    public function allConfiguracion(Request $request) {
        $columns = array(
            0 => 'id',
            1 => 'nombre',
            2 => 'actividad',
            3 => 'propietario',
            4 => 'nit',
            5 => 'correo',
            6 => 'action',
        );
        $totalData = DB::table('configuraciones')
                ->where('eliminado', '=', 0)
                ->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        if (empty($request->input('search.value'))) {
            $posts = DB::table('configuraciones')
                    ->where('eliminado', '=', 0)
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
        } else {
            $search = $request->input('search.value');
            $posts = DB::table('configuraciones')
                    ->where('eliminado', '=', 0)
                    ->where('id', 'LIKE', "%{$search}%")
                    ->orWhere('nombre', 'LIKE', "%{$search}%")
                    ->orWhere('actividad', 'LIKE', "%{$search}%")
                    ->orWhere('propietario', 'LIKE', "%{$search}%")
                    ->orWhere('nit', 'LIKE', "%{$search}%")
                    ->orWhere('correo', 'LIKE', "%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            $totalFiltered = DB::table('configuraciones')
                    ->where('eliminado', '=', 0)
                    ->where('id', 'LIKE', "%{$search}%")
                    ->orWhere('nombre', 'LIKE', "%{$search}%")
                    ->orWhere('actividad', 'LIKE', "%{$search}%")
                    ->orWhere('propietario', 'LIKE', "%{$search}%")
                    ->orWhere('nit', 'LIKE', "%{$search}%")
                    ->orWhere('correo', 'LIKE', "%{$search}%")
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
                $nestedData['actividad'] = $post->actividad;
                $nestedData['propietario'] = $post->propietario;
                $nestedData['nit'] = $post->nit;
                $nestedData['correo'] = $post->correo;
                $nestedData['action'] = "&emsp; 
                                          <button data-toggle='modal' data-target='#edit-item' title='Editar'  onclick='mostrardata({$post->id})' class='btn btn-primary edit-item'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button> 
                                          &emsp;<button class='btn btn-danger remove-item' title='Eliminar'><i class='fa fa-times' aria-hidden='true'></i></button>";
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
