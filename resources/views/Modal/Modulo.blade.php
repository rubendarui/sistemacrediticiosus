


<div   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left"  id="create-item" >
    <div role="document" class="modal-dialog"style="margin-top: 100px;">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Crear Modulo</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!--<p>Lorem ipsum dolor sit amet consectetur.</p>-->
    <form data-toggle="validator" action="{{route('Modulo.store')}}" method="POST"   >
                        <div class="form-group">
                            <label class="control-label" for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
        
          </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
 <button type="submit" class="btn crud-submit btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>

 
 <div   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left"  id="edit-item" >
    <div role="document" class="modal-dialog"style="margin-top: 100px;">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Editar Modulo</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!--<p>Lorem ipsum dolor sit amet consectetur.</p>-->
 <form data-toggle="validator" action="" method="put">
                        <div class="form-group">
                            <label class="control-label" for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" data-error="Please enter nombre." required />

                            <div class="help-block with-errors"></div>
                        </div>
        
          </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
    <button type="submit" class="btn btn-success crud-submit-edit">Actualizar</button>
            </div>
        </div>
    </div>
</div>
 
