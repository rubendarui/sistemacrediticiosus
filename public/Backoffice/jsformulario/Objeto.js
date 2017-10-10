 
var cargartabla;
var token= $('meta[name="csrf-token"]').attr('content');
var editor; 
var selectmodulvector= [{id:-1, nombre: 'Selecione un modulo'}];
$(document).ready(function () { 
       selectmodulo();
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
                     "url": "/allobjeto",
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: token}
                   },
            "columns": [
                { "data": "id" },
                { "data": "nombre" },
                { "data": "url" }
                ,
                { "data": "tipoobjeto" }
                ,
                { "data": "modulo" }
                ,
                { "data": "action" }
            ] 
        });
 
 
 

    });
/* Armar vector de select  */
 function selectmodulo(){
 var select = document.getElementById("modulo");
  var select2 = document.getElementById("modulos");
var route = "/selectmodulo";
    var dataselect
$.get(route,function(res){
   $(res).each(function(key,value){
   
 selectmodulvector.push({id: value.id, nombre: value.nombre});
 select.options[key] = new Option(value.nombre,value.id);
  select2.options[key] = new Option(value.nombre,value.id);
  
});

});

}

 /* Crear nuevo */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
  
debugger;
    var nombre = $("#create-item").find("input[name='nombre']").val();
     var Url = $("#create-item").find("input[name='Url']").val();
          var modulo = $("#create-item").find("select[id='modulo']").val();
          var Tipo=$("#create-item").find("select[id='Tipo']").val();
          var habilitado =$("#create-item").find("select[id='habilitado']").val();
          var Visible =$("#create-item").find("select[id='visible']").val();
             var titulo =$("#create-item").find("select[id='titulo']").val();
         var font = $("#create-item").find("input[name='font']").val();

 

    $.ajax({
        dataType: 'json',
         type:'POST',
        url: form_action,
        data:{ _token: token,nombre:nombre, Url: Url,modulo:modulo,Tipo:Tipo,habilitado:habilitado,Visible:Visible,font:font,titulo:titulo}
    }).done(function(data){
        
   cargartabla.ajax.reload();
        $(".modal").modal('hide');
 
       $("#create-item").find("input[name='nombre']").val('');
             var font = $("#create-item").find("input[name='font']").val('');
                   var titulo =$("#create-item").find("select[id='titulo']").val(-1);
                     var Visible =$("#create-item").find("select[id='visible']").val(-1);
                         var habilitado =$("#create-item").find("select[id='habilitado']").val(-1);
       swal('Guardado Correctamente!',':)','success');
    });
});
 
//console.log(selectmodulvector);
function mostrardata(data)
{
var route = "/Objeto/"+data;
    $("#edit-item").find("form").attr("action",url + '/' + data);
$.get(route,function(res){
   $(res).each(function(key,value){
 //  $("#edit-item").find("input[name='nombre']").val(value.nombre);
  debugger;
 //$("#modulos option[value="+value.idmodulo+"]").attr("selected",true);

 if (value.padre==0)
 {
      $("#divtituloupdate").hide();
    $("#fontocultoupdate").show();
 }else{
$("#divtituloupdate").show();
  $("#fontocultoupdate").hide();
 }
    $("#edit-item").find("input[name='nombres']").val(value.nombre);
    $("#edit-item").find("input[name='Urls']").val(value.url);
        $("#edit-item").find("input[name='fonts']").val(value.font);
   document.ready = document.getElementById("modulos").value = value.idmodulo;
   document.ready = document.getElementById("Tipoupdate").value = value.tipoobjeto;
   document.ready = document.getElementById("titulos").value = value.padre;
   document.ready = document.getElementById("habilitados").value = value.habilitado;
   document.ready = document.getElementById("visibles").value = value.visibleconelmenu;


});
});

}

/* Actulizar */
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");


    var nombre = $("#edit-item").find("input[name='nombres']").val();
    var Url = $("#edit-item").find("input[name='Urls']").val();
    var modulo = $("#edit-item").find("select[id='modulos']").val();
    var Tipo=$("#edit-item").find("select[id='Tipoupdate']").val();
    var habilitado =$("#edit-item").find("select[id='habilitados']").val();
    var Visible =$("#edit-item").find("select[id='visibles']").val();
    var titulo =$("#edit-item").find("select[id='titulos']").val();
    var font = $("#edit-item").find("input[name='fonts']").val();
   debugger;
     $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{ _token: token,nombre:nombre, Url: Url,modulo:modulo,Tipo:Tipo,habilitado:habilitado,Visible:Visible,font:font,titulo:titulo}
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