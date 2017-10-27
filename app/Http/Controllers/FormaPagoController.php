<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FormaPago;
use DB;

class FormaPagoController extends Controller
{
    public function index() {
        $FormaPago = FormaPago::latest()->paginate(4);
        return response()->json($FormaPago);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $create = FormaPago::create($request->all());
        return response()->json($create);
    }

    public function show($id) {
        $show = FormaPago::find($id);
        return response()->json($show);
    }

    public function edit($id) {
        
    }

    public function update(Request $request, $id) {
        $edit = FormaPago::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function destroy($id) {
        $edit = FormaPago::find($id)->update(['eliminado' => 1]);
        return response()->json($edit);
    }

    public function allformapago(Request $request) {
        $columns = array(
            0 => 'id',
            1 => 'nombre',
            2 => 'action',
        );
        $totalData = DB::table('formapago')
                ->where('eliminado', '=', 0)
                ->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        if (empty($request->input('search.value'))) {
            $posts = DB::table('formapago')
                    ->where('eliminado', '=', 0)
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
        } else {
            $search = $request->input('search.value');
            $posts = DB::table('formapago')
                    ->where('eliminado', '=', 0)
                    ->where('id', 'LIKE', "%{$search}%")
                    ->orWhere('nombre', 'LIKE', "%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            $totalFiltered = DB::table('formapago')
                    ->where('eliminado', '=', 0)
                    ->where('id', 'LIKE', "%{$search}%")
                    ->orWhere('nombre', 'LIKE', "%{$search}%")
                    ->count();
        }
        $data = array();
        if (!empty($posts)) {
            foreach ($posts as $post) {
                $nestedData["DT_RowId"] = $post->id;
                $nestedData['id'] = $post->id;
                $nestedData['nombre'] = $post->nombre;
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
