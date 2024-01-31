$('#btnVerificarCorreo').click(function (event) {
    event.preventDefault();

    var correoF = $('#correo').val();
    var pregunta1F = $('#pregunta1').val();
    var pregunta2F = $('#pregunta2').val();

    if (correoF == '' || pregunta1F == '' || pregunta2F == '') {
        if (correoF == '' && pregunta1F == '' && pregunta2F == '') {
            alert("rellene todos los campos")
            event.preventDefault();
        }
        else if (correoF == '') {
            alert("ingrese el Correo")
            event.preventDefault();
        } else if (pregunta1F == '') {
            alert("ingrese la Pregunta 1")
            event.preventDefault();
        } else if (pregunta2F == '') {
            alert("ingrese la Pregunta 2")
            event.preventDefault();
        }
    } else {
        $.ajax({
            type: "POST",
            url: "ajax/recuperarClave-ajax.php",
            data: {
                correo: correoF,
                pregunta1: pregunta1F,
                pregunta2: pregunta2F
            },
            success: function (response) {
                console.log(response);

                if (response == 'continua para cambia la clave') {
                    var urlActual = window.location.href;
                    var nuevoUrl = urlActual.replace('ruta=recuperarClave', 'ruta=cambiarClave');
                    window.location.href = nuevoUrl;
                } else if (response == 'las preguntas no coinciden') {
                    alert(response)
                    event.preventDefault();
                } else if (response == 'el correo no esta registrado') {
                    alert(response)
                    event.preventDefault();
                } else {
                    alert(response)
                    event.preventDefault();
                }
            },
            error: function (error) {
                console.log(error);
            }

        })
    }
})