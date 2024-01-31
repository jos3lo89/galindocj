$('#btnRegistrarUsuario').click(function (event) {
    event.preventDefault();

    var usuario = $('#usuario').val();
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var correo = $('#correo').val();
    var correo2 = $('#correo2').val();
    var clave = $('#clave').val();
    var clave2 = $('#clave2').val();
    var foto = $('#foto').val();
    var rol = $('#rol').val();
    var pregunta1 = $('#pregunta1').val();
    var pregunta2 = $('#pregunta2').val();

    if (usuario.indexOf(' ') >= 0) {
        alert('el nombre de usuario no puede contener espacios');
        event.preventDefault();
    } else if (correo != correo2) {
        alert('el correo electronico no coincide');
        event.preventDefault();
    } else if (clave !== clave2) {
        alert('la contraseña no coincide');
        event.preventDefault();
    } else if (
        usuario === '' ||
        nombre === '' ||
        apellido === '' ||
        correo === '' ||
        correo2 === '' ||
        clave === '' ||
        clave2 === '' ||
        foto === '' ||
        rol === '' ||
        pregunta1 === '' ||
        pregunta2 === ''
    ) {
        alert('rellene todos los campos');
        event.preventDefault();
    } else {

        var formData = new FormData($('#registroForm')[0]);
        formData.append('foto', $('#foto')[0].files[0]);

        $.ajax({
            type: "POST",
            url: "ajax/registrar-ajax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 'el usuario ya esta registrado' || response == 'el correo ya esta registrado') {
                    alert(response)
                    event.preventDefault();
                } else {
                    alert(response)
                    $('#registroForm')[0].reset();
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
});