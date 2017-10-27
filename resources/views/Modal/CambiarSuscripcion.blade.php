<div   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left"  id="edit-suscripcion" >
    <div role="document" class="modal-dialog"style="margin-top: 100px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Cambiar Suscripcion</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="put">
                   
                    <div class="main row">
                        
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="control-label" for="plan">Suscripcion:</label>
                            {!! Form::select('Perfil', $suscripcion,null, ['name'=>'suscripcion','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="control-label" for="nombre">Descripcion:</label>
                            <input type="text" name="descripcion" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-success crud-submit-edit-suscripcion">Actualizar</button>
            </div>
        </div>
    </div>
</div>
