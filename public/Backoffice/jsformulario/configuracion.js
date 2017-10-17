
var cargartabla;
var token = $('meta[name="csrf-token"]').attr('content');
var editor;
$(document).ready(function () {
    cargartabla = $('#posts').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate,
                type: ''
            }
        },
        "lengthMenu": [[5, 10, 15, 25, 50, 100, 150, 200], [5, 10, 15, 25, 50, 100, 150, 200]],
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
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "responsive": true,
                "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "/allConfiguracion",
            "dataType": "json",
            "type": "POST",
            "data": {_token: token}
        },
        "columns": [
            {"data": "id"},
            {"data": "nombre"},
            {"data": "actividad"},
            {"data": "propietario"},
            {"data": "nit"},
            {"data": "correo"},
            {"data": "action"}
        ]
    });

});
/* Generar token*/

//$(function () {
//    $('#file-input').change(function (e) {
//        addImage(e);
//    });
//
//    function addImage(e) {
//        debugger;
//        var file = e.target.files[0],
//                imageType = /image.*/;
//        if (typeof file === "undefined") {
//            document.getElementById('imgSalida').src = "Backoffice/img/avatar.jpg";
//            return;
//        }
//        var reader = new FileReader();
//        reader.onload = fileOnload;
//        reader.readAsDataURL(file);
//    }
//
//    function fileOnload(e) {
//        debugger;
//        var result = e.target.result;
//        $('#imgSalida').attr("src", result);
//    }
//});

function limpiar() {
    $('div').removeClass('file-input-new');
    $('.file-preview-thumbnails').empty();
    $(".file-input").addClass('file-input-new');
    $(".file-caption-name").text("");
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/* Crear nuevo */
$(".crud-submit").click(function (e) {
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    debugger;
    var nombre = $("#create-item").find("input[name='nombre']").val();
    var actividad = $("#create-item").find("input[name='actividad']").val();
    var propietario = $("#create-item").find("input[name='propietario']").val();
    var nit = $("#create-item").find("input[name='nit']").val();
    var correo = $("#create-item").find("input[name='correo']").val();
    var descripcion = $("#create-item").find("input[name='descripcion']").val();
    var tempresa = $("#create-item").find("select[name='tEmpresa']").val();
    var logo = $("#create-item").find("img[name='imagen']").attr('src');
    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: form_action,
        data: {nombre: nombre,
            actividad: actividad,
            nit: nit,
            propietario: propietario,
            correo: correo,
            descripcion: descripcion,
            logo: logo,
            idtipoempresa: tempresa}
//        data: formData,
//        cache: false,
//        contentType: false,
//        processData: false
    }).done(function (data) {

        cargartabla.ajax.reload();
        $(".modal").modal('hide');

        $("#create-item").find("input[name='nombre']").val('');

        swal('Guardado Correctamente!', ':)', 'success');
    });
});
/* Editar  */
function mostrardata(data) {
    debugger;
    $('div').removeClass('file-input-new');
    $('.file-preview-thumbnails').empty();
//    var top = document.getElementsByClassName("file-preview-thumbnails");
//    var nested = document.getElementsByClassName("file-preview-frame");
//    if (nested.length != 0) {
////        var garbage = top.removeChild(nested);
//    }
    var route = "/Configuracion/" + data;
    $("#edit-item").find("form").attr("action", url + '/' + data);
    $.get(route, function (res) {
        $(res).each(function (key, value) {
            if (value.logo == "") {
                $(".file-input").addClass('file-input-new');
                $(".file-caption-name").text("");
            } else {
                var tabladatos = $('.file-preview-thumbnails');
                tabladatos.append("<div class='file-preview-frame'><img src=" + value.logo + " id='imagen' name='imagen' class='file-preview-image'></div>");
            }
            $("#edit-item").find("input[name='nombre']").val(value.nombre);
            $("#edit-item").find("input[name='actividad']").val(value.actividad);
            $("#edit-item").find("input[name='nit']").val(value.nit);
            $("#edit-item").find("input[name='propietario']").val(value.propietario);
            $("#edit-item").find("input[name='correo']").val(value.correo);
            $("#edit-item").find("input[name='descripcion']").val(value.descripcion);
            $("#edit-item").find("input[name='logo']").attr("src", value.logo);
            $("#edit-item").find("select[name='tEmpresa']").val(value.idtipoempresa);
            document.getElementsByName("tEmpresa").value = value.idtipoempresa;
        });
    });

}
/* Actulizar */
$(".crud-submit-edit").click(function (e) {

    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var nombre = $("#edit-item").find("input[name='nombre']").val();
    var actividad = $("#edit-item").find("input[name='actividad']").val();
    var propietario = $("#edit-item").find("input[name='propietario']").val();
    var nit = $("#edit-item").find("input[name='nit']").val();
    var correo = $("#edit-item").find("input[name='correo']").val();
    var descripcion = $("#edit-item").find("input[name='descripcion']").val();
    var tempresa = $("#edit-item").find("select[name='tEmpresa']").val();
    var logo = $("#edit-item").find("img[name='imagen']").attr('src');

    $.ajax({
        dataType: 'json',
        type: 'PUT',
        url: form_action,
        data: {nombre: nombre,
            actividad: actividad,
            nit: nit,
            propietario: propietario,
            correo: correo,
            descripcion: descripcion,
            logo: logo,
            idtipoempresa: tempresa}
    }).done(function (data) {

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
$("#posts").on("click", ".remove-item", function () {
    debugger;
    var id = $(this).closest('tr').attr('id');
    var c_obj = $(this).parents("tr");
    swal({
        title: 'ESTA SEGURO QUE DESEA ELIMINARLO?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Si, eliminarla!',
        cancelButtonText: 'No, cancelar!',
        confirmButtonClass: false,
        cancelButtonClass: false
    }).then(function () {
        $.ajax({
            dataType: 'json',
            type: 'delete',
            url: url + '/' + id,
        }).done(function (data) {
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
