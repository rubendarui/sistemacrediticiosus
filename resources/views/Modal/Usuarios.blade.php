<div   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left"  id="create-item" >
    <div role="document" class="modal-dialog modal-lg"style="margin-top: 100px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!--<p>Lorem ipsum dolor sit amet consectetur.</p>-->
                <form data-toggle="validator" action="{{route('Usuario.store')}}" method="POST"   >

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="apellido">Apellido:</label>
                            <input type="text" name="apellido" class="form-control" data-error="Please enter apellido." required />
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="ci">CI:</label>
                            <input type="text" name="ci" class="form-control" data-error="Please enter CI." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="direccion">Direccion:</label>
                            <input type="text" name="direccion" class="form-control" data-error="Please enter direccion." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="telefono">Telefono:</label>
                            <input type="text" name="telefono" class="form-control" data-error="Please enter telefono." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="celular">Celular:</label>
                            <input type="text" name="celular" class="form-control" data-error="Please enter celular." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nit">NIT:</label>
                            <input type="text" name="nit" class="form-control" data-error="Please enter nit." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="rsocial">Razon Social:</label>
                            <input type="text" name="rsocial" class="form-control" data-error="Please enter Razon Social." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="usuario">Usuario:</label>
                            <input type="text" name="usuario" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="pass">PassWord:</label>
                            <input type="password" name="pass" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="perfil">Perfil:</label>
                            {!! Form::select('Perfil', $perfil,null, ['id'=>'perfil','name'=>'perfil','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nombre">Configuracion:</label>
                            {!! Form::select('Configuracion', $configuracion,null, ['id'=>'configuracion','name'=>'configuracion','class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="suscripcion">Suscripcion:</label>
                            {!! Form::select('Suscripcion', $suscripcion,null, ['name'=>'suscripcion','class'=>'form-control']) !!}
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
                <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!--<p>Lorem ipsum dolor sit amet consectetur.</p>-->
                <form data-toggle="validator" action="" method="put">
                    <!--                    <div class="form-group">
                                            <label class="control-label" for="nombre">Nombre:</label>
                                            <input type="text" name="nombre" class="form-control" data-error="Please enter nombre." required />
                                            <div class="help-block with-errors"></div>
                                        </div>-->
                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="apellido">Apellido:</label>
                            <input type="text" name="apellido" class="form-control" data-error="Please enter apellido." required />
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="ci">CI:</label>
                            <input type="text" name="ci" class="form-control" data-error="Please enter CI." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="direccion">Direccion:</label>
                            <input type="text" name="direccion" class="form-control" data-error="Please enter direccion." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="telefono">Telefono:</label>
                            <input type="text" name="telefono" class="form-control" data-error="Please enter telefono." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="celular">Celular:</label>
                            <input type="text" name="celular" class="form-control" data-error="Please enter celular." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nit">NIT:</label>
                            <input type="text" name="nit" class="form-control" data-error="Please enter nit." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="rsocial">Razon Social:</label>
                            <input type="text" name="rsocial" class="form-control" data-error="Please enter Razon Social." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="usuario">Usuario:</label>
                            <input type="text" name="usuario" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="pass">PassWord:</label>
                            <input type="password" name="pass" class="form-control" data-error="Please enter nombre." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="main row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="perfil">Perfil:</label>
                            {!! Form::select('Perfil', $perfil,null, ['id'=>'perfils','name'=>'perfil','class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="control-label" for="nombre">Configuracion:</label>
                            {!! Form::select('Configuracion', $configuracion,null, ['name'=>'configuracion','class'=>'form-control']) !!}
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
