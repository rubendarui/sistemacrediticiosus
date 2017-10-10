 

var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

/* manage data list 



*/
$(document).ready(function(){
      
$('.modal-trigger').leanModal();
  });
function manageData() {

    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){
            debugger;
    	total_page = data.last_page;
    	current_page = data.current_page;

       
    $('#pagination').twbsPagination({
            totalPages: total_page,
            visiblePages: current_page,
            onPageClick: function (event, pageL) {
                page = pageL;
                if(is_ajax_fire != 0){
                  getPageData();
                }
            }
        });

    	manageRow(data.data);
        is_ajax_fire = 1;
    });
}

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

/* Obtener pagina data*/
function getPageData() {
    debugger;
	$.ajax({
    	dataType: 'json',
    	url: url,
    	data: {page:page}
	}).done(function(data){

		manageRow(data.data);
	});
}

/*Agregar item nuevo a la tabla */
function manageRow(data) {
           
	var	rows = '';
    var tabladatos = $('#datos');
    $('#datos').empty();
	$.each( data, function( key, value ) {
   tabladatos.append("<tr>" +
                    "<td>" + value.title + "</td>" +
                    "<td>" + value.description + "</td>" +
                    "<td data-id="+value.id+"><button   data-target='#edit-item'   class='waves-effect waves-light btn modal-trigger edit-item'  href='#edit-item' title='Editar'><i class='material-icons'>mode_edit</i></button>" +
                    "  <button class='btn btn-danger remove-item'><i class='material-icons'>delete</i></button> </td>" +
                    "</td>" +
                    "</tr>");


	});

         $('.modal-trigger').leanModal(); 
	//$("tbody").html(rows);
}
function Mostrar(ra){
debugger;

}
/* Create new Item */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    debugger;
    var title = $("#create-item").find("input[name='title']").val();
    var description = $("#create-item").find("input[name='description']").val();

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{title:title, description:description}
    }).done(function(data){
        getPageData();
       //$(".modal").modal('hide');
        //toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
         $("#create-item").find("input[name='title']").val('');
         $("#create-item").find("input[name='description']").val('');
         swal('Guardado Correctamente!',':)','success');
         $("#create-item").closeModal();
    });

});

/* Eliminar Item */
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
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
        c_obj.remove();
          swal(
    'Eliminado Exitoso!',
    ' .',
    'success'
  )
        getPageData();
    });


}, function (dismiss) {
  // dismiss can be 'cancel', 'overlay',
  // 'close', and 'timer'
  if (dismiss === 'cancel') {
    swal(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})

});

/* Editar Item */
$("body").on("click",".edit-item",function(){


  //  debugger;
    var id = $(this).parent("td").data('id');
           var title = $(this).parent("td").prev("td").prev("td").text();
     var description = $(this).parent("td").prev("td").text();
    $("#edit-item").find("input[name='title']").val(title);
    $("#edit-item").find("input[name='description']").val(description);
    $("#edit-item").find("form").attr("action",url + '/' + id);
});

/* Actulizar  nuevo Item */
$(".crud-submit-edit").click(function(e){

    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var title = $("#edit-item").find("input[name='title']").val();
    var description = $("#edit-item").find("textarea[name='description']").val();

    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{title:title, description:description}
    }).done(function(data){
        getPageData();
        $("#edit-item").closeModal();
        //toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
        swal(
  'Actualizacion Exitosa!',
  ' :) ',
  'success'
)
    });


});