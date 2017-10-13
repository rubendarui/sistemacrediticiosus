
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
            "url": "/allUsuario",
            "dataType": "json",
            "type": "POST",
            "data": {_token: token}
        },
        "columns": [
            {"data": "id"},
            {"data": "nombre"},
            {"data": "apellido"},
            {"data": "ci"},
            {"data": "action"}
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
$(".crud-submit").click(function (e) {
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    debugger;
    var nombre = $("#create-item").find("input[name='nombre']").val();
    var apellido = $("#create-item").find("input[name='apellido']").val();
    var ci = $("#create-item").find("input[name='ci']").val();
    var direccion = $("#create-item").find("input[name='direccion']").val();
    var telefono = $("#create-item").find("input[name='telefono']").val();
    var celular = $("#create-item").find("input[name='celular']").val();
    var nit = $("#create-item").find("input[name='nit']").val();
    var rsocial = $("#create-item").find("input[name='rsocial']").val();
    var usuario = $("#create-item").find("input[name='usuario']").val();
    var pass = $("#create-item").find("input[name='pass']").val();
    var perfil = $("#perfil").val();
    var configuracion = $("#create-item").find("input[name='configuracion']").val();


    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: form_action,
        data: {nombre: nombre,
            apellido: apellido,
            ci: ci,
            direccion: direccion,
            usuario: usuario,
            pasword: pass,
            telefono: telefono,
            celular: celular,
            nit: nit,
            razonsocial: rsocial,
            idperfil: perfil}
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
    var route = "/Usuario/" + data;
    $("#edit-item").find("form").attr("action", url + '/' + data);
    $.get(route, function (res) {
        $(res).each(function (key, value) {
            $("#edit-item").find("input[name='nombre']").val(value.nombre);
            $("#edit-item").find("input[name='apellido']").val(value.apellido);
            $("#edit-item").find("input[name='ci']").val(value.ci);
            $("#edit-item").find("input[name='direccion']").val(value.direccion);
            $("#edit-item").find("input[name='telefono']").val(value.telefono);
            $("#edit-item").find("input[name='celular']").val(value.celular);
            $("#edit-item").find("input[name='nit']").val(value.nit);
            $("#edit-item").find("input[name='rsocial']").val(value.razonsocial);
            $("#edit-item").find("input[name='usuario']").val(value.nombre);
            $("#edit-item").find("input[name='pass']").val(value.pasword);
            $("#perfils").val(value.idperfil);
            $('#perfils option:selected').val(res.idperfil);
            
        });
    });

}
/* Actulizar */
$(".crud-submit-edit").click(function (e) {

    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var nombre = $("#edit-item").find("input[name='nombre']").val();
    var apellido = $("#edit-item").find("input[name='apellido']").val();
    var ci = $("#edit-item").find("input[name='ci']").val();
    var direccion = $("#edit-item").find("input[name='direccion']").val();
    var telefono = $("#edit-item").find("input[name='telefono']").val();
    var celular = $("#edit-item").find("input[name='celular']").val();
    var nit = $("#edit-item").find("input[name='nit']").val();
    var rsocial = $("#edit-item").find("input[name='rsocial']").val();
    var usuario = $("#edit-item").find("input[name='usuario']").val();
    var pass = $("#edit-item").find("input[name='pass']").val();
    var perfil = $("#perfils").val();
    var configuracion = $("#edit-item").find("input[name='configuracion']").val();
    $.ajax({
        dataType: 'json',
        type: 'PUT',
        url: form_action,
        data: {nombre: nombre,
            apellido: apellido,
            ci: ci,
            direccion: direccion,
            usuario: usuario,
            pasword: pass,
            telefono: telefono,
            celular: celular,
            nit: nit,
            razonsocial: rsocial,
            idperfil: perfil}
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
