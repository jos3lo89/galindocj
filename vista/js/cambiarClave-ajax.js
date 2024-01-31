$('#btnCambiarClave').click(function (event) {
    event.preventDefault();
    var clave1F = $('#calveCambiar1').val();
    var clave2F = $('#calveCambiar2').val();

    if (clave1F == '' || clave2F == '') {
        if (clave1F == '' && clave2F == '') {
            alert("ingrese las 2 contraeñas")
            event.preventDefault();
        } else if (clave1F == '') {
            alert("ingrese la primera contrseña")
            event.preventDefault();
        } else if (clave2F == '') {
            alert("ingrese la segunda contrseña")
            event.preventDefault();
        }
    } else if (clave1F != clave2F) {
        alert("Las contrseñas no coinciden")
        event.preventDefault();
    } else {
        console.log("wadafa")
        $.ajax({
            type: "POST",
            url: "ajax/cambiarClave-ajax.php",
            data: {
                clave1: clave1F
            },
            success: function (response) {
                if (response == 'contraseña cambiada con exito') {
                    alert(response)
                    var actualUrl = window.location.href;
                    var urlNuevo = actualUrl.replace('ruta=cambiarClave', 'ruta=ingresar')
                    window.location.href = urlNuevo;
                } else {
                    alert(response)
                }
            },
            error: function (error) {
                console.log(error)
            }
        })
    }
})