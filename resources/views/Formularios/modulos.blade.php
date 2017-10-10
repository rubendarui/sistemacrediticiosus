@extends('MasterPage.Tbackoffice')
@section('contenido')
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Formulario  Modulo</h2>
    </div>
</header>
<section class="tables">
    <div class="col-lg-12">
        @include('Modal.Modulo')
        <div class="card">
            <div class="card-header d-flex">
             
                <div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-item"   data-target="#create-item" href="#create-item">NUEVO MODULO</button>
                </div>
            </div>
            <div class="card-body">
              <table class="display responsive nowrap" cellspacing="0" width="100%" id="posts">
                <thead>
			    <tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th disabled>Action</th>
			    </tr>
			</thead >
			<tbody id="datos">
			</tbody>



                </table>
            

		 
            </div>
        </div>

 
 
    <ul id="pagination" class="pagination"></ul>
 
    </div>
</section>

   
     <script type="text/javascript">
           var url = "<?php echo route('Modulo.index')?>";
 
        </script>
      



@stop

 @section('Abm')
 
              <script src="Backoffice/jsformulario/modulo.js"></script> 
                  

 @endsection