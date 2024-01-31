$('#btnActualizarUsuarioA').click(function (event) {
    event.preventDefault();

    var nombreAF = $('#nombreA').val();
    var apellidoAF = $('#apellidoA').val();
    var correoAF = $('#correoA').val();
    var correoA2F = $('#correoA2').val();
    var fotoA = $('#fotoA').val();
    var imgProyecto = $('#fotoA');

    if (correoAF != correoA2F) {
        alert('El correo electronico no coincide');
        event.preventDefault();
    } else if (
        nombreAF === '' ||
        apellidoAF === '' ||
        correoAF === '' ||
        correoA2F === '' 
        // fotoA === ''
    ) {
        alert('ingrese todos los datos');
        event.preventDefault();
    } else if (imgProyecto[0].files.length === 0) {
        alert('selecciona una foto');
        event.preventDefault();
    } else {

        var formData = new FormData($('#formActualizarUsuario')[0]);
        formData.append('fotoA', $('#fotoA')[0].files[0]);

        $.ajax({
            type: "POST",
            url: "ajax/actualizarPerfil-ajax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response)
                // location.reload();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
})