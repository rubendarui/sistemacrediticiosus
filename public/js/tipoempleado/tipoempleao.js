$(document).ready(function(){
      
$('.modal-trigger').leanModal();
  });

   $("#Guardar").click(function()
 {
  debugger;
   
 var nombre= $("#nombre").val();
var descripcion=$("#descripcion").val();
 

     if (!nombre || !nombre.trim().length) {
       Materialize.toast('Campos vacios'+'  Razon Social', 2500, 'rounded');
        return;
    } 

 
      
     var route = "/TipoEmpleado";
  var token = $("#token").val();
 
   $.ajax({
url:route,
headers: {'X-CSRF-TOKEN': token} ,
type:'POST',
dataType:'json',
data:{ nombre:nombre,descripcion:descripcion},
success: function(){
       //Cargar(); 
       $("#modal1").closeModal();
 
 
  $("#nombre").val("");
   $("#descripcion").val("");
    Materialize.toast('Guardado exitoso' , 1000, 'rounded');
   
    },error: function() {
                   Materialize.toast('Ya existe' , 1000, 'rounded');
                }
  
});
 
});