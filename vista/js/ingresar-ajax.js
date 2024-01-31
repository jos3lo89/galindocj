$('#btnIngresar').click(function (event) {
    event.preventDefault();

    var usuarioF = $('#IngresarUsuario').val();
    var claveF = $('#ingresarClave').val();

    if (usuarioF.indexOf(' ') >= 0 || claveF.indexOf(' ') >= 0) {
        if (usuarioF.indexOf(' ') >= 0 && claveF.indexOf(' ') >= 0) {
            alert("el nombre de usuario y la contraseña no puede contener espacios");
            event.preventDefault();
        }
        else if (claveF.indexOf(' ') >= 0) {
            alert("la contraseña no puede contener espacios");
            event.preventDefault();
        } else if (usuarioF.indexOf(' ') >= 0) {
            alert("el nombre de usuario no puede contener espacios");
            event.preventDefault();
        }
    } else if (usuarioF == '' || claveF == '') {
        if (usuarioF == '' && claveF == '') {
            alert("rellene todos los campos");
            event.preventDefault();
        }
        else if (usuarioF == '') {
            alert("ingrese el usuario");
            event.preventDefault();
        } else if (claveF == '') {
            alert("ingrese la contraseña");
            event.preventDefault();
        }
    } else {
        $.ajax({
            type: "POST",
            url: "ajax/ingresar-ajax.php",
            data: {
                usuario: usuarioF,
                clave: claveF
            },
            success: function (response) {
                if (response == "exito al ingresar") {
                    var urlActual = window.location.href;
                    var nuevoUrl = urlActual.replace('ruta=ingresar', 'ruta=inicio')
                    window.location.href = nuevoUrl;
                } else {
                    alert(response);
                }
            },
            error: function (error) {
                console.log(error)
            }
        })
    }
})