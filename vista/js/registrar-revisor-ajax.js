$('#btnRegistrarUsuarioRevisor').click((event) => {
    event.preventDefault();

    var usuarioRF = $('#usuarioRevisor').val();
    var nombreRF = $('#nombreRevisor').val();
    var apellidoRF = $('#apellidoRevisor').val();
    var correo1RF = $('#correoRevisor').val();
    var correo2RF = $('#correo2Revisor').val();
    var clave1RF = $('#claveRevisor').val();
    var clave2RF = $('#clave2Revisor').val();
    var fotoRF = $('#fotoRevisor').val();
    var pregunta1RF = $('#pregunta1Revisor').val();
    var pregunta2RF = $('#pregunta2Revisor').val();

    if (usuarioRF.indexOf(' ') >= 0) {
        alert('el nombre de usuario no puede contener espacios');
        event.preventDefault();
    } else if (correo1RF != correo2RF) {
        alert('el correo no coincide');
        event.preventDefault();
    } else if (clave1RF !== clave2RF) {
        alert('la contraseña no coincide');
        event.preventDefault();
    } else if (
        usuarioRF === '' ||
        nombreRF === '' ||
        apellidoRF === '' ||
        correo1RF === '' ||
        correo2RF === '' ||
        clave1RF === '' ||
        clave2RF === '' ||
        fotoRF === '' ||
        pregunta1RF === '' ||
        pregunta2RF === ''
    ) {
        alert('rellene todos los campos');
        event.preventDefault();
    } else {
        var formData = new FormData($('#registroFormRevisor')[0]);
        formData.append('fotoRevisor', $('#fotoRevisor')[0].files[0]);

        $.ajax({
            type: "POST",
            url: "ajax/registrar-revisor-ajax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 'el usuario ya esta registrado' || response == 'el correo ya esta registrado') {
                    alert(response)
                    event.preventDefault();
                } else {
                    alert(response)
                    $('#registroFormRevisor')[0].reset();
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
})