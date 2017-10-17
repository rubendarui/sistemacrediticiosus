<div   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left"  id="create-item" >
    <div role="document" class="modal-dialog modal-lg"style="margin-top: 100px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Crear Configuracion</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!--<p>Lorem ipsum dolor sit amet consectetur.</p>-->
                <form data-toggle="validator" id="datosCreate" action="{{route('Configuracion.store')}}" method="POST"   >

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="apellido">Actividad:</label>
                            <input type="text" name="actividad" class="form-control" data-error="Please enter actividad." required />
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="ci">Propietario:</label>
                            <input type="text" name="propietario" class="form-control" data-error="Please enter propietario." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="direccion">NIT:</label>
                            <input type="text" name="nit" class="form-control" data-error="Please enter NIT." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="tEmpresa">Tipo Empresa:</label>
                            {!! Form::select('Perfil', $tipoEmpresa,null, ['id'=>'tEmpresa','name'=>'idtipoempresa','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="celular">Correo:</label>
                            <input type="text" name="correo" class="form-control" data-error="Please enter correo." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="control-label" for="nit">Descripcion:</label>
                            <input type="text" name="descripcion" class="form-control" data-error="Please enter descripcion." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="main row">
                        <div class="input-field col s12 m12 l12">
                            <label class="control-label" for="logo">Logo:</label>
                            <input id="logo" type="file" name="logo" class="file" data-preview-file-type="any">
                        </div>
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
    <div role="document" class="modal-dialog modal-lg"style="margin-top: 100px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar Configuracion</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="put">
                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="apellido">Actividad:</label>
                            <input type="text" name="actividad" class="form-control" data-error="Please enter actividad." required />
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="ci">Propietario:</label>
                            <input type="text" name="propietario" class="form-control" data-error="Please enter propietario." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="direccion">NIT:</label>
                            <input type="text" name="nit" class="form-control" data-error="Please enter NIT." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="perfil">Tipo Empresa:</label>
                            {!! Form::select('Perfil', $tipoEmpresa ,null, ['name'=>'tEmpresa','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="celular">Correo:</label>
                            <input type="text" name="correo" class="form-control" data-error="Please enter correo." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="control-label" for="nit">Descripcion:</label>
                            <input type="text" name="descripcion" class="form-control" data-error="Please enter descripcion." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="main row">
                        <div class="input-field col s12 m12 l12">
                            <label class="control-label" for="logo">Logo:</label>
                            <input id="logo" type="file" name="logo" class="file" data-preview-file-type="any">
                        </div>
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
