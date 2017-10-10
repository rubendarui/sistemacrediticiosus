@extends('MasterPage.Tbackoffice')
@section('contenido')
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Usuarios</h2>
    </div>
</header>
<section class="tables">
    <div class="col-lg-12">
        @include('Modal.Usuarios')
        <div class="card">
            <div class="card-header d-flex">
                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="input-group left">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-1 col-xs-1">

                </div>
                <div class="form-group col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">NUEVO USUARIO</button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter      </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@stop