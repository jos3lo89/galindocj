if (window.location.href.includes('?ruta=confPerfil')) {
    $.ajax({
        url: 'ajax/pedirDatosUser-ajax.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#usuarioA').val(data[0].usuario_usuario)
            $('#nombreA').val(data[0].usuario_nombre)
            $('#apellidoA').val(data[0].usuario_apellido)
            $('#correoA').val(data[0].usuario_correo)
            $('#correoA2').val(data[0].usuario_correo)
        },
        error: function () {
            alert('error al obtener usuarios');
        }
    });
}