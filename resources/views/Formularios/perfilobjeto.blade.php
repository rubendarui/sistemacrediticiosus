 @extends('MasterPage.Tbackoffice')
@section('contenido')
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Accesos</h2>
    </div>
</header>
<section class="updates no-padding-top">
</br>
            <div class="container-fluid">
              <div class="row">
                <!-- Recent Updates-->
                <div class="col-lg-2">
                  <div class="recent-updates card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Agregar Nuevo</a></div>
                      </div>
                    </div>
                    <div class="card-header">
                      <h3 class="h4">Perfiles</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Item-->
                <div class="productTabs tab list-group" id="tabperfiles">
                    @foreach ($perfil as $user)

					<a class="list-group-item nav-profile  " id="{{ $user->id }}" href="#"  > {{ $user->nombre }}</a>
			      @endforeach
				</div>
     
                    </div>
                  </div>
                </div>
                <!-- Daily Feeds -->
                <div class="col-lg-5">
                  <div class="daily-feeds card"> 
                    <div class="card-close">
                   
                    </div>
                    <div class="card-header">
                      <h3 class="h4">Menu</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Item-->
                      <div class="item">
                      <table class="table" id="table_2">
							<thead>
								<tr>
									<th></th>
									<th>
										 
										  Ver
									</th>
									<th>
						 
										  Guardar
									</th>
									<th>
									 
										  Editar
									</th>
									<th>
										 
										  Eliminar
									</th>
							 
								</tr>
							</thead>
							<tbody>
 	 
 			@foreach ($titulo as $titulos)
 		
 				
          			<td class="bold" id='id{{ $titulos->id }}'>

          			<strong>{{ $titulos->nombre }}</strong>
          			</td>
													 <td  id="tdview{{ $titulos->id }}" style="display:  ;">
									<input type="checkbox" name="nameview{{ $titulos->id }}" id='inputview{{ $titulos->id }}' data-rel="{{ $titulos->id }}||-1||view||119||117" class="ajaxPower{{$titulos->id}} view">
														</td  >
															<td  id="tdadd{{ $titulos->id }}" style="display:  ">
									<input type="checkbox" name="nameadd{{ $titulos->id }}" id='inputadd{{ $titulos->id }}' data-rel="{{ $titulos->id }}||-1||add||119||117" class="ajaxPower{{ $titulos->id }} add">
														</td ><td id="tdedit{{ $titulos->id }}" style="display:  ">
									<input type="checkbox" name="nameedit{{ $titulos->id }}" id='inputedit{{ $titulos->id }}' data-rel="{{ $titulos->id }}||-1||edit||119||117" class="ajaxPower{{ $titulos->id }} edit">
														</td  >
															<td id="tdeliminar{{ $titulos->id }}" style="display:  ">
									<input type="checkbox" name="nameeliminar{{ $titulos->id }}" id='inputdelete{{ $titulos->id }}' data-rel="{{ $titulos->id }}||-1||delete||119||117" class="ajaxPower{{ $titulos->id }} delete">
														</td >
							 
											</tr>
					@endforeach				
 
		 
							 </tbody>
						</table>
                      </div>
                      <!-- Item-->
               
                    </div>
                  </div>
                </div>
                <!-- Recent Activities -->
                <div class="col-lg-5">
                  <div class="recent-activities card">
                    <div class="card-close">
                     
                    </div>
                    <div class="card-header">
                      <h3 class="h4">Fromularios</h3>
                    </div>
                    <div class="card-body no-padding">
                       
 
                      <div class="item">
                    <table class="table" id="table_2">
							<thead>
								<tr>
									<th></th>
									<th>
 
										Ver
									</th>
									<th>
	 
										Guardar
									</th>
									<th>
										 
										Editar
									</th>
									<th>
							 	Eliminar
									</th>
							 
								</tr>





							</thead>
							<tbody>
							@foreach ($subtitulo as $sub)
          			<td class="bold"><strong>{{ $sub->nombre }}</strong>
          			</td>
          			<td id="tdview{{ $titulos->id }}" style="display:  " >
          												<input type="checkbox" data-rel="{{ $titulos->id }}||2||view||119||117" class="ajaxPower view 1">
					</td>
													<td id="tdadd{{ $titulos->id }}" style="display:  "> 
															<input type="checkbox" data-rel="{{ $titulos->id }}||2||add||119||117" class="ajaxPower add 1">
														</td>			<td id="tdedit{{ $titulos->id }}" style="display:  ">									
															<input type="checkbox" data-rel="{{ $titulos->id }}||2||edit||119||117" class="ajaxPower edit 1">
														</td>
															<td  id="tdeliminar{{ $titulos->id }}" style="display:  ">
															<input type="checkbox" data-rel="{{ $titulos->id }}||2||delete||119||117" class="ajaxPower delete 1">
														</td>
							 
											</tr>
																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
										@endforeach		
										 </tbody>
						</table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
               <script type="text/javascript">
  
        </script>
      
@stop
 @section('Abm')
      <script src="Backoffice/jsformulario/perfilobjeto.js"></script> 
 @endsection