<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modulo;
use App\Http\Requests;
use DB;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $Modulo = Modulo::latest()->paginate(4);
        return response()->json($Modulo);  


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
         $create = Modulo::create($request->all());
        return response()->json($create);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $show = Modulo::find($id);
        return response()->json($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
              $edit = Modulo::find($id)->update($request->all());
        return response()->json($edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $edit = Modulo::find($id)->update(['eliminado' => 1]);

            // ->update(['votes' => 1]);
   return response()->json($edit);
    }

    public function allModulos(Request $request)
    {
        $columns = array( 
                            0 =>'id', 
                            1 =>'nombre',
                            2=>'action',
                        );
        $totalData = DB::table('modulo')
            ->where('eliminado', '=', 0)
                         ->count();
        $totalFiltered = $totalData; 
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        if(empty($request->input('search.value')))
        {            
            $posts = DB::table('modulo')
            ->where('eliminado', '=', 0)
                         ->offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 
            $posts =  DB::table('modulo')
            ->where('eliminado', '=', 0)
                         ->where('id','LIKE',"%{$search}%")
                            ->orWhere('nombre', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();
            $totalFiltered = DB::table('modulo')
            ->where('eliminado', '=', 0)
                         ->where('id','LIKE',"%{$search}%")
                             ->orWhere('nombre', 'LIKE',"%{$search}%")
                             ->count();
        }
        $data = array();
        if(!empty($posts))
        {
            foreach ($posts as $post)
            {
          //      $show =  route('Modulo.show',$post->id);
           //      $edit =  route('Modulo.edit',$post->id);
               $nestedData["DT_RowId"]=$post->id;
                $nestedData['id'] = $post->id;
                $nestedData['nombre'] = $post->nombre;
                $nestedData['action'] = "&emsp; 
                                          <button data-toggle='modal' data-target='#edit-item'  onclick='mostrardata({$post->id})' class='btn btn-primary edit-item'>Edit</button> 
                                          &emsp;<button class='btn btn-danger remove-item'>Delete</button>";
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        echo json_encode($json_data); 
        
    }
}
