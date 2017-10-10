 
@extends('Template.Backoffice')
	 
@section('content')
		<div class="row">
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2>Tipo Empleado</h2>
		        </div>
		        <div class="pull-right">
				<a  class="waves-effect waves-light btn modal-trigger" data-toggle="modal" data-target="#create-item" href="#create-item">
					  Crear Item
				</a>
			 
		        </div>
		    </div>
		</div>

		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Title</th>
				<th>Description</th>
				<th width="200px">Action</th>
			    </tr>
			</thead >
			<tbody id="datos">
			</tbody>
		</table>
 



          
		<ul id="pagination" class="pagination-sm"></ul>
		<br>
		   <div id="pagination"  class="pagination-sm">></div>

	    <!-- Create Item Modal -->  
 
  <!-- Modal Structure -->
  <div   class="modal" id="create-item" >
    <div class="modal-content">
 <h4 class="modal-title" id="myModalLabel">Crear Tipo empleado</h4>
	<form data-toggle="validator" action="{{route('item-ajax.store')}}" method="POST">
		      			<div class="form-group">
							<label class="control-label" for="title">Title:</label>
							<input type="text" name="title" class="form-control" data-error="Please enter title." required />
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Description:</label>
							<input type="text" name="description" class="form-control" data-error="Please enter description." required/> 
							<div class="help-block with-errors"></div>
						</div>
						
		  </form>

    </div>
    <div class="modal-footer">
    <div class="form-group">
							<button type="submit" class="btn crud-submit btn-success">Guardar</button>
						</div>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>

  </div>
	<!-- Edit Item Modal  edit-item--> 
   
  <div   class="modal" id="edit-item" >
    <div class="modal-content">
 <h4 class="modal-title" id="myModalLabel">Editar Tipo empleado</h4>
<form data-toggle="validator" action="/item-ajax/14" method="put">

		      			<div class="form-group">
	<i class="mdi-communication-business prefix"></i>
							<label class="control-label" for="title">Title:</label>

							<input type="text" name="title" class="form-control" data-error="Please enter title." required />

							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Description:</label>
							<input type="text"  name="description" class="form-control" data-error="Please enter description." required/> 
							<div class="help-block with-errors"></div>
						</div>
					
		      		</form>

    </div>
    <div class="modal-footer">
    	<div class="form-group">
							<button type="submit" class="btn btn-success crud-submit-edit">Actualizar</button>
						</div>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar </a>
    </div>
  </div>









		<!-- Edit Item Modal  edit-item--> 
		<div class="modal" id="edict-itesm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
		      </div>
		      <div class="modal-body">

		      		

		      </div>
		    </div>
		  </div>
		</div>

 
 
        <script type="text/javascript">
    	   var url = "<?php echo route('item-ajax.index')?>";
        </script>
      
@endsection
 
 @section('script')
 
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
      <script src="/js/item-ajax.js"></script> 

 @endsection
 