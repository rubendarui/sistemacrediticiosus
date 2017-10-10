 
var cargartabla;
var token= $('meta[name="csrf-token"]').attr('content');
var editor; 
$(document).ready(function () { 
    cargartabla=  $('#posts').DataTable({

      responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate,
                type: ''
            }
        },
        "lengthMenu": [[5,10,15,25, 50, 100,150,200], [5,10,15,25, 50, 100,150,200]],
          "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                }
                },
"oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        },
 "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax":{
                     "url": "/allmodulo",
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: token}
                   },
            "columns": [
                { "data": "id" },
                { "data": "nombre" },
                { "data": "action" }
            ] 
        });
 
    });
/* Generar token*/  
 
$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
/* Crear nuevo */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    debugger;
    var nombre = $("#create-item").find("input[name='nombre']").val();
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{nombre:nombre}
    }).done(function(data){
        
     cargartabla.ajax.reload();
        $(".modal").modal('hide');
 
         $("#create-item").find("input[name='nombre']").val('');
 
         swal('Guardado Correctamente!',':)','success');
    });
});
/* Editar  */
function mostrardata(data){
 
var route = "/Modulo/"+data;
    $("#edit-item").find("form").attr("action",url + '/' + data);
$.get(route,function(res){
   $(res).each(function(key,value){
   $("#edit-item").find("input[name='nombre']").val(value.nombre);
});
});

}
/* Actulizar */
$(".crud-submit-edit").click(function(e){

    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var nombre = $("#edit-item").find("input[name='nombre']").val();
     $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{nombre:nombre }
    }).done(function(data){
 
          cargartabla.ajax.reload();
       $('#edit-item').modal('toggle');
 
        swal(
  'Actualizacion Exitosa!',
  ' :) ',
  'success'
)
    });

});

/* Eliminar Item */
$("#posts").on("click",".remove-item",function(){
    var id =  $(this).closest('tr').attr('id');
    var c_obj = $(this).parents("tr");
swal({
  title: 'ESTA SEGURO QUE DESEA ELIMINARLO?',
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#DD6B55',
  confirmButtonText: 'Si, eliminarla!',
  cancelButtonText: 'No, cancelar!',
  confirmButtonClass:false,
  cancelButtonClass:false 
}).then(function () {
        $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
          cargartabla.ajax.reload();
          swal(
    'Eliminado Exitoso!',
    ' .',
    'success'
  )
    });
}, function (dismiss) {
 
  if (dismiss === 'cancel') {
    swal(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})

});
