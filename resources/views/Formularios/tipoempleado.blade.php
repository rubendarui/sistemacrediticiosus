@extends('Template.Backoffice')
@section('content')
@include('Modal.Mtipoempleo')
<input type="hidden" name="_Token" value="{{ csrf_token() }}" id="token">
<div id="borderless-table">
    <h3 class="header">Tipo de Empleo</h3>
    <div class="row">
        <div class="col s12 m8 l6"> 
            <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal1">+</a>
        </div>
        <div class="col s12 m12 l12">
            <table  class="responsive-table">

                <thead>
                    <tr>
                        <th data-field="id">ID</th>
                        <th data-field="name">Nombre</th>
                        <th data-field="price">Configuracion</th>
                    </tr>
                </thead>

                <tbody id="data">
                    @foreach($students as $studen)
                    <tr>
                        <td>{!!$studen->id!!}</td>
                        <td>{!!$studen->nombre!!}</td>
                        <td><a class="waves-effect waves-light btn">Editar</a> 
                            <a class="waves-effect waves-light btn red">Eliminar</a>
                        </td>

                    </tr>

                    @endforeach
                </tbody>

            </table>

        </div>


    </div>
    {{ $students->links() }}
    <ul id="pagination" class="pagination-sm"> <br> </ul>

</div>



@endsection
@section('script')
<script type="text/javascript" src="js/tipoempleado/tipoempleao.js"></script>
@endsection
